<?php

if(isset($_GET["id"]) && isset($_GET["k"])){
	if($_GET["id"]!="" && $_GET["k"]!=""){
		$buy = BuyData::getById($_GET["id"]);
		if($buy->k==$_GET["k"]){
			// http://localhost/katana-pro/index.php?view=openbuy&code=oj83clxUsMO
			$buy->status_id=3; // cancelado
			$buy->change_status();
			$_SESSION["thanks"]=true;
///////////////////////////////////// Emailing
$client = ClientData::getById($buy->client_id);
$adminemail = ConfigurationData::getByPreffix("general_main_email")->val;



$products = BuyProductData::getAllByBuyId($buy->id);
$data = "";
$total = 0;
foreach ($products as $px) {
	$product = $px->getProduct();
	$data .= "<tr>";
	$data .= "<td>$px->q</td>";
	$data .= "<td>$product->name</td>";
	$data .= "<td> $".number_format($product->price,2,".",",")."</td>";
	$data .= "<td> $".number_format($px->q*$product->price,2,".",",")."</td></tr>";
	$total+= $px->q*$product->price;
}

$themessage = '
<meta content="es-mx" http-equiv="Content-Language" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<h1>Nueva Compra</h1>
<h4>Cliente: '.$client->getFullname().'</h4>
<table align="center" border=1 cellspacing="4" class="style2" style="width: 700">
	<tr>
		<td>Cant.</td><td>Producto</td><td>P.U</td><td>Total</td>
	</tr>
	'.$data.'
</table>
<h3>Total = $ '.number_format($total,2,".",",").' </h3>
<hr>
<p>Powered By <a href="http://evilnapsis.com/product/katana/" target="_blank"> Katana PRO</a></p>
</body>';

mail("$adminemail",
     "Compra Cancelada",
     "$themessage",
	 "From: $adminemail\nReply-To: $adminemail\nContent-Type: text/html; charset=ISO-8859-1");


/////////////////////////////////////



			Core::redir("./?view=openbuy&code=".$buy->code);
		}else{
			echo "Incorrect KEY!";
		}
	}else{
		echo "Id or KEY is Empty!";
	}
}else{
	echo "Id or KEY is Unset!";
}


?>