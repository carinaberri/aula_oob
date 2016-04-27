<?php 
session_start();

 	//ambiente de testes
    $ambiente_teste = true;

    

        //inicia variaveis 
    require_once(__DIR__."/inicia_sessao.php"); 
	//inicia bibliotecas
	require_once("./vendor/autoload.php");

    //Configurações do Twig
    $loader = new Twig_Loader_Filesystem(__DIR__.'/../template');
    $twig = new Twig_Environment($loader, array(
        'cache'     => __DIR__.'/../cache'
       
    ));
    $twig = new Twig_Environment($loader);


