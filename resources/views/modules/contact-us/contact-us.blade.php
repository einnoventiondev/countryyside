@extends('layouts.nav')

@section('title', 'Contact Us')

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
{{--            </div>--}}
            
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
                                    <a class="nav-link" href="{{route('about')}}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user-slider-form')}}">Apply</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active-nav" href="{{route('contact')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <div class="form contactform">
                            @if (count($errors) > 0)
                                <div class = "alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('contact-us')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userName">Name</label><i class="fas fa-star"></i>
                                            <input type="text" class="form-control" id="userName" placeholder="Full Name" name="customer_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userEmail">Email</label><i class="fas fa-star"></i>
                                            <input type="email" class="form-control" id="userEmail" placeholder="name@domain.com" name="customer_email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userNumber">Mobile</label><i class="fas fa-star"></i>
                                            <input style="direction: ltr;text-align: end;" type="number" class="form-control" id="userNumber" placeholder="+9665xxxxxx" name="customer_number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="msgTitle">Message Title</label><i class="fas fa-star"></i>
                                            <input type="text" class="form-control" id="msgTitle" placeholder="Title" name="msg_title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label><i class="fas fa-star"></i>
                                            <textarea name="message" id="message" placeholder="Message..." cols="0" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4"><button class="shadowButton mb-2" type="submit"><i class="fas fa-check"></i></button></div>
                                <div class="send">Send</div>
                                @if(session()->has('contact-message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('contact-message') }}
                                    </div>
                                @endif
                            </form>
                        </div>
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
                            <h1>Contact us</h1>
                            <div class="form contactform d-none">
                                @if (count($errors) > 0)
                                    <div class = "alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('contact-us')}}" method="POST">
                                    @csrf
                                    <div class="addmoreNameHeight">
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userName">Name</label><i class="fas fa-star"></i>
                                                <input type="text" class="form-control" id="userName" placeholder="Full Name" name="customer_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userEmail">Email</label><i class="fas fa-star"></i>
                                                <input type="email" class="form-control" id="userEmail" placeholder="name@domain.com" name="customer_email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userNumber">Mobile</label><i class="fas fa-star"></i>
                                                <input style="direction: ltr;text-align: end;" type="number" class="form-control" id="userNumber" placeholder="9665xxxxxxx+" name="customer_number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="msgTitle">Message Title</label><i class="fas fa-star"></i>
                                                <input type="text" class="form-control" id="msgTitle" placeholder="Title" name="msg_title" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="message">Message</label><i class="fas fa-star"></i>
                                                <textarea name="message" id="message" placeholder="Message..." cols="0" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center mt-4"><button type="submit"><i class="fas fa-check"></i></button></div>
                                    <div class="send">Send</div>
                                    @if(session()->has('contact-message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('contact-message') }}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="clear"></div>
            
            <div class="footer">
                <p class="copyright">جميع الحقوق محفوظة @ 2021</p>
            </div>
        </div>
    </div>
    @endsection
