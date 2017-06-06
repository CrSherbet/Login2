
@extends('layouts.master')

@section('head')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Complete The Form</h3>
                    </div>
                    @if(Session::has('message'))
                        <div class="panel-body bg-danger color-red">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <form role="form" method= "post" action="{{ url('/register')}}">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus  value="{{ old('username') }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus  value="{{ old('email') }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" autofocus/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Project" name="project" type="text"  value="{{ old('project') }}">
                                </div>
                        
                               <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop