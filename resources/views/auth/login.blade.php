@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="display-4">
                Login
            </div>
            <br>
            <form action="{{ url('/login') }}" class="form-horizontal" method="POST" role="form">
                {{ csrf_field() }}
                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="email">
                        E-Mail Address
                    </label>
                    <div class="col-md-6">
                        <input autofocus="" class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                            @endif
                        </input>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="password">
                        Password
                    </label>
                    <div class="col-md-6">
                        <input class="form-control" id="password" name="password" required="" type="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('password') }}
                                </strong>
                            </span>
                            @endif
                        </input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox">
                                    Remember Me
                                </input>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-primary" type="submit">
                            Login
                        </button>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
