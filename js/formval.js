$.validator.setDefaults( {
    submitHandler: function () {
        form.submit();
    }
} );

$( document ).ready( function () {
    $( "#loginForm" ).validate( {
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 8
            },
            email: {
                required: true,
                email: true
            },
            agree: "required"
        },
        messages: {
            username: {
                required: "Please enter your username",
                minlength: "Your username must consist of at least 5 characters"
            },
            password1: {
                required: "enter your password",
                minlength: "Your password must be at least 8 characters long"
            }
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
        }
    } );
});