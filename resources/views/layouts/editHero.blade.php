
<!DOCTYPE html>
<html lang="en">
@extends('layouts.childMaster')

@section('head')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hero Edition</h3>
                    </div>
                    @if(Session::has('message'))
                        <div class="panel-body bg-danger color-red">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="panel-body">
                         @foreach($infoHero as $hero)
                        <form role="form" method= "post" action="{{ url('/editHero' , $hero['HeroName'] )}}">
                        @endforeach
                            {!! csrf_field() !!}
                            <fieldset>
                                 @foreach($infoHero as $hero)
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hero Name" name="name" type="text" autofocus  value="{{ $hero ['HeroName'] }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Real Name" name="realName" type="text" autofocus  value="{{ $hero ['HeroRealName'] }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Damage" name="damage" type="number" autofocus value="{{ $hero ['Damage'] }}"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Heal" name="heal" type="number" value="{{ $hero ['Heal'] }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Blood" name="blood" type="number" value="{{ $hero ['Blood'] }}" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Popular Rank" name="popRank" type="number" value="{{ $hero ['PopRank'] }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Speed" name="speed" type="number" value="{{ $hero ['Speed'] }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Country" name="country" type="text" value="{{ $hero ['Country'] }}">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Role" name="role" type="text" value="{{ $hero ['Role'] }}">
                                </div>
                                @endforeach
                                
                               <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop