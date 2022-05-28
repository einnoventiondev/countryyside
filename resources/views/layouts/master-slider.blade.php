<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="16x16" type="image/png">
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/daterangepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</head>

<body>

@yield('content')


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}

<script>
$('#reloader').click(function(){
    $('.wrapper').css('background-image', 'url(assets/img/bg_clear.jpg)');
});
$('#reloader1').click(function(){
    $('.wrapper').css('background-image', 'url(assets/img/bg_blur_full.jpg)');
});
$('#formTab').click(function(){
    $('.wrapper').css('background-image', 'url(assets/img/bg_blur_full.jpg)');
});
$('#contactTab').click(function(){
    $('.wrapper').css('background-image', 'url(assets/img/bg_blur_full.jpg)');
});

$(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});


$("#reloader").click(function(){
    // alert("hello");
  $("#contentM").removeClass("active");
});
$("#contentM").click(function(){
    // alert("hello");
    $('.wrapper').css('background-image', 'url(assets/img/bg_blur_full.jpg)');
  $("#formTab").addClass("active");
  $("#reloader").removeClass("active");
});


    var carouselLength = $('.carousel-item').length - 1;

    // If there is more than one item
    if (carouselLength) {
        $('.carousel-control-next').removeClass('d-none');

    }

    $('.carousel').carousel({
        interval: false,
        wrap: false
    }).on('slide.bs.carousel', function (e) {
        // First one
        if (e.to == 0) {

            $('.carousel-control-prev').removeClass('d-none');
            $('.carousel-control-next').removeClass('d-none');
        } // Last one
        if (e.to == 1) {
            var a = document.getElementById("continent-euorpe").checked;
            var b = document.getElementById("continent-asia").checked;
            var c = document.getElementById("continent-arabian").checked;
            var d = document.getElementById("continent-other").checked;

            if(a == false && b == false && c == false && d == false){
                error = "Select a continent";
                document.getElementById("errorid1").innerHTML = error;
                exit;
            }
            
        } // Last one
        if (e.to == 2) {

            var a = document.getElementById("first-travel").checked;
            var b = document.getElementById("euorpeCity").value;
            var c = document.getElementById("asiaCity").value;
            var d = document.getElementById("arabicCity").value;
            if(a == false && b == "" && c == "" && d == ""){
                error = "please choose a field";
                document.getElementById("errorid2").innerHTML = error;
                exit;
            }
        } // Last one
        if (e.to == 3) {

            var a = document.getElementById("prefered-hotel").checked;
            var b = document.getElementById("prefered-cottage").checked;
            var c = document.getElementById("prefered-mix").checked;
            var d = document.getElementById("prefered-flight").checked;
            var e = document.getElementById("prefered-me").checked;
            if(a == false && b == false && c == false && d == false && e == false){
                error = "Select a rasidence";
                document.getElementById("errorid3").innerHTML = error;
                exit;
            }
        } // Last one
        if (e.to == 4) {
var a = document.getElementById("flight-bussiness").checked;
            var b = document.getElementById("flight-economy").checked;
            var c = document.getElementById("flight-direct").checked;
            var d = document.getElementById("continent-noneed").checked;
            if(a == false && b == false && c == false && d == false){
                error = "Select a Flight";
                document.getElementById("errorid4").innerHTML = error;
                exit;
            }
            
        } // Last one
        if (e.to == 5) {

             var a = document.getElementById("van-luxury").checked;
            var b = document.getElementById("van-economy").checked;
            var c = document.getElementById("van-family").checked;
            var d = document.getElementById("van-noneed").checked;
            if(a == false && b == false && c == false && d == false){
                error = "Select a Van";
                document.getElementById("errorid5").innerHTML = error;
                exit;
            }
        } // Last one
        if (e.to == carouselLength) {
            $('.carousel-control-prev').addClass('d-none');
            $('.carousel-control-next').addClass('d-none');
            $('.wrapper').css('background-image', 'url(assets/img/bg_clear.jpg)');
            // document.getElementById('aplForm').style.display = "block";
            
        } // The rest
        else {
            $('.wrapper').css('background-image', 'url(assets/img/bg_blur_full.jpg)');
            $('.carousel-control-prev').removeClass('d-none');
            $('.carousel-control-next').removeClass('d-none');
        }


        var continent = $("input[type='radio'][name='continent']:checked").val();
        var accomodation = $("input[type='radio'][name='stay']:checked").val();
        var flight_class = $("input[type='radio'][name='flight_class']:checked").val();
        var car_type = $("input[type='radio'][name='car_type']:checked").val();

        document.getElementById('slide-1').innerHTML = continent;
        document.getElementById('slide-2').innerHTML = accomodation;
        document.getElementById('slide-4').innerHTML = flight_class;
        document.getElementById('slide-5').innerHTML = car_type;
        
        
        
        var europe = $('#euorpeCity').find(":selected").text();
        var asia = $('#asiaCity').find(":selected").text();
        var arabia = $('#arabicCity').find(":selected").text();
        var first_time = $("input[type='checkbox'][name='previous_travel']:checked").val();
        
         
        
        if(europe != null && europe != 'اختيار متعدد') {
            document.getElementById('slide-3-1').innerHTML = europe;
            document.getElementById('slide-3-1').style.display = "block";
        }
        if(asia != null && asia != 'اختيار متعدد'){
            document.getElementById('slide-3-2').innerHTML = asia;
            document.getElementById('slide-3-2').style.display = "block";
        }
        if(arabia != null && arabia != 'اختيار متعدد'){
            document.getElementById('slide-3-3').innerHTML = arabia;
            document.getElementById('slide-3-3').style.display = "block";
        }
        if(first_time != null){
            document.getElementById('slide-3-4').innerHTML = first_time;
            document.getElementById('slide-3-4').style.display = "block";
        }

       



    });
