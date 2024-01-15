<?php
    /*
        Template Name: Team
        ID Page: 16
    */
?>

<?php get_header(); ?>
    
<section class="kl-sect-who-we-are-3 position-relative">
                <div class="kl-bg-form-white position-absolute">
                </div>
                <div class="container kl-container-1100">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 pt-5 mb-5">
                            <div class="kl-title-third kl-text-48 position-relative">
                                <h2 class="kl-writing-machine">We are Niyel !</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/Scribbles.svg" alt="" class="kl-decor-team">
                            </div>
                            <div class="kl-title-secondary kl-title-64 kl-title-arrow mx-auto">
                                <div class="kl-mb-lg-48 kl-mb-15 ms-lg-5 ms-0 text-nowrap">
                                    <h2>
                                        <?php the_field('title_team_1'); ?>
                                        <span class="kl-color-blue-primary">
                                            <?php the_field('title_blue_team_1'); ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="kl-content-text kl-text-16 mt-lg-5 mt-0 ms-lg-5 ms-0 kl-mw-290">
                                    <?php the_field('paragraph_team'); ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-7 col-lg-8 mb-5 d-flex align-items-center justify-content-end">
                            <div class="kl-group-img-niyel">
                                <?php
                                    if (get_field('image_team')) {
                                        $illu       = wp_get_attachment_image_src(get_field('image_team'), 'full');
                                        $illu_url   = $illu[0];
                                    }
                                ?>
                                <img src="<?php echo $illu_url; ?>" alt="" class="kl-img-wwa">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/who_we_are/polka_dots.svg" alt="" class="kl-dots-img-niyel">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end section who we are-->

            <!--section liste categories-->
            <section class="kl-sect-list-categories">
                <div class="container kl-container-1100">
                    <div class="kl-nav-filter">
                        <p>filter by category :</p>
                        <ul class="kl-nav-filter-content">
                            <li>
                                <a href="javascript:void(0)" data-value="Marketing">Marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-value="Communication">Communication</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-value="Creative">Creative</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-value="Consulting">Consulting</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-value="Office">Office</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-value="People-Partnership">People & Partnership</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--end section liste categories -->

            <!--section categories -->
            <section class="kl-sect-categories">
                <div class="container kl-container-1100" id="id-categories">
                    <?php if( have_rows('our_team') ):
                        $i=1; while( have_rows('our_team') ) : the_row(); ?>
                            <?php if ($i == 1 || $i == 3): ?>
                                <div class="row g-0 mb-5 Marketing">
                                    <div class="col-md-7 order-lg-1 order-md-1 order-2">
                                        <div class="kl-desc-wwa-team kl-border-right">
                                            <div class="kl-title-third kl-text-48 d-flex">
                                                <h2>
                                                    <?php the_sub_field('full_name'); ?>
                                                </h2>
                                                <div class="d-flex align-items-center kl-link-social">
                                                    <a href="<?php the_sub_field('email'); ?>" target="_blank">
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/mail.svg" alt="">
                                                    </a>
                                                    <a href="<?php the_sub_field('linkedin_link'); ?>" target="_blank">
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/linkedin.svg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="kl-function-team">
                                                <?php the_sub_field('job'); ?>
                                            </span>
                                            <div class="kl-content-text kl-text-16 mt-4">
                                                <?php the_sub_field('paragraph'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 order-lg-2 order-md-2 order-1 kl-arrow-down-funky">
                                        <div class="position-relative kl-img-team kl-decor-top">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/polkadots.svg" alt="" class="kl-decor">
                                            <div class="kl-img-mask kl-mask-yellow kl-left-mask kl-top-mask kl-decor-form-1">
                                                <?php if (get_sub_field('image')) {
                                                    $illu       = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                                                    $illu_url   = $illu[0];
                                                } ?>
                                                <img class="kl-mask" src="<?php echo $illu_url; ?>" alt="">
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="row g-0 mb-5 Communication">
                                    <div class="col-md-7 order-lg-2 order-md-2 order-2">
                                        <div class="kl-desc-wwa-team kl-border-left">
                                            <div class="kl-title-third kl-text-48 d-flex">
                                                <h2>
                                                    <?php the_sub_field('full_name'); ?>
                                                </h2>
                                                <div class="d-flex align-items-center kl-link-social">
                                                    <a href="<?php the_sub_field('email'); ?>" target="_blank">
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/mail.svg" alt="">
                                                    </a>
                                                    <a href="<?php the_sub_field('linkedin_link'); ?>" target="_blank">
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/linkedin.svg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="kl-function-team">
                                                <?php the_sub_field('job'); ?>
                                            </span>
                                            <div class="kl-content-text kl-text-16 mt-4">
                                                <?php the_sub_field('paragraph'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 order-lg-1 order-md-1 order-1">
                                        <div class="position-relative kl-img-team kl-decor-bottom">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/teams/Arrow-Curve2.svg" alt="" class="kl-decor">
                                            <div class="kl-img-mask kl-mask-blue kl-right-2-mask kl-top-2-mask">
                                                <?php if (get_sub_field('image')) {
                                                    $illu       = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                                                    $illu_url   = $illu[0];
                                                } ?>
                                                <img class="kl-mask" src="<?php echo $illu_url; ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php $i++; endwhile;
                    endif;?>
                    <span class="kl-empty-filterd d-none text-center">
                        <h4>No result</h4>
                    </span>
                </div>
            </section>
            <!--end section categories -->
    
<?php get_footer(); ?>