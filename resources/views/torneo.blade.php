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
   <h1>Nombre del torneo {{$id}}</h1>



   
<div class="row">
  <div class="col-md-12">
    <a href="predictor/1" class="btn btn-sq-lg btn-warning">
      <i class="fa fa-pencil-square-o  fa-2x"></i>
      Mis Predicciones
    </a>
  </div>
</div>


<br>





<div class="row">
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">Tabla de posiciones</div>
        <div class="panel-body">
          <table class="table">
            <thead>
            <tr>
            <th>Pos.</th><th>Jugador</th><th>Puntos</th>
            </tr>  
            </thead>
            <tbody>
            <tr>
              <td>1</td><td>Fabian</td><td>3</td>
            </tr>    
            </tbody>
            </table>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">Reglas</div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>Descripción</th><th>Puntos</th>
            </tr>  
            </thead>
            <tbody>
            <tr>
              <td>Marcador Exacto</td><td>3</td>
            </tr>
            <tr>
              <td>Marcador Unico</td><td>3</td>
            </tr>     
            </tbody>
            </table>
        </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">Proximos partidos</div>
        <div class="panel-body">
          <div ng-repeat="(key, value) in proximospartidos">
            
            <span class="label label-success"> <% value.partidi.fecha %></span> <% value.eq1 %>  -  <% value.eq2 %> 
          </div>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">Ultimos resultados</div>
        <div class="panel-body">
         <span class="label label-danger"> 20-01-205 17:30 Hrs</span> Chile 1 - 0 Suecia
        </div>
    </div>
  </div>
</div>




  



    </div>
  </div>
</div>






</div>
