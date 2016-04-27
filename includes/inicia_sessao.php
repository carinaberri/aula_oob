<?php

if(!isset($_SESSION["clientes"]) && $_SESSION["ja_comecou"] != true )
{
	
	include_once( __DIR__."/../controler/cliente.php");
	$id     = 0;
	$nome 	= "Nome Cliente - ";
	$cpf  	= "040-";
	$email  = "email@";
	$dataNascimento 	= "01/01/2001";
	$cidade 	= "Londrina";
	$estado 	= "Paraná";
	$cep  		= "86038-000";
	$rua 		= "rua do por do sol";
	$bairro 	= "cervejaria";
	$numeroEndereco = "140";
	$telefoneCelular 	= "(043) 9937-";
	$telefoneResidencial = "(043) 3348-";
	$clientes = array();
	
	for ($i = 0; $i<=10; $i++)
	{
		$indice = $i;
		$cliente= new Cliente($indice,$nome.$i,$email.$i,$cpf.$i,$dataNascimento,$cidade.$i,$estado.$i,$cep.$i,$rua.$i,$bairro.$i,$numeroEndereco.$i,$telefoneResidencial.$i,$telefoneCelular.$i);
		$clientes[$indice] = unserialize($cliente->lista_todos());
	}
	$_SESSION['clientes'] =($clientes);
	$_SESSION["ja_comecou"] = true;
}
