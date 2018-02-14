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
    <div class="page-header" id="headerContent">
       <div class="parallax-bg" data-velocity=".5"></div>
        <div class="header-content">
            <p><b><mark>Admin Email: shaonmohajon@gmail.com & pass: secret</mark></b></p>
            <h1 class="title">Half the bills,<br>double the life</h1>
            <h2 class="subtitle">Join our community today!</h2>
            <div class="modal-wrapper">
                <a href="{{url('/hosts/create')}}" class="btn-cta signup-modal">Sign up</a><span>It's free</span>
            </div>
        </div>
    </div>
    <div class="contain-row">
        <div class="page-content">
            <h1 class="page-title">Latest Listings</h1>

            
            @foreach($adds->chunk(3) as $chunk)
            <div class="listings-grid">
                @foreach($chunk as $add)
                <div class="listing-block">
                    <a href="{{route('showadd.view', $add->id)}}" class="listing-image">
                        <img src="{{$add->image}}">
                        <span class="listing-label label-new">New</span>
                        <span class="listing-price">Tk. {{$add->price}}</span>
                    </a>
                    <div class="listing-visitors">
                        <a href="#" class="visitor visitor-main"></a>
                        <a href="#" class="visitor"></a>
                        <a href="#" class="visitor"></a>
                    </div>
                    <div class="listing-info">
                        <a href="{{route('showadd.view', $add->id)}}">{{$add->host->address}}</a>
                        <span>{{$add->host->city}}</span>
                    </div>
                </div>
                @endforeach
                </div>
            @endforeach
            

            <h1 class="page-title">Latest Users</h1>
            <div class="listings-grid users">
                @foreach($hosts as $host)
                <a href="#" class="user-link">
                    <span class="user-image"><img src="images/profiles/blank.png" alt="bob marley"></span>
                    <span class="user-name">{{$host->name}}</span>
                </a>
                @endforeach
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
                <li>LICT, Chittagong<br>Bangladesh<br>4000</li>
            </ul>
        </div>
        <div class="footer-block">
            <ul>
                <li class="footer-block-title">Contact us</li>
                <li>031 458398</li>
                <li>info@to-let.com</li>
            </ul>
        </div>
    </div>
    <ul class="footer-social">
        <li class="ico-facebook"><a href="#">facebook</a></li>
        <li class="ico-google-plus"><a href="#">google</a></li>
        <li class="ico-twitter"><a href="#">twitter</a></li>
        <li class="ico-instagram"><a href="#">instagram</a></li>
    </ul>
    <p class="copyright">&copy; All rights reserved by <b>GROUP-G</b> lict batch TUP-OFF-H-38</p>
</footer>
    <div id="signup-third" class="modal-box mfp-hide">
    <div class="modal-header"><img src="css/images/logo.png" height="39" width="198" alt=""></div>
    <div class="modal-content">

        <object type="image/svg+xml" data="images/tick.svg">Your browser does not support SVG</object>

        <h2 style="font-size: 2em; color: #009ee3">Complete your profile</h2>
        <p style="font-size: 0.8em; color: #009ee3">You must <strong>verify</strong> your <strong>profile</strong> to connect with other members,<br/>
            this protects our community from spammers.
        </p>
    </div>
</div>
<div id="signup-first" class="modal-box mfp-hide">
    <div class="modal-header"><img src="css/images/logo.png" height="39" width="198" alt=""></div>
    <div class="modal-content">
        <a href="/fbauth" class="btn">Connect with <strong>facebook</strong></a>
        <span>or</span>
        <a href="{{url('/hosts/create')}}" class="btn btn-action"><strong>Register</strong> manually</a>
    </div>
</div>
<div id="signup-second" class="modal-box mfp-hide">
    <div class="modal-header"><img src="css/images/logo.png" height="39" width="198" alt=""></div>
    <div class="modal-content register">
        <div class="register-form">

            <div id="registrationMessage"></div>

            <div class="input-fields">
                <h2>Tell us about you</h2>
                <div class="input-box">

                    <input type="text" id="firstname" name="firstname" class="form-input" placeholder="First Name" required />
                    <input type="text" id="lastname" name="lastname" class="form-input" placeholder="Last Name" required />

                </div>
                <div class="input-box">

                    <input type="number" min="1" max="12" id="dobMonth" name="dobMonth" class="form-input registerBoxThreeLeft" placeholder="Month" required />
                    <input type="number" min="1" max="31" id="dobDay" name="dobDay" class="form-input registerBoxThreeMiddle" placeholder="Day" required />
                    <input type="number" min="1900" max="1998" id="dobYear" name="dobYear" class="form-input registerBoxThreeRight" placeholder="Year" required />

                </div>

                <select id="gender" name="gender" required class="form-input registerGender">
                    <option value="" default hidden selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <input type="email" id="email" name="email" class="form-input" placeholder="Email" required />

            </div>
            <button class="btn btn-action" id="btnRegistration">Register</button>

    </div>
        <div class="note">
            <p>Your privacy matters ad it is 100% free to sign up.<br/>We never share your information without consent. <a href="#">Terms and Conditions.</a>
            </p>
        </div>
</div>
</div>

    
</body>
</html>