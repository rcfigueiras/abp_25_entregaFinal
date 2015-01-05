<?php

$sinBarra = substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']));

$inicio = strstr($sinBarra,'/',true);

if($inicio == "" 
    || $inicio == "controllers" 
    || $inicio == "views" 
    || $inicio == "dist" 
    || $inicio == "models" 
    || $inicio == "src" 
    || $inicio == "css" 
    || $inicio == "db")
{

  $inicio = '/';
  
  define("raiz", $inicio);

}else{
  
  $inicio = "/".$inicio."/";

  define("raiz", $inicio);
  
  define("max_pinchos",2);
  
  define("max_jurados",2);
  
}


?>
