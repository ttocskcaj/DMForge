$(document).ready(function () {
    $('#LoginTab, #RegisterTab').click(function (event) {
        event.preventDefault();
        if ($(this).attr('id') == 'LoginTab') {
            $('#RegisterTab').removeClass('Button--active');
            $(this).addClass('Button--active');

            window.history.pushState({path: 'login'}, '', 'login');

            $('#RegisterForm').fadeOut(200, function () {
                $('#LoginForm').fadeIn(200);
            });

        }
        else if ($(this).attr('id') == 'RegisterTab') {
            $('#LoginTab').removeClass('Button--active');
            $(this).addClass('Button--active');

            window.history.pushState({path: 'register'}, '', 'register');

            $('#LoginForm').fadeOut(200, function () {
                $('#RegisterForm').fadeIn(200);
            });
        }

    });
});
