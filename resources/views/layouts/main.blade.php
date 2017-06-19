<!DOCTYPE html>
<html lang="en">

@extends('layouts.master')
<script type="text/javascript" src="../public/js/main.js"></script>
    
@section('content')

@section('menuBar')

        <div id="page-wrapper">
            <div class="row">
                <h1 class="page-header"> Hero
                <div class="col-md-1 pull-right"><a href="{{url('/insertHero')}}"><button class="btn btn-warning btn-block ">New Project</button></a></div>
                <div class="input-group custom-search-form col-lg-2 pull-right">
                    <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>  
                </h1>
             </div>

                @foreach($infoHero as $hero)
                <div class="col-lg-2 col-md-3">
                    <div class="panel ">
                        <div class="panel-heading">
                          <button class="close" type="button" data-toggle="modal" data-target="#myModal" onclick="setHeroName( '{{ $hero['HeroName'] }}' )">&times;</button>
                          <!--<img src="../public/images/hero/{{ $hero ['HeroName'] }}.jpg" height=100% width=100%-->
                            <div class="row">
                                <div class="col-xs-9 text-left">
                                    <div class="huge">{{ $hero['HeroName'] }} </div>
                                    <div>{{ $hero['Role'] }} </div>
                                    
                                </div>
                            </div>
                        
                        </div>
                        <a href="{{url('/showDetail',$hero['HeroName'])}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>   
                    </div>
                </div>
                @endforeach
 

                 <!--Modal-->
                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" >
                                    <h2 >  Do you want to delete <span class="id_hero_name"></span>? </h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" onClick="delHero()">Yes</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--Modal-->

                </div>      
            </div>       
        </div>        
    </div>
</div>

@stop

     