<?php


//print_r($_POST);

$ratx = RatingData::getByCP($_SESSION["client_id"],$_POST["product_id"]);

if($ratx==null){
	$rat = new RatingData();
	$rat->rating = $_POST["rating"];
	$rat->comment = $_POST["comment"];
	$rat->product_id = $_POST["product_id"];
	$rat->client_id = $_SESSION["client_id"];
	$rat->add();
	Core::alert("Calificacion agregada exitosamente!");
}else{
	Core::alert("No puedes repetir la calificacion!");
}
Core::redir("./?view=producto&product_id=".$_POST["product_id"]);
?>
