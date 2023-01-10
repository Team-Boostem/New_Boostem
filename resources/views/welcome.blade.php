<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-G59RKSQS1K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G59RKSQS1K');
</script> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boostem</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/welcome.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

</head>

<body>
    <!-- navigation bar start -->
    <x-loader/>
    <div class="all-element-container">
    <nav>
        <div class="max-width navbar">
            <div class="logo">
                <a href="">
                    <img src="{{ URL::asset('public/img/logo.png') }}" alt="Boostem" />
                </a>
            </div>
            <div class="menu">
                <div class="menu-item"><a class="menu-item-a" href="#home-section">Home</a></div>
                <div class="menu-item"><a class="menu-item-a" href="#about-section">About</a></div>
                <div class="menu-item">
                    <a class="menu-item-a" href="#services-section">Services</a>
                </div>
            </div>
            <div class="community-register-btn">
                @auth
                    <a href="{{ url('/dashboard') }}">
                        <button class="register-btn-simp">
                            Dashboard
                        </button>
                    </a>
                @else
                    <a href="{{ url('/login') }}">
                        <button class="register-btn-simp">
                            Login
                        </button>
                    </a>
                @endauth
            </div>
            <div class="hamburger">
                <img class="hamburgerwhite" src="{{ URL::asset('public/icons/hamburgerwhite.png') }}" alt="menu" />
                <img class="hamburgerblack" src="{{ URL::asset('public/icons/hamburger.png') }}" alt="menu" />
            </div>
        </div>
    </nav>
    <div class="black-cover"></div>
    <div class="mobilemenu">
        <div class="mobile-menu-item"><a href="#home-section">Home</a></div>
        <div class="mobile-menu-item"><a href="#about-section">About</a></div>
        <div class="mobile-menu-item"><a href="#services-section">Services</a></div>
    </div>
    <!-- navigation bar end  -->
    <!-- header starts heair -->
    <div class="header" id="home-section">
        <img src="{{ URL::asset('public/img/background.png') }}" alt="" />
        <div class="header-content max-width">
            <h1>Boost Your Community</h1>
            <h1>Empower The World</h1>
            <p>
                Boostem is an online platform which offer critical features that enables integration of Service
                providers, Individuals and Acquisitors
            </p>
            <a href="{{ url('/register') }}">
                <button>Register Now</button>
            </a>
        </div>
    </div>
    <!-- header eng heair -->
    <!-- learn more start heair -->
    <div class="learn-more">
        <div class="learn-more-content max-width">
            <h1>
                Register Your Great Communiy <br />
                With Us!
            </h1>
            <p>
                Boostem is a one stop solution for Communities to manage their events projects and workflow, for
                individuals to learn through various communities and resources and for Aquisitors to publicize their
                organisation as well as hire skilled individuals respectively.
            </p>
            <div class="button-wraper">
                <a href="">
                    <button>Register Now</button>
                </a>
            </div>
        </div>
    </div>
    <!-- learn more ends heair -->
    <!-- intro video section starts heair -->
    <div class="intro-video" id="about-section">
        <div class="video-player display-none">

        </div>
        <button type="button" onclick="playVideo()" class="video-close-btn display-none">close</button>
        <div class="max-width">
            <div class="intro-video-left">
                <h2>Why with us ?</h2>
                <p>
                    We are ready to assist you with any of your needs.
                </p>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Compass.png') }}" alt="" />
                    <p>
                        Offers you a holistic platform for societies.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Connect.png') }}" alt="" />
                    <p>
                        Embraces diverse communities.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Teaching.png') }}" alt="" />
                    <p>
                        Enables learners to enhance their abilities in a fascinating way.
                    </p>
                </div>
            </div>
            <div class="intro-video-right">
                <img type="button" onclick="playVideo()" src="{{ URL::asset('public/img/lep.png') }}"
                    alt="" />
                {{-- <div class="inner">
                    <p>Play</p>
                  </div> --}}
                {{-- <video width="400" controls>
                    <source src="https://drive.google.com/file/d/1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr/view" type="video/mp4">
                  </video> --}}
                {{-- <video width="400" controls>
                    <source src="https://drive.google.com/uc?export=download&id=1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr" type='video/mp4'>
                </video> --}}


            </div>
        </div>
    </div>

    <!-- intro video section ends heair -->
    <!-- Services section starts heair -->
    <div class="Services" id="services-section">
        <div class="max-width">
            <div class="Services-left">
                <img src="{{ asset('public/img/allinone.png') }}" alt="" />
            </div>
            <div class="Services-right">
                <h2>Explore Learn and Grow</h2>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Globe.png') }}" alt="" />
                    <p>
                        Businesses and organizations can publically establish their strong presence.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Services.png') }}" alt="" />
                    <p>
                        Communities can organize , support and even sponsor an event or a competition.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Idea.png') }}" alt="" />
                    <p>
                        Startups and businesses can recruit skilled and talented individuals from various communities.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Puzzle.png') }}" alt="" />
                    <p>
                        Get surrounded by passionate individuals to grow your knowledge and expertise.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services section ends heair -->
    <!-- footer starts heair -->
    <footer>
        <div class="social-media">
            <div class="max-width">
                <p>Stay connected with us on :</p>
                <div class="social-media-icon">
                    <a href="mailto:info.boostem@gmail.com"><img src="{{ asset('public/icons/Gmail Logo.png') }}"
                            alt="" /></a>
                    <a href="https://instagram.com/theboostem?igshid=YmMyMTA2M2Y="><img
                            src="{{ asset('public/icons/Instagram.png') }}" alt="" /></a>
                    <a href="https://www.linkedin.com/company/boostem/"><img
                            src="{{ asset('public/icons/LinkedIn.png') }}" alt="" /></a>
                    <a href="https://chat.whatsapp.com/D49E0ma5oSqCSSt5H3i2na"><img
                            src="{{ asset('public/icons/WhatsApp.png') }}" alt="" /></a>
                    <a href="https://t.me/+sk0McMDN0NQyOWNl"><img src="{{ asset('public/icons/Telegram App.png') }}"
                            alt="" /></a>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="max-width footer-grid">
                <div class="about">
                    <h2>Boostem</h2>
                    <p>
                        Boostem is a one stop solution for Communities to manage their events projects and workflow, for
                        individuals to learn through various communities and resources and for Aquisitors to publicize
                        their organisation as well as hire skilled individuals respectively.</p>
                    {{-- <a href="mailto:info.boostem@gmail.com">
                        <img src="{{ asset('public/icons/Home.png') }}" alt="" />
                        <p>info.boostem@gmail.com</p>
                    </a>
                    <a href="">
                        <img src="{{ asset('public/icons/Phone.png') }}" alt="" />
                        <p>+91 7987250919</p>
                    </a> --}}
                </div>
                <div class="quick-links">
                    <h3>Quick links</h3>
                    <a href=""> About us </a>
                    <a href="{{ url('/dashboard') }}"> Your profile </a>
                    <a href="{{ url('/home') }}"> Discover </a>
                    <a href="{{ url('user/register') }}"> Upcoming events </a>
                </div>
                <div class="contact">
                    <h3 style="padding-bottom: 0;">Contact us</h3>
                    {{-- <form action="{{ route('contact.us') }}" method="POST">
                        <input name="email" type="text" placeholder="Email :" />
                        <textarea name="query" type="texta" placeholder="Query :"></textarea>
                        <button type="submit" >Submit</button>
                    </form> --}}
                    <div class="about" style="padding-top: 0;">
                        <a href="mailto:info.boostem@gmail.com">
                            <img src="{{ asset('public/icons/Home.png') }}" alt="" />
                            <p>info.boostem@gmail.com</p>
                        </a>
                        <a href="">
                            <img src="{{ asset('public/icons/Phone.png') }}" alt="" />
                            <p>+91 7987250919</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    <!-- footer ends heair -->
    <script>
        const nav = document.querySelector("nav");
        const hamburger = document.querySelector(".hamburger");
        const mobilemenu = document.querySelector(".mobilemenu");
        const blackcover = document.querySelector(".black-cover");
        const videoplayer = document.querySelector(".video-player");
        const videoclosebtn = document.querySelector(".video-close-btn");

        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                nav.classList.add('white-nav');
            } else {
                nav.classList.remove('white-nav');
            }
        }

        function mobileMenu() {
            if (mobilemenu.classList.contains('show-mobilemenu')) {
                mobilemenu.classList.remove('show-mobilemenu');
                blackcover.style.display = "none";
            } else {
                mobilemenu.classList.add('show-mobilemenu');
                blackcover.style.display = "block";
            }
        }

        function playVideo() {
            if (videoplayer.classList.contains('display-none')) {
                videoplayer.classList.remove('display-none');
                videoplayer.innerHTML =
                    `<iframe allowfullscreen="" src="https://drive.google.com/file/d/1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr/preview" width="800px" height="450px"></iframe>`;
                videoclosebtn.classList.remove('display-none');
            } else {
                videoplayer.classList.add('display-none');
                videoplayer.innerHTML = ``;
                videoclosebtn.classList.add('display-none');
            }
        }

        hamburger.addEventListener("click", mobileMenu);
    </script>
    <script type="text/javascript">
        $(".all-element-container").hide();
        //windows on load but min of 800ms
        $(window).on('load', function() {
            setTimeout(function() {
                $("#loder-container").fadeOut("10");
                $(".all-element-container").fadeIn("10");
            }, 500);
        });
    </script>
</body>

</html>
