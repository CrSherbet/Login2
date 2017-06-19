
<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')

@section('head')
@stop

@section('content')


<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    @if(Session::has('message'))
                        <div class="panel-body bg-danger color-red">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <form role="form" method= "post" action="{{ url('/login')}}">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus  value="{{ old('username') }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" >
                                </div>
                                <!--<div class="form-group">
                                    <input class="form-control" placeholder="Project" name="project" type="text"  value="{{ old('project') }}">
                                </div>-->
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> 
                               <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop