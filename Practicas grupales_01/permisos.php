<?php
define("SP",000000);
define("L",000001);
define("ADE",000010);
define("ADF",000100);
define("EDE",001000);
define("EDF",010000);
define("ADMIN",100000);


$user1=SP;

if(!$user1 & (ADMIN+EDF+EDE+ADF+ADE+L))
	printf("El usuario no tiene permisos.<br>");
else
	printf("El usuario tiene algun permiso.<br>");

$user1=L;

if($user1 & L)
	printf("El usuario tiene permisos de login.<br>");
else
	printf("El usuario no tiene permisos de login.<br>");

$user1+=ADE;

if($user1 & ADE)
	printf("El usuario tiene permisos de acceso a datos empresariales.<br>");
else
	printf("El usuario no tiene permisos de acceso a datos empresariales.<br>");

$user1+=ADF;

if($user1 & ADF)
	printf("El usuario tiene permisos de acceso a datos de facturacion.<br>");
else
	printf("El usuario no tiene permisos de acceso a datos de facturacion.<br>");

$user1-=ADE;

if($user1 & ADE)
	printf("El usuario tiene permisos de acceso a datos empresariales.<br>");
else
	printf("El usuario no tiene permisos de acceso a datos empresariales.<br>");


$user1+=ADMIN;

if($user1 & ADMIN)
	printf("El usuario tiene permisos de administrador.<br>");
else
	printf("El usuario tiene permisos de administrador.<br>");

?>