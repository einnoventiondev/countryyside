$(function() {
    $('#userNumber').keypress(function(e){
        var number = String.fromCharCode(e.which) || e.key;
        var regExp = /[0-9\+]/;
        // Only numbers, + symbol
        if (!regExp.test(number)
        && e.which != 188 // ,
        && e.which != 190 // .
        && e.which != 8   // backspace
        && e.which != 46  // delete
        && (e.which < 37  // arrow keys
            || e.which > 40)) {
            e.preventDefault();
            return false;
        }
    })

    $('#nextBtn').click(function() {
        $(this).addClass('disabled');
    })

    $('.continentForm.sajalContinentForm select').change(function() {
        $('#nextBtn').removeClass('disabled');
    })

    $('.continentfield #first-travel').change(function() {
        $('#nextBtn').toggleClass('disabled');
    })

    $('.continentForm .preferedfield input[type="radio"]').change(function() {
        $('#nextBtn').removeClass('disabled');
    })

    $('#booking-class input[type="checkbox"]').change(function() {
        $(this).toggleClass('active');
        if($('#booking-class').find('input[type="checkbox"]').hasClass('active')) {
            $('#nextBtn').removeClass('disabled');
        }
        else {
            $('#nextBtn').addClass('disabled');
        }
    })

    $('#car-form .continentfield input[type="radio"]').change(function() {
        $('#nextBtn').removeClass('disabled');
    })

    // var name = $('#completeName').val();
    // var age = $('#age').val();
    // var mobile = $('#mobNumber').val();
    // var email = $('#completeEmail').val();

    // Form Validation
    $('#completeName').keyup(function() {
        if($(this).val().length > 0 && $('#age').val().length > 0 && $('#mobNumber').val().length > 0 && $('#completeEmail').val().length > 0) {
            $('#submit').removeClass('disabled');
        }
        else {
            $('#submit').addClass('disabled');
        }
    })
    $('#age').keyup(function() {
        if($(this).val().length > 0 && $('#completeName').val().length > 0 && $('#mobNumber').val().length > 0 && $('#completeEmail').val().length > 0) {
            $('#submit').removeClass('disabled');
        }
        else {
            $('#submit').addClass('disabled');
        }
    })
    $('#mobNumber').keyup(function() {
        if($(this).val().length > 0 && $('#completeName').val().length > 0 && $('#age').val().length > 0 && $('#completeEmail').val().length > 0) {
            $('#submit').removeClass('disabled');
        }
        else {
            $('#submit').addClass('disabled');
        }
    })
    $('#completeEmail').keyup(function() {
        if($(this).val().length > 0 && $('#completeName').val().length > 0 && $('#age').val().length > 0 && $('#mobNumber').val().length > 0) {
            $('#submit').removeClass('disabled');
        }
        else {
            $('#submit').addClass('disabled');
        }
    })
})