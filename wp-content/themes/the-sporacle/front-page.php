<?php get_header(); ?>
<!-- banner area  -->
<section class="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-img">
                    <img src="<?php echo theme_path; ?>assets/images/banner-mashroom.webp" class="d-block w-100 zoom-in-zoom-out" alt="logo"
                         loading="lazy" />
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row" style="align-items: center;">
                            <div class="col-md-7">
                                <div class="banner-txt">
                                    <h1 class="h1">Personalized Custom <span>Designs</span></h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                        posuere enim.
                                    </p>
                                    <div class="shop-now">
                                        <a href="#" class="btn1"><i class="fad fa-bags-shopping"></i>shop now<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-top-img">
                                    <img src="<?php echo theme_path; ?>assets/images/mashroom-1.webp" alt="logo" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-img">
                    <img src="<?php echo theme_path; ?>assets/images/banner-mashroom.webp" class="d-block w-100 zoom-in-zoom-out" alt="logo"
                         loading="lazy" />
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row" style="align-items: center;">
                            <div class="col-md-7">
                                <div class="banner-txt">
                                    <h1 class="h1">Personalized Custom <span>Designs</span></h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                        posuere enim.
                                    </p>
                                    <div class="shop-now">
                                        <a href="#" class="btn1"><i class="fad fa-bags-shopping"></i>shop now<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-top-img">
                                    <img src="<?php echo theme_path; ?>assets/images/mashroom-2.webp" alt="logo" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-img">
                    <img src="<?php echo theme_path; ?>assets/images/banner-mashroom.webp" class="d-block w-100 zoom-in-zoom-out" alt="logo"
                         loading="lazy" />
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row" style="align-items: center;">
                            <div class="col-md-7">
                                <div class="banner-txt">
                                    <h1 class="h1">Personalized Custom <span>Designs</span></h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                        posuere enim.
                                    </p>
                                    <div class="shop-now">
                                        <a href="#" class="btn1"><i class="fad fa-bags-shopping"></i>shop now<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-top-img">
                                    <img src="assets/images/mashroom-3.webp" alt="logo" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</section>

<!-- banner area end -->

<!-- new collections area  -->
<section class="collections section-area">
    <div class="container">
        <div class="collection-in">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="txt-div category">
                        <div class="h3">our special New collections</div>
                        <a href="#">see all
                            <img src="<?php echo theme_path; ?>assets/images/black-arrow.png" alt="logo" loading="lazy" />
                        </a>
                    </div>
                </div>
                <?php $posts = new WP_Query(array('post_type' => 'product', 'order' => 'DESC', 'posts_per_page'=>2, 'product_cat' =>'Women'));
                while ($posts->have_posts()) :
                    $posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="category-img top-img category">
                        <?php the_post_thumbnail(); ?>
                        <div class="category-txt">
                            <a href="#" class="h3"><?php the_title(); ?></a>
                            <span><div class="con"><?php the_excerpt(); ?></div></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php $posts= new WP_Query(array('post_type'=>'product', 'order'=> 'DESC', 'offset'=>2 , 'posts_per_page'=>2, 'product_cat'=>'Women'));
                     while ($posts->have_posts()) :
                         $posts->the_post(); ?>
                <div class="col-md-6">
                    <div class="category-img category">
                        <?php the_post_thumbnail(); ?>
                        <div class="category-txt">
                            <a href="#" class="h3"><?php the_title(); ?></a>
                            <span><div class="con"><?php the_excerpt(); ?></div></span>
                        </div>
                    </div>
                </div>
                <?php  endwhile;  wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<!-- new collections area end -->

<!-- latest collections -->
<div class="container">
    <section class="latest-collections section-area">
        <ul>
            <li>
                <div class="h3 l-collection"><span>THE NEW ARRIVALS</span> latest collection</div>
            </li>
            <li>
                <a href="#">see all<img src="assets/images/black-arrow.png" alt="logo" loading="lazy" />
                </a>
            </li>
        </ul>
        <div class="l-collection-area">
            <div class="row">
                <?php $posts= new WP_Query(array('post_type'=>'product', 'order'=> 'DESC', 'posts_per_page'=>1, 'product_cat'=>'Shirts'));
                while ($posts->have_posts()) :
                $posts->the_post(); ?>
                <div class="col-lg-4">
                    <div class="new-arrival">
                        <div class="collection-img">
                            <?php the_post_thumbnail('full', array('class'=>'new-arrival-left')); ?>
                        </div>
                        <div class="arrival-txt">
                            <strong><?=$product->get_price_html();?></strong>
                            <a href="<?php the_permalink(); ?>" class="btn2">view details</a>
                        </div>
                    </div>

                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <div class="col-lg-8">
                    <div class="row">
                        <?php $posts= new WP_Query(array('post_type'=>'product', 'order'=> 'DESC', 'offset'=>1 , 'posts_per_page'=>4, 'product_cat'=>'Shirts'));
                        while ($posts->have_posts()) :
                        $posts->the_post(); ?>
                        <div class="col-md-6">
                            <div class="new-arrival">
                                <div class="collection-img">
                                    <?php the_post_thumbnail('full', array('class'=>'new-arrival-right')); ?>
                                </div>
                                <div class="arrival-txt">
                                    <strong><?=$product->get_price_html();?></strong>
                                    <a href="<?php the_permalink(); ?>" class="btn2">view details</a>
                                </div>
                            </div>

                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- latest collections end -->

