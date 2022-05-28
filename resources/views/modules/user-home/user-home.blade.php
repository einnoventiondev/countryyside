@extends('layouts.master-slider')

@section('title', 'اكواخ الريف')


@section('content')
    <div class="wrapper">
        <!--<h1>hello</h1>-->
        <!--      <ul class="nav nav-tabs">-->
        <!--          <li><a data-toggle="tab" href="#home" class="active">Home</a></li>-->
        <!--          <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>-->
        <!--          <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
        <!--          <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
        <!--        </ul>-->
        <!--        <div class="tab-content">-->
        <!--  <div id="home" class="tab-pane fade in active show">-->
        <!--    <h3>HOME</h3>-->
        <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
        <!--  </div>-->
        <!--  <div id="menu1" class="tab-pane fade">-->
        <!--    <h3>Menu 1</h3>-->
        <!--    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
        <!--  </div>-->
        <!--  <div id="menu2" class="tab-pane fade">-->
        <!--    <h3>Menu 2</h3>-->
        <!--    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>-->
        <!--  </div>-->
        <!--  <div id="menu3" class="tab-pane fade">-->
        <!--    <h3>Menu 3</h3>-->
        <!--    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="rightNormal" style="height:unset">
            <nav class="nav-animation navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('user-home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>
                <button id="ChangeToggle" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span id="navbar-hamburger" class="navbar-toggler-icon"></span>
                    <i id="navbar-close" class="hidden fal fa-times-circle"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav nav nav-tabs">
                        <li class="nav-item">
                            <a id="reloader" data-toggle="tab" href="#home" class="active">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a id="reloader1" data-toggle="tab" href="#menu1">عن أكواخ الريف</a>
                        </li>
                        <li class="nav-item">
                            <a id="formTab" data-toggle="tab" href="#menu2">تقديم طلب</a>
                        </li>
                        <li class="nav-item">
                            <a id="contactTab" data-toggle="tab" href="#menu3">تواصل </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <nav class=" navShow d-none navbar navbar-expand-md navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i
                                            class="socialIcons fab fa-facebook-square"></i></a>
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
                                <!--    <a class="nav-link" href="{{ route('login') }}"><i class="socialIcons fas fa-user"></i></a>-->
                                <!--</li>-->
                            </ul>
                            <ul class="navbar-nav rightNav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i
                                            class="socialIcons fas fa-user"></i></a>
                                </li>

                            </ul>
                        </nav>
                    </ul>
                </div>

            </nav>
        </div>
        <div class="leftOpacity leftNoOpacity" style="height:unset">
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
                        <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="socialIcons fas fa-user"></i></a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="clear"></div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active show">
                <div class="wrapperInner">
                    <div class="sidebar">
                        <div class="pageNumber">
                            <span>0</span>/<span>6</span>
                        </div>
                        <div class="veticalline">
                            <!--<div class="vl"></div>-->
                            <div class="vl"></div>
                            <div class="vl"></div>
                            <div class="vl"></div>
                            <div class="vl"></div>
                            <div class="vl"></div>
                            <div class="vl"></div>
                        </div>
                    </div>
                    <div class="rightNormal" style="height:unset">
                        <!--<div  class="hut-animation cottage d-none">-->
                        <!--    <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                        <!--</div>-->
                        <div class="title-animation mainTitle">
                            <h1>عنوان رئيسي</h1>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى.</p>
                        </div>
                        <div class="clear"></div>
                        <div class="startedCircles">
                            <div class="getStarted">لنبدأ</div>
                            <div class="circlesRight">
                                <img class="mx-1" src="{{ asset('assets/img/Ellipse2.png') }}" alt="">
                                <img src="{{ asset('assets/img/circlesRight.png') }}" alt="">
                            </div>
                            <div class="circleBottom">
                                <div><img class="mb-2" src="{{ asset('assets/img/Ellipse3.png') }}" alt=""></div>
                                <div><img src="{{ asset('assets/img/circleGroupbottom.png') }}" alt=""></div>
                                <div><a id="contentM" data-toggle="tab" href="#menu2"><button class="animateButton"><i
                                                class="far fa-arrow-left"></i></button></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="leftOpacity leftNoOpacity" style="height:unset">
                        <!--<div  class="hut-animation cottage">-->
                        <!--    <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                        <!--</div>-->
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div>
                    <div class="wrapperInner WrapperAbout">
                        <div class="sidebar aboutSidebar">
                            <div class="pageNumber">
                                <span>0</span>/<span>6</span>
                            </div>
                            <div class="veticalline">
                                <!--<div class="vl"></div>-->
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                            </div>
                        </div>

                        <div class="rightNormal aboutRightNormal">
                            <nav class="navbar navbar-expand-md navbar-light d-none">
                                <a class="navbar-brand" href="{{ route('user-home') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#collapsibleNavbar">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user-home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active-nav" href="{{ route('about') }}">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user-slider-form') }}">Apply</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="mainTitle aboutPara">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                    الحروف التى يولدها التطبيق.
                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                                    تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على
                                    وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                                    النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه
                                    التصميم فيظهر بشكل لا يليق.
                                    هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم،
                                    غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="">
                            <div class="leftOpacity">
                                <nav class="navbar navbar-expand-md navbar-light d-none">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-facebook-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-instagram"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-whatsapp"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-youtube-square"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--<div class="cottage aboutCottage">-->
                                <!--    <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                                <!--</div>-->
                                <div class="container-fluid">
                                    <div class="form aboutform aboutHeading">
                                        <a href="{{ route('user-home') }}"><i class="fal fa-times-circle"></i></a>
                                        <h1>عن أكواخ الريف</h1>
                                        <!--                                <div class="mainTitle d-none">-->
                                        <!--                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.-->
                                        <!--إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.-->
                                        <!--ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.-->
                                        <!--هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>-->
                                        <!--                                </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div>
                    <!--<div id="aplForm"  class="hut-animation cottage">-->
                    <!--        <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                    <!--    </div>-->
                    <div id="bgBlur" class="wrapperInner wrapperInnerTwo sliderWrapper">

                        <div class="">
                            <div class="rightNormal" style="height:unset">
                                <nav class="nav-animation navbar navbar-expand-md navbar-light d-none">
                                    <a class="navbar-brand" href="{{ route('user-home') }}">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#collapsibleNavbar">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('user-home') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about') }}">About us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active-nav"
                                                    href="{{ route('user-slider-form') }}">Apply</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>

                                <!-- <div class="clear"></div> -->

                            </div>
                            <div class="leftOpacity" style="height:unset">
                                <nav class="navbar navbar-expand-md navbar-light d-none">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-facebook-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-instagram"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-whatsapp"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i
                                                    class="socialIcons fab fa-youtube-square"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--<div class="cottage aboutCottage">-->
                                <!--    <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                                <!--</div>-->
                            </div>
                            <div class="vacationCarasol">
                                <div id="demo" class="carousel slide" data-interval="false">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                        <li data-target="#demo" data-slide-to="3"></li>
                                        <li data-target="#demo" data-slide-to="4"></li>
                                        <li data-target="#demo" data-slide-to="5"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <form action="{{ route('slider-user-form') }}" method="POST">
                                            @csrf


                                            <div class="carousel-item active">
                                                <div class="pageNumber">
                                                    <span>1</span>/<span>6</span>
                                                </div>
                                                <div class="mainTitle destinationTitle">
                                                    <h1>ماهي الوجهه ؟</h1>
                                                    <p>من خلال هذه الخيارات تبين للمنسق معرفة رغبة العميل 
                                                    في تحديد وجهته وتقديم الدعم المناسب له</p>
                                                </div>
                                                <div class="allErrors" id="errorid1"></div>
                                                <div class="continentForm">
                                                    <div class="switch-field">
                                                        <div class="continentfield">
                                                            <input class="continent" type="radio"
                                                                id="continent-euorpe" name="continent" value="أوروبا">
                                                            <label for="continent-euorpe">أوروبا <img
                                                                    src="{{ asset('assets/img/euorop.png') }}"
                                                                    alt=""></label>
                                                        </div>
                                                        <div class="continentfield">
                                                            <input class="continent" type="radio" id="continent-asia"
                                                                name="continent" value="آسيا">
                                                            <label for="continent-asia">آسيا <img
                                                                    src="{{ asset('assets/img/asia.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input class="continent" type="radio"
                                                                id="continent-arabian" name="continent" value="دول
    عربية">
                                                            <label for="continent-arabian">دول
                                                                عربية <img src="{{ asset('assets/img/arabian.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input class="continent" type="radio" id="continent-other"
                                                                name="continent" value="اقترح
    اخرى">
                                                            <label for="continent-other">اقترح
                                                                اخرى <img src="{{ asset('assets/img/other.png') }}"
                                                                    alt=""></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <div class="select">
                                                        يمكنك اختيار واحد
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="pageNumber">
                                                    <span>2</span>/<span>6</span>
                                                </div>
                                                <div class="mainTitle destinationTitle">
                                                    <h1>سجل الزيارات السابقة ؟</h1>
                                                    <p>من خلال هذا الخيار يمكن للمنسق من معرفة 
                                                    سجل سفرك وتقديم المقترح المناسب لك حسب رغبتك وسجل سفرك</p>
                                                </div>
                                                <div class="allErrors" id="errorid2"></div>
                                                <div class="continentForm sajalContinentForm">
                                                    <div class="switch-field sajalSwitchField">
                                                        <div class="continentfield sajalContinentfield">
                                                            <label class="forInputs" for="euorpeCity">اوروبا</label>


                                                            <select class="selectPicker" onchange="myfunction()"
                                                                id="euorpeCity" name="previous_travel_europe"
                                                                data-show-subtext="true" data-live-search="true">
                                                                <option value="" selected>اختيار متعدد</option>
                                                                @foreach ($europe as $city)
                                                                    <option value="{{ $city->city }}">
                                                                        {{ $city->city }}</option>
                                                                @endforeach
                                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                            </select>


                                                        </div>
                                                        <div class="continentfield sajalContinentfield">
                                                            <label class="forInputs" for="asiaCity">آسيا </label>


                                                            <select class="selectPicker" onchange="myfunction()"
                                                                id="asiaCity" name="previous_travel_asia"
                                                                data-show-subtext="true" data-live-search="true">
                                                                <option value="" selected disabled>اختيار متعدد</option>
                                                                @foreach ($asia as $city)
                                                                    <option value="{{ $city->city }}">
                                                                        {{ $city->city }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="continentfield sajalContinentfield">
                                                            <label class="forInputs" for="arabicCity">دول عربية
                                                            </label>
                                                            <select class="selectPicker" onchange="myfunction()"
                                                                id="arabicCity" name="previous_travel_arabia"
                                                                data-show-subtext="true" data-live-search="true">
                                                                <option value="" selected>اختيار متعدد</option>
                                                                @foreach ($arabia as $city)
                                                                    <option value="{{ $city->city }}">
                                                                        {{ $city->city }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="checkbox" onchange="change()" id="first-travel"
                                                                name="previous_travel" value="first time">
                                                            <label for="first-travel">أول
                                                                سفره <img src="{{ asset('assets/img/firstTravel.png') }}"
                                                                    alt=""></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <div class="select">
                                                        يمكنك اختيار واحد </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="pageNumber">
                                                    <span>3</span>/<span>6</span>
                                                </div>
                                                <div class="mainTitle destinationTitle">
                                                    <h1 class="prfAcc">معرفة نوعية الفنادق المراد حجزها ؟</h1>
                                                    <p>من هنا 
                                                    يمكن للعميل تحديد النوع المحبب له من الوحدات السكنية او ترك هذه المهمه للمنسق في اختيار الانسب 
                                                    حسب المتاح والميزانية</p>
                                                </div>
                                                <div class="allErrors" id="errorid3"></div>
                                                <div class="continentForm">
                                                    <div class="switch-field">
                                                        <div class="preferedfield">
                                                            <input type="radio" id="prefered-hotel" name="stay"
                                                                value="فنادق">
                                                            <label for="prefered-hotel">فنادق <img
                                                                    src="{{ asset('assets/img/Building.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="preferedfield">
                                                            <input type="radio" id="prefered-cottage" name="stay"
                                                                value="كواخ">
                                                            <label for="prefered-cottage">أكواخ <img
                                                                    src="{{ asset('assets/img/minicottage.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="preferedfield">
                                                            <input type="radio" id="prefered-mix" name="stay" value="مزيج">
                                                            <label for="prefered-mix">مزيج <img
                                                                    src="{{ asset('assets/img/Building.png') }}"
                                                                    alt=""><img
                                                                    src="{{ asset('assets/img/minicottage.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="preferedfield">
                                                            <input type="radio" id="prefered-flight" name="stay" value="رحلة
    مباشرة">
                                                            <label for="prefered-flight">رحلة
                                                                مباشرة <img src="{{ asset('assets/img/travelbag.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                        <div class="preferedfield">
                                                            <input type="radio" id="prefered-me" name="stay" value="اقترح
    لي">
                                                            <label for="prefered-me">اقترح
                                                                لي <img src="{{ asset('assets/img/onlyme.png') }}"
                                                                    alt=""></label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <div class="select">
                                                        يمكنك اختيار واحد
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="pageNumber">
                                                    <span>4</span>/<span>6</span>
                                                </div>
                                                <div class="mainTitle destinationTitle">
                                                    <h1>ماهي درجة حجز الطيران ؟</h1>
                                                    <p>هذه الصفحة اختياريه في 
                                                    حال رغبة العميل من مساعدته في اضافة حجز الطيران لحزمة الحجز الكاملة .</p>
                                                </div>
                                                <div class="allErrors" id="errorid4"></div>
                                                <div class="continentForm">
                                                    <div class="switch-field">
                                                        <div class="continentfield">
                                                            <input type="radio" id="flight-bussiness" name="flight_class"
                                                                value="درجة
    اعمال واولى">
                                                            <label for="flight-bussiness">درجة<br>
                                                                اعمال واولى</label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="flight-economy" name="flight_class"
                                                                value="درجة
    سياحية">
                                                            <label for="flight-economy">درجة
                                                                سياحية </label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="flight-direct" name="flight_class"
                                                                value="رحلة
    مباشرة">
                                                            <label for="flight-direct">رحلة
                                                                مباشرة </label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="continent-noneed" name="flight_class"
                                                                value="لا
    اريد">
                                                            <label for="continent-noneed">
                                                                ليس هناك حاجة
                                                                <img src="{{ asset('assets/img/noneed.png') }}"
                                                                    alt=""></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <div class="select">
                                                        يمكنك اختيار واحد </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="pageNumber">
                                                    <span>5</span>/<span>6</span>
                                                </div>
                                                <div class="mainTitle destinationTitle">
                                                    <h1>ماهي نوعية السيارة ؟</h1>
                                                    <p>هذه الصفحة اختياريه في حال رغبة العميل 
                                                    من مساعدته في اضافة حجز الطيران لحزمة الحجز الكاملة .</p>
                                                </div>
                                                <div class="allErrors" id="errorid5"></div>
                                                <div class="continentForm">
                                                    <div class="switch-field">
                                                        <div class="continentfield">
                                                            <input type="radio" id="van-luxury" name="car_type"
                                                                value="فارهة">
                                                            <label for="van-luxury">فارهة</label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="van-economy" name="car_type"
                                                                value="اقتصادية">
                                                            <label for="van-economy">اقتصادية </label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="van-family" name="car_type" value="عائلات
    (فان)">
                                                            <label for="van-family">عائلات
                                                                (فان) </label>

                                                        </div>
                                                        <div class="continentfield">
                                                            <input type="radio" id="van-noneed" name="car_type" value="لا
    اريد">
                                                            <label for="van-noneed">لا
                                                                اريد <img src="{{ asset('assets/img/noneed.png') }}"
                                                                    alt=""></label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <div class="select">
                                                        يمكنك اختيار واحد </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="pageNumber">
                                                    <span>6</span>/<span>6</span>
                                                </div>
                                                <div class="form applyform">
                                                    <h1>أكمل تعبئة بياناتك</h1>
                                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                                        النص من مولد النص العربى.</p>

                                                    <div class="addmoreNameHeightLast">
                                                        <div class="customer_records">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group ">
                                                                        <label for="completeName">الاسم</label><i
                                                                            class="fas fa-star"></i>
                                                                        <input type="text" class="form-control"
                                                                            id="completeName" placeholder="الاسم الثلاثي .."
                                                                            name="guest_name[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="age">العمر</label><i
                                                                            class="fas fa-star"></i>
                                                                        <input type="number" class="form-control"
                                                                            id="age" placeholder="العمر .."
                                                                            name="guest_age[]" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="extra_name"></div>
                                                        <a class="extra-fields-customer" href="#">
                                                            <div class="addMoreName"><i class="fa fa-plus-circle"
                                                                    aria-hidden="true"></i> اضافة شخص آخر</div>
                                                        </a>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="mobNumber">رقم الجوال</label><i
                                                                        class="fas fa-star"></i>
                                                                    <input style="direction: ltr;text-align: end;"
                                                                        type="number" pattern="/^-?\d+\.?\d*$/"
                                                                        onKeyPress="if(this.value.length==12) return false;"
                                                                        class="form-control" id="mobNumber"
                                                                        placeholder="+9665xxxxxxxx" name="guest_contact"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="completeEmail">البريد الالكتروني</label><i
                                                                        class="fas fa-star"></i>
                                                                    <input type="email" class="form-control"
                                                                        id="completeEmail" placeholder="name@domain.com"
                                                                        name="email" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="adult">الدولة المختاره</label>
                                                                    <div class="switch-field switchselectDestination">
                                                                        <div class="selectDestination" id="slide-1"></div>
                                                                        <div class="selectDestination" id="slide-2"></div>
                                                                        <div class="selectDestination" id="slide-4"></div>
                                                                        <div class="selectDestination" id="slide-5"></div>
                                                                        <div class="selectDestination" id="slide-3-1"
                                                                            style="display:none"></div>
                                                                        <div class="selectDestination" id="slide-3-2"
                                                                            style="display:none"></div>
                                                                        <div class="selectDestination" id="slide-3-3"
                                                                            style="display:none"></div>
                                                                        <div class="selectDestination" id="slide-3-4"
                                                                            style="display:none"></div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-1"><button type="submit"><i
                                                                class="fas fa-check"></i></button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Left and right controls -->
                                    <div class="carasolButtons">
                                        <a class="carousel-control-prev d-none" href="#demo" data-slide="prev">
                                            <span><button><i style="color:#728C83"
                                                        class="far fa-arrow-right"></i></button></span>
                                            <span class="nextPrev jPrev"
                                                style="position: absolute;left: -85px;top: 22px;color: #728C83;">السابق</span>
                                        </a>

                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span id="nextCarouselButton" class="nextPrev"
                                                style="position: absolute;right: -85px;top: 22px;color: #728C83;">التالي</span>
                                            <span><button><i style="color:#728C83"
                                                        class="far fa-arrow-left"></i></button></span>
                                        </a>
                                    </div>
                                </div>
                                <!--@if ($errors->any())-->
                                <!--    {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}-->
                                <!--@endif-->
                            </div>
                        </div>
                        <div class="clear"></div>


                    </div>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div>
                    <div class="wrapperInner wrapperForm">
                        <div class="sidebar aboutSidebar">
                            <div class="pageNumber">
                                <span>0</span>/<span>6</span>
                            </div>
                            <div class="veticalline">
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                                <div class="vl"></div>
                            </div>
                        </div>
                        <div class="rightNormal aboutRightNormal">
                            <nav class="navbar navbar-expand-md navbar-light d-none">
                                <a class="navbar-brand" href="{{ route('user-home') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#collapsibleNavbar">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user-home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user-slider-form') }}">Apply</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active-nav" href="{{ route('contact') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="container-fluid">
                                <div class="form contactform">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('contact-us') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userName">الاسم</label><i class="fas fa-star"></i>
                                                    <input type="text" class="form-control" id="userName"
                                                        placeholder="الاسم الثلاثي .." name="customer_name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userEmail">البريد الالكتروني</label><i
                                                        class="fas fa-star"></i>
                                                    <input type="email" class="form-control" id="userEmail"
                                                        placeholder="البريد الالكتروني .." name="customer_email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userNumber">رقم الجوال</label><i
                                                        class="fas fa-star"></i>
                                                    <input style="direction: ltr;text-align: end;" type="tel"
                                                        pattern="/^-?\d+\.?\d*$/"
                                                        onKeyPress="if(this.value.length==12) return false;"
                                                        class="form-control" id="userNumber" placeholder="+9665xxxxxxxx"
                                                        name="customer_number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="msgTitle">العنوان</label><i class="fas fa-star"></i>
                                                    <input type="text" class="form-control" id="msgTitle"
                                                        placeholder="عنوان سبب التواصل" name="msg_title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">الوصف</label><i class="fas fa-star"></i>
                                                    <textarea name="message" id="message" placeholder="الوصف .." cols="0"
                                                        rows="5" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4"><button class="shadowButton mb-2" type="submit"><i
                                                    class="fas fa-check"></i></button></div>
                                        <div class="send">إرسال</div>
                                        @if (session()->has('contact-message'))
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
                            <nav class="navbar navbar-expand-md navbar-light d-none">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i
                                                class="socialIcons fab fa-facebook-square"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="socialIcons fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="socialIcons fas fa-bell"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i
                                                class="socialIcons fab fa-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="socialIcons fab fa-whatsapp"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i
                                                class="socialIcons fab fa-youtube-square"></i></a>
                                    </li>
                                </ul>
                            </nav>
                            <!--<div class="cottage aboutCottage">-->
                            <!--    <img src="{{ asset('assets/img/hutCircle.png') }}" alt="">-->
                            <!--</div>-->
                            <div class="container-fluid">
                                <div class="form aboutform aboutHeading">
                                    <a href="{{ route('user-home') }}"><i class="fal fa-times-circle"></i></a>
                                    <h1>تواصل معنا</h1>
                                    <!--<div class="form contactform d-none">-->
                                    <!--    @if (count($errors) > 0)-->
                                    <!--        <div class = "alert alert-danger">-->
                                    <!--            <ul>-->
                                    <!--                @foreach ($errors->all() as $error)-->
                                    <!--                    <li>{{ $error }}</li>-->
                                    <!--                @endforeach-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    @endif-->
                                    <!--    <form action="{{ route('contact-us') }}" method="POST">-->
                                    <!--        @csrf-->
                                    <!--        <div class="addmoreNameHeight">-->
                                    <!--            <div class="row">-->
                                    <!--            <div class="col-md-6">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <label for="userName">Name</label><i class="fas fa-star"></i>-->
                                    <!--                    <input type="text" class="form-control" id="userName" placeholder="Full Name" name="customer_name" required>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-6">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <label for="userEmail">Email</label><i class="fas fa-star"></i>-->
                                    <!--                    <input type="email" class="form-control" id="userEmail" placeholder="name@domain.com" name="customer_email" required>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-6">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <label for="userNumber">Mobile</label><i class="fas fa-star"></i>-->
                                    <!--                    <input style="direction: ltr;text-align: end;" type="number" class="form-control" id="userNumber" placeholder="9665xxxxxxx+" name="customer_number" required>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-6">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <label for="msgTitle">Message Title</label><i class="fas fa-star"></i>-->
                                    <!--                    <input type="text" class="form-control" id="msgTitle" placeholder="Title" name="msg_title" required> -->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <div class="form-group">-->
                                    <!--                    <label for="message">Message</label><i class="fas fa-star"></i>-->
                                    <!--                    <textarea name="message" id="message" placeholder="Message..." cols="0" rows="5" required></textarea>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="text-center mt-4"><button type="submit"><i class="fas fa-check"></i></button></div>-->
                                    <!--        <div class="send">Send</div>-->
                                    <!--        @if (session()->has('contact-message'))-->
                                    <!--            <div class="alert alert-success">-->
                                    <!--                {{ session()->get('contact-message') }}-->
                                    <!--            </div>-->
                                    <!--        @endif-->
                                    <!--    </form>-->
                                    <!--</div>-->
                                </div>
                            </div>

                        </div>
                        <div class="clear"></div>


                    </div>
                </div>
            </div>
            <div class="footer">
                <p class="copyright" style="bottom:0">جميع الحقوق محفوظة @ 2021</p>
            </div>
        </div>
        <script>
            function myfunction() {
                document.getElementById('first-travel').disabled = true;
            }
            //   function myfunction2(){
            //       document.getElementById('euorpeCity').disabled = true;
            //       document.getElementById('asiaCity').disabled = true;
            //       document.getElementById('arabicCity').disabled = true;
            //   }
            function change() {
                var decider = document.getElementById('first-travel');
                if (decider.checked) {
                    document.getElementById('euorpeCity').disabled = true;
                    document.getElementById('asiaCity').disabled = true;
                    document.getElementById('arabicCity').disabled = true;
                } else {
                    document.getElementById('euorpeCity').disabled = false;
                    document.getElementById('asiaCity').disabled = false;
                    document.getElementById('arabicCity').disabled = false;
                }
            }
        </script>

    @endsection
