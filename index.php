<?php

require_once("./includes/config.php");

 	$class  = filter_input(INPUT_GET, 'class');
    $action = filter_input(INPUT_GET, 'action');
    $render = filter_input(INPUT_GET, 'render');
    $id 	= filter_input(INPUT_GET, 'id');
    $order 	= filter_input(INPUT_GET, 'order');
   

if(!empty($action) || !empty($render)){
	if($class=="cliente")
	{
		if($action=="apagar" && (intval($id) != "" || $id == "0"))
		{

			unset($_SESSION['clientes'][$id]);
			header("Location: index.php");			
			die;
		}
		
		elseif($render=="visualizar" && (intval($id) != "" || $id == "0"))
		{

			$view_name = 'cliente-detalhe.html';
			echo $twig->render($view_name, array('dados'=>$cliente_selecionado));
			die;
		}
		else{
			header("Location: index.php");
		}
	}
	else{
		header("Location: index.php");
	}
}
else{
// 
 $view_name = 'cliente_lista.html';
	if($order=="desc")
	{
		$clientes = krsort($_SESSION['clientes']);
	}
	else
	{
		$clientes = ksort($_SESSION['clientes']);
	}
 echo $twig->render($view_name, array('linhas' => $_SESSION['clientes']));
 //carrega as informações a serem mostradas
  }


