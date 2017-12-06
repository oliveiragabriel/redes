<?php

$senha=$_POST['senha'];
$senha=strtoUpper($senha);


function rem_repet( $str )
{
	$tam = strlen($str);
	$res = array();
		for( $i = 0; $i < $tam; $i++ )
		if( !in_array($str[$i], $res) )
			array_push($res,$str[$i]);
	return $res;
}//tira repeticao

function pos_carac( $carac, $alfa ){
	for( $i=0; $i < count($alfa); $i++ )
		if( $alfa[$i] == $carac )
			return $i;
	return -1;
} //procura a posição do criptograma

$texto=$_POST['texto'];
$texto=strtoUpper($texto);
$texto=str_split($texto);


$alfabeto ='abcdefghijklmnopqrstuvwxyz';
$alfabeto=strtoUpper($alfabeto);

$alfaCrip = rem_repet($senha.$alfabeto);//Alfabeto Criptografado

var_dump($alfaCrip);
var_dump($texto);


//array_push($texto,'a');

	$alfabeto=str_split($alfabeto);

	
	
	for($i=0; $i<count($texto); $i++){
	if($texto[$i]!= " " && $texto[$i]!= "." && $texto[$i]!= "," && $texto[$i]!= "?" && $texto[$i]!= "!" ){
		$carac = pos_carac( $texto[$i], $alfaCrip );
		
		echo $alfabeto[$carac];	
	}
	else{
		echo $texto[$i];
	}
}
?>