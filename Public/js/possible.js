$(document).ready(function(){
    $("#email").keyup(function(){
        var email = $(this).val().trim();
        if(email != ''){

            $.ajax({
                url: './inc/emailPossible.php',
                type: 'post',
                data: {email: email},
                success: function(response){

                    $('#possiblity').html(response);

                }
            });
        }else{
            $("#possiblity").html("");
        }

    });

});
