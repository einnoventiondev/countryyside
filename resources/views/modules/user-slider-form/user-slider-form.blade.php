@extends('layouts.master-slider')

@section('title', 'اكواخ الريف')

@section('content')
    <div class="wrapper">
        <div class="wrapperInner wrapperInnerTwo">

            <div class="fullOpacity">
                <div class="rightNormal" style="height:unset">
                    <nav class="nav-animation navbar navbar-expand-md navbar-light">
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
                                    <a class="nav-link active-nav" href="{{route('user-slider-form')}}">Apply</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- <div class="clear"></div> -->

                </div>
                <div class="leftOpacity" style="height:unset">
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
                        <li data-target="#demo" data-slide-to="6"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <form action="{{route('slider-user-form')}}" method="POST">
                            @csrf
                            <div class="carousel-item active">
                                <div class="pageNumber">
                                    <span>1</span>/<span>7</span>
                                </div>
                                <div class="form firstForm">
                                    <h1>Complete Information</h1>
                                    <p>Candidate will put no any dummy data some content will be added later</p>
                                    <div class="firstFormHeight">
                                        <div class="allErrors">
                                            @if($errors->any())
                                                {!! implode('', $errors->all('<div style="color: red; font-weight: bold;">:message</div>')) !!}
                                            @endif
                                        </div>
                                        <div class="oneErrors" id="errorid"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="applicantName">Name</label><i class="fas fa-star"></i>
                                                    <input type="text" class="form-control" id="applicantName" placeholder="Full Name" name="custm_name" >

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="applicantEmail">Email</label><i class="fas fa-star"></i>
                                                    <input type="text" class="form-control" id="applicantEmail" placeholder="name@domain.com" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="applicantNumber">Mobile</label><i class="fas fa-star"></i>
                                                    <input style="direction: ltr;text-align: end;" type="number" class="form-control" id="applicantNumber" placeholder="+9665xxxxx" name="custm_contact" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="applicantDate">Travel date</label><i class="fas fa-star"></i>
                                                    <input class="form-control" id="applicantDate" placeholder=" 31/12/2121-31/12/2121" name="trip_dates" >
                                                    <div class="calender">
                                                        <span id='i' class="fa fa-calendar"></span>
                                                        <div id='ccc'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adult">Adult guest</label><i class="fas fa-star"></i>
                                                    <input type="number" class="form-control" id="adult" placeholder="0" name="adult" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="child">Child guest</label><i class="fas fa-star"></i>
                                                    <input type="number" class="form-control" id="child" placeholder="0" name="child" >
                                                    <!--<input type="hidden" name="assign_team" value="Assign Team">-->
                                                    <!--<input type="hidden" name="custm_status" value="Received">-->
                                                    {{--                                        <input type="hidden" name="custm_password" value="customer12345">--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                        <div class="text-center mt-4"><button type="submit"><i class="far fa-arrow-left"></i></button></div>--}}
                                    {{--                                        @if($errors->any())--}}
                                    {{--                                            {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}--}}
                                    {{--                                        @endif--}}
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>2</span>/<span>7</span>
                                </div>
                                <div class="mainTitle destinationTitle">
                                    <h1>Your Destination</h1>
                                    <p>Text will be here</p>
                                </div>
                                <div class="allErrors"id="errorid1" ></div>
                                <div class="continentForm">
                                    <div class="switch-field">
                                        <div class="continentfield">
                                            <input class="continent" type="radio" id="continent-euorpe" name="continent" value="euorpe">
                                            <label for="continent-euorpe">Euorpe <img src="{{asset('assets/img/euorop.png')}}" alt=""></label>
                                        </div>
                                        <div class="continentfield">
                                            <input class="continent" type="radio" id="continent-asia" name="continent" value="asia">
                                            <label for="continent-asia">Asia <img src="{{asset('assets/img/asia.png')}}" alt=""></label>

                                        </div>
                                        <div class="continentfield">
                                            <input class="continent" type="radio" id="continent-arabian" name="continent" value="arabian">
                                            <label for="continent-arabian">Arabian <img src="{{asset('assets/img/arabian.png')}}" alt=""></label>

                                        </div>
                                        <div class="continentfield">
                                            <input class="continent" type="radio" id="continent-other" name="continent" value="other">
                                            <label for="continent-other">Other <img src="{{asset('assets/img/other.png')}}" alt=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-caption">
                                    <div class="select">
                                        Select
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>3</span>/<span>7</span>
                                </div>
                                <div class="mainTitle destinationTitle">
                                    <h1>Previous Travels?</h1>
                                    <p>Text will be here</p>
                                </div>
                                <div class="allErrors" id="errorid2"></div>
                                <div class="continentForm">
                                    <div class="switch-field">
                                        <div class="continentfield">
                                            <label class="forInputs" for="euorpeCity">Euorpe</label>


                                            <select class="selectpicker" onchange="myfunction()" id="euorpeCity" name="previous_travel_europe" data-show-subtext="true" data-live-search="true">
                                                <option value="" selected>Select City</option>
                                                @foreach($europe as $city)
                                                    <option value="{{$city->Europe}}">{{$city->Europe}}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                        <div class="continentfield">
                                            <label class="forInputs" for="asiaCity">Asia </label>


                                            <select class="selectpicker" onchange="myfunction()" id="asiaCity" name="previous_travel_asia" data-show-subtext="true" data-live-search="true">
                                                <option value="" selected disabled>Select City</option>
                                                @foreach($asia as $city)
                                                    <option value="{{$city->Asia}}">{{$city->Asia}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="continentfield">
                                            <label class="forInputs" for="arabicCity">Arabic </label>
                                            <select class="selectpicker" onchange="myfunction()" id="arabicCity" name="previous_travel_arabia" data-show-subtext="true" data-live-search="true">
                                                <option value=""  selected>Select City</option>
                                                @foreach($arabia as $city)
                                                    <option value="{{$city->Arabia}}">{{$city->Arabia}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="continentfield">
                                            <input type="checkbox" onchange="change()" id="first-travel" name="previous_travel" value="first time">
                                            <label for="first-travel">First Travel <img src="{{asset('assets/img/firstTravel.png')}}" alt=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-caption">
                                    <div class="select">
                                        Select
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>4</span>/<span>7</span>
                                </div>
                                <div class="mainTitle destinationTitle">
                                    <h1 class="prfAcc">Prefered Accomodation Facility</h1>
                                    <p>Text will be here</p>
                                </div>
                                <div class="allErrors" id="errorid3"></div>
                                <div class="continentForm">
                                    <div class="switch-field">
                                        <div class="preferedfield">
                                            <input type="radio" id="prefered-hotel" name="stay" value="prefered hotel">
                                            <label for="prefered-hotel">Hotel <img src="{{asset('assets/img/Building.png')}}" alt=""></label>

                                        </div>
                                        <div class="preferedfield">
                                            <input type="radio" id="prefered-cottage" name="stay" value="prefered cottage">
                                            <label for="prefered-cottage">Cottage <img src="{{asset('assets/img/minicottage.png')}}" alt=""></label>

                                        </div>
                                        <div class="preferedfield">
                                            <input type="radio" id="prefered-mix" name="stay" value="prefered mix">
                                            <label for="prefered-mix">Mix <img src="{{asset('assets/img/Building.png')}}" alt=""><img src="{{asset('assets/img/minicottage.png')}}" alt=""></label>

                                        </div>
                                        <div class="preferedfield">
                                            <input type="radio" id="prefered-flight" name="stay" value="prefered flight">
                                            <label for="prefered-flight">Direct Flight <img src="{{asset('assets/img/travelbag.png')}}" alt=""></label>

                                        </div>
                                        <div class="preferedfield">
                                            <input type="radio" id="prefered-me" name="stay" value="suggest me">
                                            <label for="prefered-me">Suggest me <img src="{{asset('assets/img/onlyme.png')}}" alt=""></label>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-caption">
                                    <div class="select">
                                        Select
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>5</span>/<span>7</span>
                                </div>
                                <div class="mainTitle destinationTitle">
                                    <h1>Flight Class?</h1>
                                    <p>Text will be here</p>
                                </div>
                                <div class="allErrors" id="errorid4"></div>
                                <div class="continentForm">
                                    <div class="switch-field">
                                        <div class="continentfield">
                                            <input type="radio" id="flight-bussiness" name="flight_class" value="Bussiness Class">
                                            <label for="flight-bussiness">First/<br>Bussiness Class</label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="flight-economy" name="flight_class" value="Economy">
                                            <label for="flight-economy">Economy </label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="flight-direct" name="flight_class" value="Direct Flight">
                                            <label for="flight-direct">Direct Flight </label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="continent-noneed" name="flight_class" value="No need">
                                            <label for="continent-noneed">No need <img src="{{asset('assets/img/noneed.png')}}" alt=""></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-caption">
                                    <div class="select">
                                        Select
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>6</span>/<span>7</span>
                                </div>
                                <div class="mainTitle destinationTitle">
                                    <h1>Car Type</h1>
                                    <p>Text will be here</p>
                                </div>
                                <div class="allErrors" id="errorid5"></div>
                                <div class="continentForm">
                                    <div class="switch-field">
                                        <div class="continentfield">
                                            <input type="radio" id="van-luxury" name="car_type" value="Luxury">
                                            <label for="van-luxury">Luxury</label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="van-economy" name="car_type" value="Economy">
                                            <label for="van-economy">Economy </label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="van-family" name="car_type" value="Family(van)">
                                            <label for="van-family">Family(van) </label>

                                        </div>
                                        <div class="continentfield">
                                            <input type="radio" id="van-noneed" name="car_type" value="No need">
                                            <label for="van-noneed">No need <img src="{{asset('assets/img/noneed.png')}}" alt=""></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-caption">
                                    <div class="select">
                                        Select
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="pageNumber">
                                    <span>7</span>/<span>7</span>
                                </div>
                                <div class="form applyform">
                                    <h1>Complete Information</h1>
                                    <p>Candidate will put no any dummy data some content will be added later</p>

                                    <div class="addmoreNameHeightLast">
                                        <div class="customer_records">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label for="completeName">Name</label><i class="fas fa-star"></i>
                                                        <input type="text" class="form-control" id="completeName" placeholder="Full Name" name="guest_name[]" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="age">Age</label><i class="fas fa-star"></i>
                                                        <input type="number" class="form-control" id="age" placeholder="age" name="guest_age[]" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="extra_name"></div>
                                        <a class="extra-fields-customer" href="#"><div class="addMoreName"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more name</div></a>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mobNumber">Mobile</label><i class="fas fa-star"></i>
                                                    <input style="direction: ltr;text-align: end;" type="number" class="form-control" id="mobNumber" placeholder="+9665xxxxxx" name="guest_contact" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="completeEmail">Email</label><i class="fas fa-star"></i>
                                                    <input type="email" class="form-control" id="completeEmail" placeholder="name@domain.com" name="guest_email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="adult">Selected Destinations</label>
                                                    <div class="switch-field switchselectDestination">
                                                                <div class="selectDestination" id="slide-1" ></div>
                                                                <div class="selectDestination" id="slide-2"></div>
                                                                 <div class="selectDestination" id="slide-4"></div>
                                                                 <div class="selectDestination" id="slide-5"></div>
                                                                 <div class="selectDestination" id="slide-3-1" style="display:none"></div>
                                                                <div class="selectDestination" id="slide-3-2" style="display:none"></div>
                                                                <div class="selectDestination" id="slide-3-3" style="display:none"></div>
                                                                <div class="selectDestination" id="slide-3-4" style="display:none"></div>
                                                                

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-1"><button type="submit"><i class="fas fa-check"></i></button></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Left and right controls -->
                    <div class="carasolButtons">
                        <a class="carousel-control-prev d-none" href="#demo" data-slide="prev">
                            <span><button><i style="color:#728C83" class="far fa-arrow-right"></i></button></span>
                            <span class="nextPrev" style="position: absolute;left: -85px;top: 22px;color: #728C83;">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span id="nextCarouselButton" class="nextPrev" style="position: absolute;right: -85px;top: 22px;color: #728C83;">Next</span>
                            <span><button><i style="color:#728C83" class="far fa-arrow-left"></i></button></span>
                        </a>
                    </div>
                </div>
            <!--@if($errors->any())-->
            <!--    {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}-->
                <!--@endif-->
            </div>
            </div>
            <div class="clear"></div>
            
            <div class="footer">
                <p class="copyright">2021 &copy; جميع الحقوق محفوظة</p>
            </div>
        </div>
    </div>
@endsection
<script>
    function myfunction(){
        document.getElementById('first-travel').disabled = true;
    }
    //   function myfunction2(){
    //       document.getElementById('euorpeCity').disabled = true;
    //       document.getElementById('asiaCity').disabled = true;
    //       document.getElementById('arabicCity').disabled = true;
    //   }
    function change() {
        var decider = document.getElementById('first-travel');
        if(decider.checked){
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
