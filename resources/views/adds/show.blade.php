<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TO-LET | Find the best houses for your livings</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/jquery.scrolly.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/scripts.js')}}" type="text/javascript"></script>
<script src="{{asset('js/phoneformat.js')}}" type="text/javascript"></script>

    
    <header id="header" role="banner">
        <div class="container-fluid">
            <a href="{{url('/')}}" class="logo">TO-LET</a>
            <div class="user-menu">
                @if (Route::has('login'))
                    @if (Auth::check())
                    <li class="dropdown" style="list-style: none;">
                            <a href="#" class="dropdown-toggle link" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/home')}}">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <a class="link signup-modal" href="{{url('/hosts/create') }}">Register</a>
                        <a class="signup-link" >Login</a>
                    @endif
                    <!-- <a class="link signup-modal">Register</a>
                    <a class="signup-link">Sign in</a> -->
                @endif
                <div class="user-box">
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-box">
                            <input id="txtUsername" type="text" name="email" class="form-input" placeholder="Email">
                            <input id="txtPassword" type="password" name="password" class="form-input password-input" placeholder="Password">
                            <a href="#">Forgot password?</a>
                        </div>
                        <button id="loginBtn" type="submit" class="btn btn-action">
                            Login
                        </button>
                        <a href="/fbauth" class="btn">Connect with <strong>facebook</strong></a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script type="text/javascript">
    $(function() {
        setInterval(function() {

            if (window.loginFlag === "true") {
                window.loginFlag = "false";
                $('#headerContent').load('HeaderContent');
            }},  1000);
    });
</script>

<main id="content" class="homepage">
    <div class="page-header" id="headerContent" style="height:250px">
       <div class="parallax-bg" data-velocity=".5"></div>
        <div class="header-content">
            <h1 class="title">Add Details</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-content">

            <div class="listings-grid">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <img src="{{asset($add->image)}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-sm-5">
                        <div class="add-details" style="padding-left:20px;">
                            <h1>{{$add->name}}</h1>
                            <h2><b><mark>Price: {{$add->price}}</mark></b></h2>
                            <p>{{$add->description}}</p>
                            <h4><b>Address:</b> {{$add->host->address}}<br> {{$add->host->city}}-{{$add->host->zip}}, {{$add->host->state}}</h4>
                            <h2><b>Contact: <a href="callto:{{$add->host->phone}}">{{$add->host->phone}}</a></b></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    
<footer id="footer" role="contentinfo">
    <div class="footer-nav contain-row">
        <div class="footer-block">
            <ul>
                <li class="footer-block-title">Company</li>
                <li><a href="#">About</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Policies</a></li>
            </ul>
        </div>
        <div class="footer-block">
            <ul>
                <li class="footer-block-title">Listing</li>
                <li><a href="#">Why List</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Policies</a></li>
            </ul>
        </div>
        <div class="footer-block">
            <ul>
                <li class="footer-block-title">Address</li>
                <li>Somewhere<br>In Belgium<br>34593</li>
            </ul>
        </div>
        <div class="footer-block">
            <ul>
                <li class="footer-block-title">Contact us</li>
                <li>LICT, Chittagong<br>Bangladesh<br>4000</li>
            </ul>
        </div>
    </div>
    <ul class="footer-social">
        <li class="ico-facebook"><a href="#">facebook</a></li>
        <li class="ico-google-plus"><a href="#">google</a></li>
        <li class="ico-twitter"><a href="#">twitter</a></li>
        <li class="ico-linkedin"><a href="#">linkedin</a></li>
        <li class="ico-pinterest"><a href="#">pinterest</a></li>
        <li class="ico-youtube"><a href="#">youtube</a></li>
        <li class="ico-instagram"><a href="#">instagram</a></li>
    </ul>
    <p class="copyright">&copy; All rights reserved by <b>GROUP-F</b> lict batch TUP-OFF-H-38</p>
</footer>
</body>
</html>