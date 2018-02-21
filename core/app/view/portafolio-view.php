<section class="page-title-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-center">
<div class="title-middle">
<h1 class="page-title">Portafolio</h1>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="mea-portfolio-section section-padding section-dark">
<div class="container">
<div class="row">

<div class="col-md-12 portfolio-nav mt-40 wow fadeInDown animated" data-wow-delay=".2s">
<ul class="nav navbar-nav">
<li><a class="filter active" data-filter="all">All</a></li>
<?php foreach(CategoryData::getAll() as $cat):?>
<li><a class="filter" data-filter=".<?php echo $cat->id; ?>"><?php echo $cat->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<div class="portfolio-item-wrapper col-md-12 clearfix mt-50 wow fadeInUp" data-wow-delay=".4s" id="mea-portfolio">
<?php foreach(ProductData::getAll() as $p):?>
<div class="col-md-4  col-sm-4 col-xs-12 no-padding mix <?php echo $p->category_id; ?> blog">
<figure class="single-portfolio">
<img class="img-responsive" src="admin/storage/products/<?php echo $p->image; ?>" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="./?view=producto&product_id=<?php echo $p->id; ?>"><i class="material-icons">&#xE5C8;</i><div class="ripple-container"></div></a>
<a href="./?view=producto&product_id=<?php echo $p->id; ?>"><h2 class="subtitle"><?php echo $p->name; ?></h2></a>
</figcaption>
</figure>
</div>
<?php endforeach; ?>


</div>
</div>
</div>
</section>
