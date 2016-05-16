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


  

  <div  ng-app="commentApp" >
   <h1>Predicciones {{$id}}</h1>


<div class="row">
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">Proximos Partidos</div>
        <div class="panel-body">
          <table class="table">
          <tr>
            <td>10/10/2016 18:00</td><td>Chile</td><td><input type="number" min="0" style="width: 50px"></td><td>-</td><td><input type="number" min="0" style="width: 50px"></td><td>Argentina</td>
          </tr>
          <tr>
            <td>10/10/2016 18:00</td><td>Chile</td><td><input type="number" min="0" style="width: 50px"></td><td>-</td><td><input type="number" min="0" style="width: 50px"></td><td>Argentina</td>
          </tr>
          </table>
            
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">Partidos Jugados</div>
        <div class="panel-body">
          <table class="table">
          <tr>
            <td>10/10/2016 18:00</td><td>Chile</td><td><input type="number" min="0" style="width: 50px" disabled=""></td><td>-</td><td><input type="number" min="0" style="width: 50px" disabled=""></td><td>Argentina</td>
          </tr>
          <tr>
            <td>10/10/2016 18:00</td><td>Chile</td><td><input type="number" min="0" style="width: 50px" disabled=""></td><td>-</td><td><input type="number" min="0" style="width: 50px" disabled=""></td><td>Argentina</td>
          </tr>
          </table>
            
        </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>






</div>
