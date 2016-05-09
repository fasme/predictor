@extends('layouts.master')

<div class="dashboard-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">

       <div class="text-center">
        <h2 class="brand">An222iss Theme <small>Free Edition</small></h2>
        <img src="{!! asset('images/flat-avatar.png') !!}" class="user-avatar" /><br />
        <a ui-sref="login" class="btn btn-white btn-outline btn-rounded btn-sm">Logout</a>
      </div>

      <ul class="nav nav-sidebar">
        <li ng-click=""><a ui-sref="overview">Inicio <span class="sr-only">(current)</span></a></li>
        <li ng-click=""><a ui-sref="overview">Perfil <span class="sr-only">(current)</span></a></li>
      </ul>

    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ui-view>


  

  <div  ng-app="commentApp" ng-controller="torneoController">
   <h1>Copa America Centenario</h1>



   {{$id}}
</div>


  



    </div>
  </div>
</div>






</div>
