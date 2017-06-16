<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ url('dashboard') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('dashboard') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('dashboard') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('dashboard') }}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('dashboard')}}/css/ltr/app.css" rel="stylesheet">
</head>

<body class="login">
<div>

    <div class="login_wrapper">
        <section class="login_content">
            {{ Form::open(['route' => 'register']) }}
            <h1>Create Account</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <input type="text" class="form-control" name="name" placeholder="{{ trans('users.attributes.name') }}"/>
            </div>
            <div>
                <input type="email" class="form-control" name="email"
                       placeholder="{{ trans('users.attributes.email') }}"/>
            </div>
            <div>
                <input type="password" class="form-control" name="password"
                       placeholder="{{ trans('users.attributes.password') }}"/>
            </div>
            <div>
                <input type="password" class="form-control" name="password_confirmation"
                       placeholder="{{ trans('users.attributes.password_confirmation') }}"/>
            </div>
            <div>
                {{ Form::submit(trans('global.submit'), ['class' => 'btn btn-default submit']) }}
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">
                    <a href="{{ route('login') }}" class="to_register"> {{ trans('global.login') }} </a>
                </p>

                <div class="clearfix"></div>
                <br/>

                <div>
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                        Terms</p>
                </div>
            </div>
            {{ Form::close() }}
        </section>
    </div>
</div>
</body>
</html>

