<? /* 
Template Name: Home
*/ ?>

<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main id="post-hero" class="text-center"> 
        <!-- NEWS FEED -->
        <section class="news-feed">
            <div class="content clearfix">
                <div class="content-inner">
                    <h5 class="headline"><? /* ?><a href="#" class="link-reverse " title="Read all news stories"><? */ ?>News<? /* ?></a><? */ ?> ///</h5>
                    <ul class="news-feed-list list-unstyled">
                        <li class="item"><a href="/<?=$url_news_leadership_speaker_fund?>/" class="link">Leadership Campers Raising Speaker Funds</a></li>
                        <li class="item"><a href="/<?=$url_schedule?>/#adults" class="link">Woman's Wellness Weekend added to schedule</a></li>
                        <li class="item"><a href="/<?=$url_schedule?>/" class="link">2016 schedule is out!</a></li>
                        <li class="item"><a href="/news-amazon/" class="link">Donate to VBYC through your Amazon purchases</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- PRIMARY PROMOS -->
        <?php if( have_rows('primary_promo') ): ?>
        <section class="home-banner-primary">
            <div class="container">
                <div class="row">
                    <?php 

                        while( have_rows('primary_promo') ): the_row(); 
                        
                        $image          = get_sub_field('image');
                        $headline       = get_sub_field('headline');
                        $description    = get_sub_field('description');
                        $link_label     = get_sub_field('link_label');
                        $link           = get_sub_field('link');
                    ?>

                    <div class="col-xs-12 col-sm-6">
                        <div class="content">
                            <? // IMAGE
                                $close_a_tag = null;
                                if( !empty($image_link) ): 
                                    $close_a_tag = '</a>';
                            ?>
                                <a href="<?=$link?>" class="link">
                            <?php
                                endif; 

                                if( !empty($image) ): 
                            ?>
                                <img src="<?php echo $image['url']; ?>" class="banner-img img-responsive" alt="<?php echo $image['alt']; ?>">
                            <?php 
                                endif; 
                                echo $close_a_tag;
                            ?>
                            <div class="content-primary-text">
                                <h3 class="headline"><?=$headline?></h3>
                                <div class="row">
                                    <div class="description col-md-offset-1 col-md-10">
                                        <?=$description?>
                                    </div>
                                </div>
                                <a href="/<?=$link?>/" class="link">
                                    <?=$link_label?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div><!-- /.row -->
            </div>
        </section>
        <?php endif; ?>

        <!-- SECONDARY PROMOS -->  
        <?php if( have_rows('secondary_promo') ): ?>
        <section class="home-banner-secondary">       
            <?php 
                $num = 0;
                while( have_rows('secondary_promo') ): the_row(); 
                
                    $image              = get_sub_field('image');
                    $headline           = get_sub_field('headline');
                    $description        = get_sub_field('description');
                    $link_label         = get_sub_field('link_label');
                    $link               = get_sub_field('link');
                    $background_image   = get_sub_field('background_image');
                    

                    // Swap the alignment of image/text on every other item
                    if ($num & 1 ) {
                        // Odd
                        $classes_image = ' pull-right ';
                    } else { 
                        // Even
                        $classes_image = '';
                    }
                    $num++;
            ?>
            <div class="banner-item hero-background-img" style="<? /* TODO: Replace inline BG image style*/ ?>background-image:url(<?=$background_image['url']?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 <?=$classes_image?>">
                            <div class="content content-primary-img">
                                <? // IMAGE
                                    $close_a_tag = null;
                                    if( !empty($image_link) ): 
                                        $close_a_tag = '</a>';
                                ?>
                                    <a href="<?=$link?>" class="link">
                                <?php
                                    endif; 

                                    if( !empty($image) ): 
                                ?>
                                    <img src="<?php echo $image['url']; ?>" class="banner-img img-responsive" alt="<?php echo $image['alt']; ?>">
                                <?php 
                                    endif; 
                                    echo $close_a_tag;
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline"><?=$headline?></h3>
                                 <div class="description">
                                    <?=$description?>
                                </div>
                                <a href="<?=$link?>" class="link">
                                    <?=$link_label?>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
            <?php endwhile; ?>
        </section>
        <?php endif; ?>



        <!-- MAP OF CAMP -->
        <section class="home-banner-map-container">
            <div class="banner-item home-banner-map hero-background-img">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="content">
                                <a href="/<?=$url_explore_camp?>/" class="link text-center">
                                    <h3 class="headline">There&rsquo;s a lot to explore!</h3>
                                    <p class="cta">View the map of Camp</p>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </section>


        <!-- TERTIARY PROMOS -->
        <?php if( have_rows('tertiary_promo') ): ?>
        <section class="home-banner-tertiary">
            <div class="container">
                <?php 

                    while( have_rows('tertiary_promo') ): the_row(); 
                    
                        $image          = get_sub_field('image');
                        $headline       = get_sub_field('headline');
                        $description    = get_sub_field('description');
                        $link_label     = get_sub_field('link_label');
                        $link           = get_sub_field('link');
                        $a_tag_open     = null;
                        $a_tag_close    = null;
                        if( !empty($link) ): 
                            $a_tag_open = '<a href="'.$link.'" class="link">';
                            $a_tag_close = '</a>';
                        endif;    
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content">
                            <h3 class="h1">
                                <?=$a_tag_open?>
                                    <?=$headline?>
                                <?=$a_tag_close?>
                            </h3>
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="content content-primary-text">
                                        <div class="description">
                                            <?=$description?>
                                            <?=$a_tag_open?>
                                                <?=$link_label?>
                                            <?=$a_tag_close?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content content-primary-img">
                                <?=$a_tag_open?>
                                    <?php if( !empty($image) ): ?>
                                    <img src="<?=$src_defer?>" data-src="<?php echo $image['url']; ?>" class="banner-img img-responsive" alt="<?php echo $image['alt']; ?>">
                                    <?php endif; ?>
                                <?=$a_tag_close?>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row-->
            <?php endwhile; ?>
            </div>
        </section>
        <?php endif; ?>



      

            
            
    

            <!-- CLEO -->
      <!--       <div class="banner-item banner-cleo hero-background-img">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-md-8 pull-right">
                            <div class="content content-primary-img">
                                <a href="/<?=$url_facilities?>/" class="link">
                                    <img src="<?=$src_defer?>" data-src="/images/home/cleo.jpg" class="banner-img img-responsive" alt="Cleo the moose on the wall in the lodge">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Cleo the Moose</h3>
                                <div class="description">
                                    <p>Keep your elbows on the table at lunch and you have to (get to?) kiss a moose! What other treasures lie within our camp buildings and grounds?</p>
                                </div>
                                <a href="/<?=$url_facilities?>/" class="link">
                                    Learn more about our facilities
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            
  



        

    </main>

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>