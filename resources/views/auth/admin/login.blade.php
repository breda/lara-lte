@extends('auth.admin.auth')

@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="الإيميل" name="email"/>
            <i class="fa fa-user form-control-feedback" style="margin-top:7px;right:5px;"></i>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="كلمة السر" name="password"/>
            <i class="fa fa-lock form-control-feedback" style="margin-top:7px;right:5px;"></i>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> تذكرنــــي
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>
            </div><!-- /.col -->
        </div>
    </form>
    <hr>
    <div class="text-center">
      <a href="{{ url('/password/email') }}"> نســيت كلمة المرور  </a><br>
      <!-- <a href="{{ url('/auth/register') }}" class="text-center">Register a new membership</a> -->
    </div>


</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
