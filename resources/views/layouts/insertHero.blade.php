
<!DOCTYPE html>
<html lang="en">
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
                        <form role="form" method= "post" action="{{ url('/insertHero')}}">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hero Name" name="name" type="text" autofocus  value="{{ old('name') }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Real Name" name="realName" type="text" autofocus  value="{{ old('realName') }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Damage" name="damage" type="number" autofocus/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Heal" name="heal" type="number" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Blood" name="blood" type="number" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Popular Rank" name="popRank" type="number">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Speed" name="speed" type="number">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Country" name="country" type="text">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Role" name="role" type="text">
                                </div>
                        
                               <input type="submit" class="btn btn-lg btn-success btn-block" value="Insert">
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop