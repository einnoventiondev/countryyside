@extends('layouts.user')

@section('title', 'اكواخ الريف')


@section('content')

    <div class="planeWrapper">
        <div class="">
            <div class="planeFly">
                <div><img src="{{asset('assets/img/airplane.png')}}" alt=""></div>
                <div class="flyText">
                    <h1 class="mt-3">تم تسجيل طلبك بنجاح</h1>
                    <p>سيتم التواصل معك قريباً للحجز</p>
                </div>
            </div>
            <div class="planeCross">
                <a href="{{route('user-home')}}"><i class="fal fa-times-circle"></i></a>
            </div>
            <div class="rightNormal">
                <nav class="nav-animation navbar navbar-expand-md navbar-light d-none">
                    <a class="navbar-brand" href="{{route('user-home')}}">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav nav nav-tabs">
                            <li class="nav-item">
                                <a data-toggle="tab" href="#home" class="active">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#menu1" >عن أكواخ الريف</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#menu2" >تقديم طلب</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#menu3">تواصل معنا</a>
                            </li>
                            <li class="nav-item">
                                <nav class=" navShow d-none navbar navbar-expand-md navbar-light">
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
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="{{route('login')}}"><i class="socialIcons fas fa-user"></i></a>-->
                                        <!--</li>-->
                                    </ul>
                                    <ul class="navbar-nav rightNav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('login')}}"><i class="socialIcons fas fa-user"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
            <div class="leftOpacity flyLeft">
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
                    <ul class="navbar-nav rightNav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}"><i class="socialIcons fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer">
                <p class="copyright" style="bottom:0">جميع الحقوق محفوظة @ 2021</p>
            </div>
    </div>
@endsection
