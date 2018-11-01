<?php
/*
autor: Luiz Gustavo Genaro
email: luizgenaro@unisepe.com.br
email: gustavogenaro98@gmail.com
data:  16/08/2018
info:  Sistema NDE online 2018
*/

session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Restaurante\Page;
use \Restaurante\PageAdmin;

$app = new Slim();

$app->config('debug', true); #alterar para false

  //------------------------------------------------------------// 
 //                        LOGIN                               //  
//------------------------------------------------------------//
$app->get('/', function() { #acessa a pagina login (sem restrições)


    	$page = new Page([
            "header"=>false,
            "footer"=>false
        ]);

    	$page->setTpl("index", [
            'error'=>ApiUnisepe::getError()
        ]);
	 

});

$app->get('/admin', function() { #acessa a pagina login (sem restrições)


    	$page = new Page();

    	$page->setTpl("index");
	 

});





$app->run();