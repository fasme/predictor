@extends('layouts.master')
<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Comment System</title>




<!-- declare our angular app and controller --> 
<div class="container" ng-app="commentApp" > <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
        <h4>Commenting System</h4>
    </div>
    
    <!-- NEW COMMENT FORM =============================================== -->
    <form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->
    
        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="e" ng-model="commentData.e" placeholder="Name">
        </div>
    
        <!-- COMMENT TEXT -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
        </div>
    
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
    
    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    
    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <!--
 
-->
    
    
</div> 
</div> 
