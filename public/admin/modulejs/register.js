$("#RegisterForm").submit(function () {
    var form = $(this);
    form.parsley().validate();
    if (form.parsley().isValid()) {
        $("#submit").prop("disabled", true);
    }
});

function isNumber(evt) {
    var regex = new RegExp("^[0-9-!@#$%*?]");
    var key = String.fromCharCode(
        event.charCode ? event.which : event.charCode
    );
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}