<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    @if (__('voyager::generic.is_rtl') == 'true')
    <link rel="stylesheet" href="{{ voyager_asset('css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ voyager_asset('css/login-blade.css') }}">

    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');

            background-color: {
                    {
                    Voyager: :setting("admin.bg_color", "#FFFFFF")
                }
            }

            ;
        }

        body.login .login-sidebar {
            min-height: unset;

            border-top:5px solid {
                    {
                    config('voyager.primary_color', '#22A7F0')
                }
            }

            ;
        }

        body.login .login-container {
            position: relative;
            top: unset;
            margin-top: unset;
        }

        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top: 0px !important;

                border-left:5px solid {
                        {
                        config('voyager.primary_color', '#22A7F0')
                    }
                }

                ;
            }
        }

        body.login .form-group-default.focused {
            border-color: {
                    {
                    config('voyager.primary_color', '#22A7F0')
                }
            }

            ;
        }

        .login-button,
        .bar:before,
        .bar:after {
            background: {
                    {
                    config('voyager.primary_color', '#22A7F0')
                }
            }

            ;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" href="{{asset('/css/all.css')}}">

</head>

<body class="login kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <style>
        .mb-10 {
            margin-bottom: 10px;
        }

        .mt-10 {
            margin-top: 10px;
        }
    </style>
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="logo-title-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                        <img class="img-responsive pull-left flip logo animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                        <img class="img-responsive pull-left flip logo animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                        <div class="copy animated fadeIn">
                            <h1>{{ Voyager::setting('admin.title', 'Voyager') }}</h1>
                            <p>{{ Voyager::setting('admin.description', __('voyager::login.welcome')) }}</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                    <div class="kt-login__container" style="background-color: white; padding:20px;">
                        <div class="login-sidebar">
                            <div class="login-container">

                                <p>{{ __('voyager::login.signin_below') }}</p>

                                <form action="{{ route('voyager.login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group form-group-default" id="emailGroup">
                                        <label>{{ __('voyager::generic.email') }}</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default" id="passwordGroup">
                                        <label>{{ __('voyager::generic.password') }}</label>
                                        <div class="controls">
                                            <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group" id="rememberMeGroup">
                                        <div class="controls">
                                            <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text">{{ __('voyager::generic.remember_me') }}</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                                        <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                                        <span class="signin">{{ __('voyager::generic.login') }}</span>
                                    </button>

                                </form>

                                <div class="login-blade-cl-both"></div>

                                @if(!$errors->isEmpty())
                                <div class="alert alert-red">
                                    <ul class="list-unstyled">
                                        @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                            </div> <!-- .login-container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev) {
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e) {
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e) {
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e) {
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e) {
            document.getElementById('passwordGroup').classList.remove("focused");
        });
    </script>
</body>
<!-- end::Body -->

</html>
