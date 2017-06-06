
@extends('layouts.childMaster')

@section('head')

@section('content')

    @foreach($infoHero as $hero)
   <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h2> {{ $hero ['HeroName'] }} </h2>
            </div>
         
            <div class="panel-body">
                    <img src="../images/hero/{{ $hero ['HeroName'] }}.jpg"><br><br>
                    <p> Hero Name:  {{ $hero ['HeroName'] }} </p> 
                    <p> Real Name {{ $hero ['HeroRealName'] }}  </p>  
                    <p> Damage: {{ $hero ['Damage'] }} </p>  
                    <p> Healing {{ $hero ['Heal'] }} </p> 
                    <p> Speed: {{ $hero ['Speed'] }} </p> 
                    <p> Popular Rank: {{ $hero ['PopRank'] }} </p>  
                    <p> Role: {{ $hero ['Role'] }}  </p> 
                    <p> Country:  {{ $hero ['CFullName'] }} </p> 
            </div>
            <a href="{{ url('/editHero',$hero['HeroName']) }}"> <input type="submit" class="btn btn-lg btn-success btn-block" value="Edit"></a>

        </div>
    </div>
       
    @endforeach

    <!--<a href="{{ url('/delHero') }}" >Delete</a>-->
@stop
                     