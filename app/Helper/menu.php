<?php

function isActiveRoute($routeName){

	return Route::currentRouteName() == $routeName ? true : false;
}

function activeRoute($routeName){
	return isActiveRoute($routeName) ? "active" : "";
}