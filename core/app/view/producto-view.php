<?php 
$p = ProductData::getById($_GET["product_id"]);
$cat= CategoryData::getById($p->category_id);
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;
$coin_symbol = "";

Viewer::addView($p->id,"product_id","product_view");
$img="";
if($p!=null){
$img = "admin/storage/products/".$p->image;
if($p->image==""){
  $img=$img_default;
}
}
 ?>
<section class="page-title-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-center">
<div class="title-middle">
<h1 class="page-title">Portfolio Details</h1>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="portfolio-details-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-8 portfolio-details-iamge wow animated fadeInUp" data-wow-delay=".6s">
<img src="<?php echo $img?>" class="img-responsive" alt="">


<!--
<div class="portfolio-pagination mt-50">
 <ul class="pager">
<li class="previous disabled"><a href="javascript:void(0)">← Older</a></li>
<li class="next"><a class="withripple" href="javascript:void(0)">Newer →</a></li>
</ul>
</div>
-->
</div>
<div class="col-md-4 portfolio-details wow animated fadeInUp" data-wow-delay=".6s">
<div class="portfolio-category">
<a href="javascript:void()"><i class="material-icons">&#xE867;</i><?php echo $cat->name; ?></a>
</div>
<h2><?php echo $p->name; ?></h2>
<p><?php echo $p->description; ?></p>
<!--
<ul class="portfolio-meta clearfix">
<li><span> Client </span> GrayGrids</li>
<li><span> Created by </span> John Doe</li>
<li><span> Completed on </span> 15 Nov 2015</li>
<li><span> Skills </span> Wordpress / PHP / CSS3</li>
<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
</ul>
<a href="javascript:void(0)" class="mt-30 btn btn-common btn-block"><i class="material-icons">&#xE8F4;</i> Live Demo<div class="ripple-container"></div></a>
-->
</div>
</div>
</div>
</section>


<br>