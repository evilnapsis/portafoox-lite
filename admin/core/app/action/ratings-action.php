<?php


if(isset($_GET["opt"]) && $_GET["opt"]=="aprove"){
$r = RatingData::getById($_GET["id"]);
$r->status_id=1;
$r->update_status();
Core::alert("Aprobado exitosamente!");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="hide"){
$r = RatingData::getById($_GET["id"]);
$r->status_id=2;
$r->update_status();
Core::alert("Oculto exitosamente!");
}
Core::redir("./?view=ratings");
?>