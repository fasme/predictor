@extends('layouts.master')

<div class="login-page" ng-app="commentApp" ng-controller="loginController">
	<div class="row">
		<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
        	<img src="images/flat-avatar.png" class="user-avatar" />
			<h1>Ani Theme <small>Free Edition</small></h1>
			<form role="form" ng-submit="submit()">

				<div class="form-content">
					<div class="form-group">
						<input type="text" class="form-control input-underline input-lg" id="" placeholder="Email" ng-model="datos.email">
					</div>

					<div class="form-group">
						<input type="password" class="form-control input-underline input-lg" id="" placeholder="Password" ng-model="datos.password">
					</div>
				</div>

				<button type="submit" class="btn btn-white btn-outline btn-lg btn-rounded">Login</button>

			</form>



		</div>	
	</div>

</div>