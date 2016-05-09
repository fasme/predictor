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


  
    <h1>Mis torneos</h1>
    <div class="media">
  <div class="media-left">
    <a href="torneo/1">
      <img class="media-object" src="http://cdn2.uvnimg.com/6a/dc/b3aa5e3f4f9d9aee737e066133ee/0013783957.jpg" width="64" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Copa America Centenario</h4>
    
  </div>
</div>



<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="http://cdn2.uvnimg.com/6a/dc/b3aa5e3f4f9d9aee737e066133ee/0013783957.jpg" width="64" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">EuroCopa</h4>
    
  </div>
</div>




  



    </div>
  </div>
</div>






</div>
