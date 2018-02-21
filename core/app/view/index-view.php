<?php
$about_title_bg = ConfigurationData::getByPreffix("about_title_bg")->val;
$about_title = ConfigurationData::getByPreffix("about_title")->val;
$about_content = ConfigurationData::getByPreffix("about_content")->val;

$coin_symbol = "";
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;
$cnt=0;
$slides = SlideData::getPublics();
$featureds = ProductData::getFeatureds();
?>
        <!-- Main Carousel Section -->
        <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
         
            <div class="carousel-inner">
            <?php foreach($slides as $sli):?>
                <div class="item <?php if($cnt==0){ echo 'active';} ?>">
                    <img class="img-responsive" src="admin/storage/slides/<?php echo $sli->image; ?>" alt="slider">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <h1 class="slideInLeft animated wow hero-heading" data-wow-delay=".6s"><?php echo $sli->title; ?></h1>
<!--                                    <h5 class="fadeInDown wow animated hero-sub-heading" data-wow-delay=".8s">Great choice for your next webdesign project</h5> -->
<!--                                    <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common" data-wow-delay=".9s"><i class="material-icons">&#xE90F;</i> Explore<div class="ripple-container"></div></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            <?php 
$cnt++;
            endforeach; ?>
         
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left" data-ripple-color="#F0F0F0"><div class="ripple-container"></div></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right" data-ripple-color="#F0F0F0"><div class="ripple-container"></div></i></span>
            </a>
        </div>
        <!-- Main Carousel Section End-->


        <!-- About Section -->
        <section class="mea-about-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-6 mea-title-section wow animated slideInLeft" data-wow-delay=".2s">
                        <h1 class="section-titile-bg"><?php echo $about_title_bg; ?></h1>
                        <h1 class="section-title"><?php echo $about_title; ?></h1>
                    </div>
                    <!-- Section Quote -->
                    <div class="col-md-6 mea-section-quote wow animated slideInRight" data-wow-delay=".2s">
                        <blockquote>
                            <p><?php echo $about_content; ?></p>
                        </blockquote>
                    </div>
                </div>
                <!--
                <div class="row mt-80">
                    <div class="col-md-4 about-widget wow animated fadeInUp" data-wow-delay=".4s">
                        <i class="material-icons">&#xE90F;</i>
                        <h2 class="subtitle">Insights</h2>
                        <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui officia deserunt mollit <br>animidest laborum.</p>
                    </div>
                    <div class="col-md-4 about-widget wow animated fadeInUp" data-wow-delay=".5s">
                        <i class="material-icons">&#xE8F1;</i>
                        <h2 class="subtitle">Design</h2>
                        <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui officia deserunt mollit <br>animidest laborum.</p>
                    </div>
                    <div class="col-md-4 about-widget wow animated fadeInUp" data-wow-delay=".6s">
                        <i class="material-icons">&#xE8E5;</i>
                        <h2 class="subtitle">Growth</h2>
                        <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui officia deserunt mollit <br>animidest laborum.</p>
                    </div>
                </div>
                -->
            </div>
        </section>
        <!-- About Section End -->



        <!-- Our BLog Section -->
        <section class="mea-blog-section section-padding">  
            <div class="container">
                <div class="row">


                    <div class="row mt-100">
                        <!-- Single Article -->
                        <?php foreach($featureds as $fea):?>
                        <div class="col-md-4 wow animated fadeInUp" data-wow-delay=".3s">
                            <article class="single-blog-post">
                                <!-- Featured Image -->
                                <div class="featured-image">
                                    <a href="#">
                                        <img src="admin/storage/products/<?php echo $fea->image; ?>" alt="">
                                    </a>
                                </div>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <!-- Read More -->
                                    <div class="read-more-icon">
                                        <a class="btn btn-round btn-fab" href="./?view=producto&product_id=<?php echo $fea->id; ?>"><i class="material-icons">&#xE5C8;</i><div class="ripple-container"></div></a>
                                    </div>
                                    <!-- Title -->
                                    <a href="./?view=producto&product_id=<?php echo $fea->id; ?>"><h2 class="subtitle"><?php echo $fea->name; ?></h2></a>
<!--                                    <p>by <b><a href="#">Kelly Grover</a></b></p> -->
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>

                    </div>
                </div>
                <div class="row mt-30 wow animated fadeInUp" data-wow-delay=".6s">
                    <!-- Button -->
                    <div class="col-md-12 text-center">
                        <a href="./?view=portafolio" class="animated4 btn btn-common" data-ripple-color="#000"><i class="material-icons">&#xE90F;</i> Ver Portafolio<div class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our BLog Section End -->
