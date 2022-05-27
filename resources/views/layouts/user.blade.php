<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">--}}
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/daterangepicker.min.css">--}}


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/jquery.daterangepicker.min.js"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}




</head>
<body>

@yield('content')
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/jquery.daterangepicker.min.js"></script>--}}
<!--<script src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Water-Ripple-Animation-ripples/js/jquery.ripples.js"></script>-->
<script>
    $(document).ready(function() {
        $('.socialIcons').css('display', 'none');
        $('.socialIcons').fadeIn(3000);
    });

    $(document).ready(function(){
        $(".animateButton").click(function(){
            $(".animateButton").animate({right: '250px' , opacity: '0'});
        });
    });

    // $(document).ready(function() {
    //     $('.wrapper').ripples('show');
    // });
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

    // $('#i').dateRangePicker({
    //     inline: true,
    //     format: 'MM-DD-YYYY',
    //     container: '#ccc',
    //     alwaysOpen: false,
    //     singleMonth: true,
    //     showTopbar: false,
    //     setValue: function(s)
    //     {
    //
    //         $(this).val('12-01-2017');
    //     }
    // })
    //     .bind('datepicker-change', (e,data) => {
    //         $('#applicantDate').val(data.value);
    //     })



    // var carouselLength = $('.carousel-item').length - 1;
    //
    // // If there is more than one item
    // if (carouselLength) {
    //     $('.carousel-control-next').removeClass('d-none');
    // }
    //
    // $('.carousel').carousel({
    //     interval: false,
    //     wrap: false
    // }).on('slide.bs.carousel', function (e) {
    //     // First one
    //     if (e.to == 0) {
    //         $('.carousel-control-prev').addClass('d-none');
    //         $('.carousel-control-next').removeClass('d-none');
    //     } // Last one
    //     else if (e.to == carouselLength) {
    //         $('.carousel-control-prev').addClass('d-none');
    //         $('.carousel-control-next').addClass('d-none');
    //     } // The rest
    //     else {
    //         $('.carousel-control-prev').removeClass('d-none');
    //         $('.carousel-control-next').removeClass('d-none');
    //     }
    // });



</script>
</body>

</html>
