var loginFlag = "false";

(function ($) {
    $.fn.shake = function (options) {
        // defaults
        var settings = {
            'shakes': 2,
            'distance': 10,
            'duration': 400
        };
        // merge options
        if (options) {
            $.extend(settings, options);
        }
        // make it so
        var pos;
        return this.each(function () {
            $this = $(this);
            // position if necessary
            pos = $this.css('position');
            if (!pos || pos === 'static') {
                $this.css('position', 'relative');
            }
            // shake it
            for (var x = 1; x <= settings.shakes; x++) {
                $this.animate({ left: settings.distance * -1 }, (settings.duration / settings.shakes) / 4)
                    .animate({ left: settings.distance }, (settings.duration / settings.shakes) / 2)
                    .animate({ left: 0 }, (settings.duration / settings.shakes) / 4);
            }
        });
    };
}(jQuery));

$(document).ready(function () {

    $("#register-modal").magnificPopup({
        items: {
            src: "#signup-second",
            type: "inline"
            },
            callbacks: {
                open: function() {

                    $.magnificPopup.instance.close = function () {
      
                        $("#registrationMessage").html("");
                        $.magnificPopup.proto.close.call(this);
                    };      
                }
            }
        });
    
    $('.parallax-bg').scrolly({bgParallax: true});

        $(".signup-modal").magnificPopup({
            items: {
                src: "#signup-first",
                type: "inline"
            },
            callbacks: {
                open: function () {

                    $.magnificPopup.instance.close = function () {

                        $("#registrationMessage").html("");
                        $.magnificPopup.proto.close.call(this);
                    };
                }
            }
        });

    $(".signup-link").on("click", function () {
        $(".user-box").toggleClass("open");
    });

    $("#btnRegistration").on("click", function () {

        $(this).html('<span style="color:white" class="glyphicon glyphicon-refresh glyphicon-spin"></span> Please wait...');

        var requestData = {
            firstname: $.trim($("#firstname").val()),
            lastname: $.trim($("#lastname").val()),
            gender: $.trim($("#gender").val()),
            email: $.trim($("#email").val()),
            day: $.trim($("#dobDay").val()),
            month: $.trim($("#dobMonth").val()),
            year: $.trim($("#dobYear").val())
        };

        $.ajax({
            url: "/register",
            dataType: "json",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            cache: false,
            data: JSON.stringify(requestData),
            success: function (data) {
                if (data.success) {

                    if (!data.verified) {
                        window.location = "/user/edit";
                    }

                    setTimeout('$("#btnRegistration").removeClass("btn-action").addClass("btn-success");$("#btnRegistration").html("Thank you");', 2000);

                    loginFlag = "true";
                    $("#header").html(data.partial);

                    setTimeout('$(".mfp-close").click();', 3000);

                } else {
                    // register failed
                    setTimeout('$("#btnRegistration").html("Register");', 2000);
                    setTimeout('$("#registrationMessage").html("<div class=\'alert_error\'><i class=\'glyphicon glyphicon-remove-circle\'></i><div>' + data.message + '</div></div>");', 2000);
                }
            },
            error: function () {
                loginFlag = "false";
                setTimeout('$("#btnRegistration").html("Register");', 2000);
            }
        });

    });

    $("#loginBtn").on("click", function () {

        $(this).html('<span class="glyphicon glyphicon-refresh glyphicon-spin"></span> Logging in');

        var requestData = {
            username: $.trim($("#txtUsername").val()),
            password: $.trim($("#txtPassword").val())
        };

        $.ajax({
            url: "/login/normal",
            dataType: "json",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            cache: false,
            data: JSON.stringify(requestData),
            success: function (data) {
                if (data.success) {

                    if (!data.verified) {
                        window.location = "/user/edit";
                    }

                    //throw new Error("Something went badly wrong!");

                    loginFlag = "true";
                    $("#header").html(data.partial);

                    setTimeout('$("#loginBtn").html("Log in");', 2000);

                } else {
                    // login failed
                    loginFlag = "false";
                    setTimeout('$("#loginBtn").removeClass("btn-action").addClass("btn-danger");$("#loginBtn").html("Login failed");$("#login-form").shake();', 1250);
                    setTimeout('$("#loginBtn").removeClass("btn-danger").addClass("btn-action");$("#loginBtn").html("Login");', 2000);
                }
            },
            error: function () {
                loginFlag = "false";
                setTimeout('$("#loginBtn").removeClass("btn-action").addClass("btn-danger");$("#loginBtn").html("Login failed");$("#login-form").shake();', 1250);
                setTimeout('$("#loginBtn").removeClass("btn-danger").addClass("btn-action");$("#loginBtn").html("Login");', 2000);
            }
        });

    });

});