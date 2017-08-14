<?php

function isActiveRoute($routeName){

	return Route::currentRouteName() == $routeName ? true : false;
}

function activeRoute($routeName){
	return isActiveRoute($routeName) ? "active" : "";
}

function linkToRoute($routeName){
	$link = "";
	if(isActiveRoute($routeName)){
		$link = "#";
	}else{
		$link = $routeName == "home" ? '/' : route($routeName);
	}
	return  $link;
}

