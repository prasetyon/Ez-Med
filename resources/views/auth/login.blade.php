@extends('layouts.app')

@section('content')

<center>
<h3>WELCOME TO</h3>
<img src="{{ URL::asset('admin/dist/img/ezmed.png') }}" alt="ship" width="450" height="150">
</center>

<div class="container">
    <div class="row"><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>EZ-Life Developer Team</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="loginvalidate">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))username
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" value="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                  
                                    <button type="submit" class="btn btn-primary pull-right">
                                        Login
                                    </button>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
