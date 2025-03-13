$(document).ready(function () {
    $.validator.addMethod("fnregex", function (value, element) {
        reg12 = /^[a-zA-Z]+$/;
        return reg12.test(value);
    }, "Fullname must contain only letters");

    $.validator.addMethod("emregex", function (value, element) {
        reg12 = /^[a-zA-Z0-9.-_]+@[A-Za-z]+\.[a-zA-Z.]{2,3}$/;
        return reg12.test(value);
    }, "Invalid Email Address");

    $.validator.addMethod("pwdregex", function (value, element) {
            regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
            return this.optional(element) || regex.test(value);
        },
        "Password must contain atleast one uppercase letter, one lowercase letter, one digit and a special character"
    );

    $.validator.addMethod("mobregex", function (value, element) {
        regex = /^[0-9]{10}$/;
        return this.optional(element) || regex.test(value);
    }, "Mobile number must contain exactly 10 digits");

    $.validator.addMethod("filesize", function (value, element, size) {
        var maxSize = size * 1024 * 1024;
        for (var i = 0; i < element.files.length; i++) {
            var fileSize = element.files[i].size;
            if (fileSize > maxSize) {
                return false;
            }
        }
        return true; // File size is within the maximum limit
    }, "File size cannot exceed {0} MB.");

    $('#form1').validate({
        rules: {
            fn: {
                required: true,
                minlength: 2,
                maxlength: 35,
                // fnregex: true
            },
            mn: {
                required: true,
                mobregex: true
            },
            email: {
                required: true,
                // emregex: false
            },
            pswd: {
                required: true,
                minlength: 8,
                maxlength: 20,
                pwdregex: true
            },
            repswd: {
                required: true,
                // equalTo: '#pwd1'
            },
            pic: {
                required: true,
                accept: "image/jpeg,image/png,image/gif",
                filesize: 2
            },
            msg: {
                required: true
            },
            add: {
                required: true
            },
            dt: {
                required: true
            },
            cn: {
                required: true
            },
            opswd: {
                required: true,
                minlength: 8,
                maxlength: 20,
                pwdregex: true
            },
        },
        messages: {
            fn: {
                required: "Fullname is a required field",
                minlength: "Fullname must contain atleast 2 characters",
                maxlength: "fullname cannot be greater than 35 characters"
            },
            mn: {
                required: "Mobile Number Cannot be Empty",
                mobregex: "Mobile number must contain exactly 10 digits",
            },
            email: {
                required: "Username  is a required filed"
            },
            pswd: {
                required: "Password is a required Field",
                minlength: "Password must contain at least 8 characters",
                maxlength: "Password must not be more than 20 characters"
            },
            repswd: {
                required: "Confirm password cannot be empty",
                // equalTo: "Password and confirm password must be same"
            },
            pic: {
                required: "Please select a file to upload",
                accept: "only imge file with extension jpg,png and gif are allowed",
                filesize: "File size must not be greater than 10KB"
            },
            msg: {
                required: "Address field cannot be empty"
            },
            add: {
                required: "Message field cannot be empty"
            },
            dt: {
                required: "Date  & Time field cannot be empty"
            },
            cn: {
                required: "City name field cannot be empty"
            },
            opswd: {
                required: "Old Password is a required Field",
                minlength: "Password must contain at least 8 characters",
                maxlength: "Password must not be more than 20 characters"
            },

        },
        errorPlacment: function (error, element) {
            if (element.attr('name') == "fn") {
                $('#fn_err').html(error);
            }
            if (element.attr('name') == "email") {
                $('#em_err').html(error);
            }
            if (element.attr('name') == "pswd") {
                $('#pswd_err').html(error);
            }
            if (element.attr('name') == "repswd") {
                $('#repswd_err').html(error);
            }
            if (element.attr('name') == "pic") {
                $('#file1_err').html(error);
            }
            if (element.attr('name') == "msg") {
                $('#msg_err').html(error);
            }
            if (element.attr('name') == "add") {
                $('#add_err').html(error);
            }
            if (element.attr('name') == "mn") {
                $('#mn_err').html(error);
            }
            if (element.attr('name') == "dt") {
                $('#dt_err').html(error);     
            }
            if (element.attr('name') == "cn") {
                $('#cn_err').html(error);     
            }
            if (element.attr('name') == "opswd") {
                $('#dt_err').html(error);
            }
        }
    });
});


