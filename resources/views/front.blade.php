<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepooling</title>

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
            <a href="/" class="logo">home<span>pooling</span></a>
            <div class="user-menu">
                @if (Route::has('login'))
                    @if (Auth::check())
                        <a class="link" href="{{ url('/home') }}">Home</a>
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

            <div class="listings-grid">
                @foreach($adds as $add)
                <div class="listing-block">
                    <a href="#" class="listing-image">
                        <img src="{{$add->image}}">
                        <span class="listing-label label-new">New</span>
                        <span class="listing-price">&#8364;{{$add->price}}</span>
                    </a>
                    <div class="listing-visitors">
                        <a href="#" class="visitor visitor-main"></a>
                        <a href="#" class="visitor"></a>
                        <a href="#" class="visitor"></a>
                    </div>
                    <div class="listing-info">
                        <a href="#">{{$add->host->address}}</a>
                        <span>{{$add->host->city}}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <h1 class="page-title">Latest Users</h1>
            <div class="listings-grid users">
                    @foreach($hosts as $host)
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="images/profiles/blank.png" alt="bob marley"></span>
                        <span class="user-name">{{$host->name}}</span>
                    </a>
                    @endforeach
                    <!-- <a href="#" class="user-link">
                        <span class="user-image"><img src="images/profiles/blank.png" alt="AAA BBB"></span>
                        <span class="user-name">AAA</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="images/profiles/blank.png" alt="Maryana Brodyk"></span>
                        <span class="user-name">Maryana</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="images/profiles/blank.png" alt="Riya J"></span>
                        <span class="user-name">Riya</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="images/profiles/blank.png" alt="Abc Def"></span>
                        <span class="user-name">Abc</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="http://www.gravatar.com/avatar/65f5d2b75c75eb7c336da804293aed66?size=500&amp;d=/content/images/profiles/blank.png" alt="Diginari Townsend"></span>
                        <span class="user-name">Diginari</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="https://scontent.xx.fbcdn.net/hprofile-xaf1/v/t1.0-1/p720x720/1743586_10152499095082076_3282536413329396963_n.jpg?oh=4cac83def0af8087dc038ec30d4d478d&amp;oe=5731EF14" alt="Mark Hardman"></span>
                        <span class="user-name">Mark</span>
                    </a>
                    <a href="#" class="user-link">
                        <span class="user-image"><img src="https://scontent.xx.fbcdn.net/hprofile-xfp1/v/t1.0-1/p720x720/1549_10153437498344385_9035856575616369901_n.jpg?oh=89c8e25d14b4e20a355e0c601ef7bbb6&amp;oe=574759C9" alt="Jamie Townsend"></span>
                        <span class="user-name">Jamie</span>
                    </a> -->

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
                <li>0032 4442223</li>
                <li>info@homepooling.com</li>
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
    <p class="copyright">&copy; 2016 Homepooling.com - v 1.0.99</p>
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