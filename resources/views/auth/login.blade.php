<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Guid App | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="Hozaifa-Ramadan" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin') }}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('admin') }}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin') }}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin') }}/assets/global/css/components.min.css" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="{{ asset('admin') }}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('admin') }}/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- END HEAD -->

    <style>
        .font-medium {
    font-weight: 600 !important;
    }
    .text-sm {
        font-size: 1.2rem  !important;
        line-height: 1.25rem  !important;
    }
    </style>
<body style="overflow: hidden" class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix">
                <div class="login-bg">
                    <img style="width: 80% ;margin-top:100px;"
                        src="http://localhost/guidapp/public/admin/assets/pages/img/login/bg1.svg">
                </div>
            </div>
            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">

                <x-guest-layout>
                    <x-jet-authentication-card>
                        <x-slot name="logo">
                            <x-jet-authentication-card-logo />
                        </x-slot>

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>


                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif


                                <x-jet-button class="ml-4">
                                    {{ __('Log in') }}
                                </x-jet-button>


                            </div>
                        </form>
                        @if (Route::has('Home'))
                        <a class="text-gray-600 hover:text-gray-900"
                            href="{{ route('Home') }}" style="font-size: 12px;">
                            <i class="fa fa-home"></i>
                            {{ __('Home') }}
                        </a>
                    @endif
                    </x-jet-authentication-card>


                </x-guest-layout>
                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-5 bs-reset">
                            <ul class="login-social">
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>Copyright &copy; E-Commerce <?php echo date('Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-1 -->



    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('admin') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
</body>

</html>
