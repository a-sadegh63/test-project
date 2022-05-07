$("form")[0].reset();
$("#card_no").keyup(function() {
    if ($(this).val().length > 19) {
        $(this).val(function(index, value) {
            return value.substring(0, 19);
        });
    }
    $(this).val(function(index, value) {
        return value
            // Keep only digits:
            .replace(/[^\d]/g, "")
            // Add 4 num separators:
            .replace(/\B(?=(\d{4})+(?!\d))/g, "-")
    });
});
$("#card_no").on('change', function() {
    if ($(this).val().length != 19) {
        showAlert('شماره کارت معتبر نمی باشد', 'w3-red');
        $(this).val('');
    }
})
$("#card_cvv2").keyup(function() {
    if ($(this).val().length > 4) {
        $(this).val(function(index, value) {
            return value.substring(0, 4);
        });
    }
    $(this).val(function(index, value) {
        return value
            // Keep only digits:
            .replace(/[^\d]/g, "")
    });
});
$("#card_cvv2").on('change', function() {
    if ($(this).val().length != 3 && $(this).val().length != 4) {
        showAlert('CVV2 معتبر نمی باشد', 'w3-red');
        $(this).val('');
    }
})
$("#card_date_month").keyup(function() {
    if ($(this).val() == '') return;
    if ($(this).val() > 12 || $(this).val() < 1) {
        showAlert('ماه وارد شده صحیح نمی باشد', 'w3-red');
        $(this).val('');
    }
    if ($(this).val().length > 2) {
        $(this).val(function(index, value) {
            return value.substring(0, 2);
        });
    }
    $(this).val(function(index, value) {
        return value
            // Keep only digits:
            .replace(/[^\d]/g, "")
    });
});
$("#card_date_day").keyup(function() {
    if ($(this).val() == '') return;
    if ($(this).val() > 31 || $(this).val() < 1) {
        showAlert('روز وارد شده صحیح نمی باشد', 'w3-red');
        $(this).val('');
    }
    if ($(this).val().length > 2) {
        $(this).val(function(index, value) {
            return value.substring(0, 2);
        });
    }
    $(this).val(function(index, value) {
        return value
            // Keep only digits:
            .replace(/[^\d]/g, "")
    });
});
$("#customer_email").on('change', function() {
    if ( ! isEmail($(this).val()) ) {
        showAlert('لطفا یک ایمیل معتبر وارد نمایید', 'w3-red');
        $(this).val('');
    }
});
$('#cancel-pay').on('click', function() {
    window.location.href = "index.php";
});

function showAlert(message, alert_class = 'w3-green') {
    $('#alert').css('display', "inline-block");
    $('#alert').html(message);
    $('#alert').addClass(alert_class);
    $('#alert').delay(3000).fadeOut('slow', function() {
        $('#alert').removeClass(alert_class);
    });
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}