@extends('public.layouts.public')

@section('pageTitle', 'Register')

@section('body_class', 'page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m6">
                <h1 class="page__title">Register</h1>

                @include('errors.forms')

                <div class="row">

                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="form-group col m12">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
                        </div>

                        <div class="form-group col m12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
                        </div>

                        <div class="form-group col m12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>

                        <div class="form-group col m12">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                        </div>

                        <div class="form-group col m12">
                            <button type="submit" class="btn waves-effect waves-light">Register</button>
                        </div>
                    </form> 
                </div>               
            </div>
        </div>
    </div>
@endsection