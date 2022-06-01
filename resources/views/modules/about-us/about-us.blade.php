@extends('layouts.nav')

@section('title', 'About')

@section('content')
    <div class="wrapper">
        <div class="wrapperInner wrapperInnerTwo">
{{--            <div class="sidebar sidebarAbout">--}}
{{--                <div class="pageNumber">--}}
{{--                    <span>0</span>/<span>6</span>--}}
{{--                </div>--}}
{{--                <div class="veticalline">--}}
{{--                    <div class="vl"></div>--}}
{{--                    <div class="vl"></div>--}}
{{--                    <div class="vl"></div>--}}
{{--                    <div class="vl"></div>--}}
{{--                    <div class="vl"></div>--}}
{{--                </div>--}}
            <div class="fullOpacity">
                <div class="rightNormal aboutRightNormal">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('user-home')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user-home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active-nav" href="{{route('about')}}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user-slider-form')}}">Apply</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainTitle">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="leftOpacity">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fab fa-facebook-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fab fa-whatsapp"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="socialIcons fab fa-youtube-square"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!--<div class="cottage aboutCottage">-->
                    <!--    <img src="{{asset('assets/img/hutCircle.png')}}" alt="">-->
                    <!--</div>-->
                    <div class="container-fluid">
                        <div class="form aboutform">
                            <a href="{{route('user-home')}}"><i class="fal fa-times-circle"></i></a>
                            <h1>About us</h1>
                            <div class="mainTitle d-none">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis vel accusantium, ab ea consectetur fugit? Totam, omnis voluptatum perferendis inventore, quibusdam tempora delectus amet iusto adipisci, placeat ratione. Molestiae.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="footer">
                <p class="copyright">2022 &copy; جميع الحقوق محفوظة</p>
            </div>
        </div>
    </div>
@endsection