<!-- quality products  -->
<div class="container">
    <section class="quality-product">
        <div class="quality-in">
            <div class="row" style="align-items: center;">
                <div class="col-md-6">
                    <div class="quality-img">
                        <img src="<?php echo theme_path; ?>assets/images/mashroom-11.webp" alt="logo" loading="lazy" />
                        <div class="white-div"></div>
                        <div class="white-div2"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quality-txt">
                        <h2 class="h2">Best Quality <span>Product</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere
                            enim nec nunc.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- quality products end -->

<!-- popular items -->
<div class="container">
    <section class="latest-collections section-area">
        <ul>
            <li>
                <div class="h3">popular items</div>
            </li>
            <li>
                <a href="#">see all<img src="<?php echo theme_path; ?>assets/images/black-arrow.png" alt="logo" loading="lazy" /></a>
            </li>
        </ul>
        <div class="owl-carousel owl-theme latest-slider">
            <?php $posts= new WP_Query(array('post_type'=>'product', 'order'=> 'DESC',  'posts_per_page'=>-1));
            while ($posts->have_posts()) :
            $posts->the_post(); ?>
            <div class="item">
                <div class="product-area p-area">
                    <div class="product">
                        <div class="img-area">
                            <?php the_post_thumbnail(); ?>

                        </div>
                        <div class="txt-area">
                            <ul class="left-txt">
                                <li>
                                    <ul >
                                        <li><a href="#"><h5 class="h5"><?php the_title(); ?></h5></a></li>
                                        <li><h6 class="h6"><?=$product->get_price_html(); ?></h6></li>
                                    </ul>
                                </li>
                                <li class="icon">
                                    <ul>
                                        <li>
                                            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                        </li>
                                        <li>
                                            <a href="#"><i data-feather="shopping-bag"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-bg p-bg"></div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
</div>
<!-- popular items end -->

<!-- testimonial  -->
<section class="testimonial section-area">
    <div class="container">
        <div class="owl-carousel owl-theme slider">
            <div class="item">
                <div class="t-txt">
                    <div class="h3">our Happy Customers</div>
                    <p>
                        “It is a long established fact that a reader readable content will
                        be distracted by the readable content of a page when looking at
                        its layout.”
                    </p>
                    <ul class="customer">
                        <li>
                            <img src="<?php echo theme_path; ?>assets/images/face1.webp" alt="logo" loading="lazy" />
                        </li>
                        <li>
                            <ul>
                                <li class="name">Hannah Schmitt</li>
                                <li class="our-customer">Our Customer</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="t-txt">
                    <div class="h3">our Happy Customers</div>
                    <p>
                        “It is a long established fact that a reader readable content will
                        be distracted by the readable content of a page when looking at
                        its layout.”
                    </p>
                    <ul class="customer">
                        <li>
                            <img src="assets/images/face1.png" alt="logo" loading="lazy" />
                        </li>
                        <li>
                            <ul>
                                <li class="name">Hannah Schmitt</li>
                                <li class="our-customer">Our Customer</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="t-txt">
                    <div class="h3">our Happy Customers</div>
                    <p>
                        “It is a long established fact that a reader readable content will
                        be distracted by the readable content of a page when looking at
                        its layout.”
                    </p>
                    <ul class="customer">
                        <li>
                            <img src="assets/images/face1.png" alt="logo" loading="lazy" />
                        </li>
                        <li>
                            <ul>
                                <li class="name">Hannah Schmitt</li>
                                <li class="our-customer">Our Customer</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- newsletter area  -->
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="newsletter-left">
                    <strong>to get latest offer news</strong>
                    <h3 class="h3">subscribe our newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter-right">
                    <form class="my-form">
                        <div class="form-group">
                            <input type="text" class="form-control" form-control id="exampleFormControlInput4"
                                   placeholder="Email Id" />
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="btn2">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
