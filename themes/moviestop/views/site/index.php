<!-- Section: intro -->
<section id="intro" class="intro">

    <div class="slogan">
        <h2>WELCOME TO <span class="text_color">Movie Stop</span> </h2>
        
    </div>
    <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id="recent" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Recent Movies</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <?php foreach(Functions::getRecentMovies() as $row): ?>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5><?php echo $row->name; ?></h5>
                            <p class="subtitle"><?php echo $row->genre; ?></p>
                            <div class="avatar"><img src="<?php echo $row->image;?>" alt="" class="<?php echo Yii::app()->theme->baseUrl; ?>/img-responsive <?php echo Yii::app()->theme->baseUrl; ?>/img-circle" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>		
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id="upcoming" class="home-section text-center bg-gray">

    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>UpComing Movies</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <?php foreach(Functions::getUpcomingMovies() as $rowUpcoming): ?>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo $rowUpcoming->image;?>" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5><?php echo $rowUpcoming->name; ?></h5>
                            <p><?php echo $rowUpcoming->genre; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>		
    </div>
</section>
<!-- /Section: services -->
