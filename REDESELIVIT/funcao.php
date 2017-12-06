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

$texto=$_POST['texto'];
$texto=strtoUpper($texto);
$texto=str_split($texto);


$alfabeto ='abcdefghijklmnopqrstuvwxyz';
$alfabeto=strtoUpper($alfabeto);

$alfaCrip = rem_repet($senha.$alfabeto);//Alfabeto Criptografado

var_dump($alfaCrip);
var_dump($texto);




	$alfabeto=str_split($alfabeto);

	
//fazer a criptografia césar com senha

for($i=0; $i<count($texto); $i++){
	if($texto[$i]!= " " && $texto[$i]!= "." && $texto[$i]!= "," && $texto[$i]!= "?" && $texto[$i]!= "!" ){
		$carac=ord($texto[$i]);
		$carac = $carac-65;
		
		echo $alfaCrip[$carac];	
	}
	else{
		echo $texto[$i];
			//$textocrip=array();
			//$textocrip[$i]=$texto[$i];
	} 
	//var_dump($textocrip);
}
		echo "<br/>";
//criptografar com césar sem senha

	for($j=0;$j<count($texto);$j++){ //roda o texto criptografado primeiramente com César com senha
		for($t=0;$t<count($alfabeto);$t++){//roda o alfabeto
			if($texto[$j]==$alfabeto[$t]){
				$t=$t+3;
				$texto[$j]=$alfabeto[$t];
			}
		}
		echo $texto[$j];
	}
	





?>