</script>

<script>
    <!--Social_icon_fadein_fadeout -->
    // $(document).ready(function() {
    //     $('.socialIcons').css('display', 'none');
    //     $('.socialIcons').fadeIn(3000);
    // });

    // <!--Add more Fields -->
    // $('.extra-fields-customer').click(function()
    // {
    //     $('.customer_records').clone().appendTo('.extra_name');
    //     $('.extra_name .customer_records').addClass('single remove');
    //     $('.single .extra-fields-customer').remove();
    //     $('.single').append('<a href="#" class="remove-field btn-remove-customer"><div class="addMoreName removeMore"><i class="fa fa-minus-circle" aria-hidden="true"></i> remove more name</div></a>');
    //     $('.extra_name > .single').attr("class", "remove");
    //     $('.extra_name input').each(function()
    //     {
    //         var count = 0;
    //         var fieldname = $(this).attr("name");
    //         $(this).attr('name', fieldname + count );
    //         count++;
    //     });
    // });
    // $(document).on('click', '.remove-field', function(e)
    // {
    //     $(this).parent('.remove').remove();
    //     e.preventDefault();
    // });
    $(document).ready(function() {
        var max_fields      = 100; //maximum input boxes allowed
        var wrapper   		= $(".extra_name"); //Fields wrapper
        var add_button      = $(".addMoreName"); //Add button ID
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
            $(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group "><label for="completeName">الاسم</label><i class="fas fa-star"></i><input type="text" class="form-control" id="completeName" placeholder="الاسم الثلاثي .." name="guest_name[]" required=""></div></div><div class="col-md-6"><div class="form-group"><label for="age">العمر</label><i class="fas fa-star"></i><input type="number" class="form-control" id="age" placeholder="العمر .." name="guest_age[]" required=""></div></div><a href="#" class="addMoreName removeMore remove_field"><i class="fa fa-minus-circle" aria-hidden="true"></i>إزالة</a></div>');
                $('.extra_name input').each(function()
                {
                    // $(this).attr('value', '');
                    var count = 0;
                    var fieldname = $(this).attr("name");
                    $(this).attr('name', fieldname + count );


                    count++;
                });
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })

    });
</script>
</body>

<!-- Date Picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"></script>
<script src="{{asset('assets/js/formValidation.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/jquery.daterangepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('#i').dateRangePicker({
            inline: true,
            format: 'MM-DD-YYYY',
            container: '#ccc',
            alwaysOpen: false,
            singleMonth: true,
            showTopbar: false,
            setValue: function (s) {

                $(this).val('12-01-2017');
            }
        })
        .bind('datepicker-change', (e, data) => {
            $('#applicantDate').val(data.value);
        })
        $('.select2').select2();
    });
</script>
</html>
