function validateForm() {
    var x = document.getElementById('name').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Name cannot be empty";
        return false;
    }
    x = document.getElementById('email').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(x)) {
            document.getElementById('status').innerHTML = "Email format invalid";
            return false;
        }
    }
    x = document.getElementById('subject').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "subject cannot be empty";
        return false;
    }
    x = document.getElementById('message').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Message cannot be empty";
        return false;
    }


    $formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'subject': $('input[name=subject]').val(),
        'message': $('textarea[name=message]').val()
    };

    $.ajax({
        url: "http://localhost/projektPai/Contact",
        type: "POST",
        data: formData,
        success: function(data) {
            if (data.code)
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR) {
            console.log(jqXHR.status);
            $('#status').text(jqXHR);
        }
    });
}