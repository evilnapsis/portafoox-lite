<?php 

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

$handle = new Upload($_FILES['src']);
if ($handle->uploaded) {
        		$url="storage/products/$_POST[product_id]/";
            	$handle->Process($url);
            	if($handle->processed){
            		$pi= new ProductImageData();
            		$pi->title = $_POST["title"];
            		$pi->description = $_POST["description"];
            		$pi->product_id = $_POST["product_id"];
            		$pi->src = $handle->file_dst_name;
            		$pi->add();

            	}

    		}
Core::redir("./?view=productimgs&product_id=$_POST[product_id]");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
   		$pi= ProductImageData::getById($_POST["id"]);
		$pi->title = $_POST["title"];
		$pi->description = $_POST["description"];
		$pi->update();
Core::redir("./?view=productimgs&product_id=$_POST[product_id]");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
   		$pi= ProductImageData::getById($_GET["id"]);
		$pi->del();
Core::redir("./?view=productimgs&product_id=$_GET[product_id]");
}

?>