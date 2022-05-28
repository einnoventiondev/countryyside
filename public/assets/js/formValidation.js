$(function() {
    var code = '+966';
    var add = true;
    $('#userNumber').keypress(function(){
        var number = String.fromCharCode(e.which) || e.key;
        if(add) {
            $(this).val(code + number);
            add = false;
        }
        if($(this).val().length === 0) {
            add = true;
            $(this).val(code + number);
            add = false;
        }
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
})