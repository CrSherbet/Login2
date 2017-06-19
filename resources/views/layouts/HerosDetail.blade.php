
<!DOCTYPE html>
<html lang="en">
@extends('layouts.childMaster')

@section('head')

@section('content')
@section('menuBar')
<div id="page-wrapper">
    <br>
    @foreach($infoHero as $hero)
   <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h2> Information of {{ $hero ['HeroName'] }} <a href="{{ url('/editHero',$hero['HeroName']) }}"> <input type="submit" class="btn btn-sm pull-right " value="Edit"></a> </h2>
            </div>
         
            <div class="panel-body">
                    <img src="../images/hero/{{ $hero ['HeroName'] }}.jpg" height=100% width=100%><br><br>
                    <p> Hero Name:  {{ $hero ['HeroName'] }} </p> 
                    <p> Real Name {{ $hero ['HeroRealName'] }}  </p>  
                    <p> Damage: {{ $hero ['Damage'] }} </p>  
                    <p> Healing {{ $hero ['Heal'] }} </p> 
                    <p> Speed: {{ $hero ['Speed'] }} </p> 
                    <p> Popular Rank: {{ $hero ['PopRank'] }} </p>  
                    <p> Role: {{ $hero ['Role'] }}  </p> 
                    <p> Country:  {{ $hero ['CFullName'] }} </p> 
                    
            </div>
            

        </div>
    </div>
       
    @endforeach

     @foreach($infoHero as $hero)
   <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h2> Unit  <a href="{{ url('/editHero',$hero['HeroName']) }}"> <input type="submit" class="btn btn-sm pull-right " value="Edit"></a> </h2>
            </div>
         
            <div class="panel-body">
                    <p> Hero Name:  {{ $hero ['HeroName'] }} </p> 
                    <p> Real Name {{ $hero ['HeroRealName'] }}  </p>  
                    <p> Damage: {{ $hero ['Damage'] }} </p>  
                    <p> Healing {{ $hero ['Heal'] }} </p> 
                    <p> Speed: {{ $hero ['Speed'] }} </p> 
                    <p> Popular Rank: {{ $hero ['PopRank'] }} </p>  
                    <p> Role: {{ $hero ['Role'] }}  </p> 
                    <p> Country:  {{ $hero ['CFullName'] }} </p> 
            </div>
    
        </div>
    </div>
       
    @endforeach

     @foreach($infoHero as $hero)
   <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h2> Staff  <a href="{{ url('/editHero',$hero['HeroName']) }}"> <input type="submit" class="btn btn-sm pull-right " value="Edit"></a> </h2>
            </div>
         
            <div class="panel-body">
                  
                    <p> Hero Name:  {{ $hero ['HeroName'] }} </p> 
                    <p> Real Name {{ $hero ['HeroRealName'] }}  </p>  
                    <p> Damage: {{ $hero ['Damage'] }} </p>  
                    <p> Healing {{ $hero ['Heal'] }} </p> 
                    <p> Speed: {{ $hero ['Speed'] }} </p> 
                    <p> Popular Rank: {{ $hero ['PopRank'] }} </p>  
                    <p> Role: {{ $hero ['Role'] }}  </p> 
                    <p> Country:  {{ $hero ['CFullName'] }} </p> 
            </div>
            
        </div>
    </div>
       
    @endforeach

      @foreach($infoHero as $hero)
   <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h2> Customer <a href="{{ url('/editHero',$hero['HeroName']) }}"> <input type="submit" class="btn btn-sm pull-right " value="Edit"></a>  </h2>
            </div>
         
            <div class="panel-body">
                  
                    <p> Hero Name:  {{ $hero ['HeroName'] }} </p> 
                    <p> Real Name {{ $hero ['HeroRealName'] }}  </p>  
                    <p> Damage: {{ $hero ['Damage'] }} </p>  
                    <p> Healing {{ $hero ['Heal'] }} </p> 
                    <p> Speed: {{ $hero ['Speed'] }} </p> 
                    <p> Popular Rank: {{ $hero ['PopRank'] }} </p>  
                    <p> Role: {{ $hero ['Role'] }}  </p> 
                    <p> Country:  {{ $hero ['CFullName'] }} </p> 
            </div>
           
        </div>
    </div>
       
    @endforeach
</div>
    <!--<a href="{{ url('/delHero') }}" >Delete</a>-->
@stop
                     