@extends('public.layouts.public')

@section('pageTitle', 'Login')

@section('body_class', 'page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m6">
                
                <h1 class="page__title">Login</h1>

                @include('errors.forms')

                <div class="row">

                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                        <div class="form-group col m12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
                        </div>

                        <div class="form-group col m12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>

                        <div class="col m12">
                            <input type="checkbox" name="remember" id="remember" class="filled-in" />
                            <label for="remember">Remember Me</label>
                        </div>

                        <p>&nbsp;</p>

                        <div class="form-group col m12">
                            <button type="submit" class="btn btn-default"><i class="fa fa-unlock-alt"></i> Login</button>
                        </div>
                    </form>
                        
                </div>    
            </div>
        </div>
    </div>
@endsection
