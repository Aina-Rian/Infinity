$.validator.setDefaults( {
    submitHandler: function () {
        form.submit();
    }
} );

$( document ).ready( function () {
    $( "#signupForm" ).validate( {
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 8
            },
            cpassword: {
                required: true,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            agree: "required"
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 5 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            cpassword: {
                required: "Please retape your password ",
                equalTo: "Please enter the same password as above"
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
