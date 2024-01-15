<?php
    /*
        Template Name: Join Us
        ID Page: 14
    */
?>

<?php get_header(); ?>
            <!--section application-->
            <section class="kl-sect-application">
                <div class="container kl-container-1100 position-relative">
                    <div class="kl-title-secondary kl-mb-40 text-center">
                        <h2>Niyel <span class="kl-color-blue-primary">Application</span> Form</h2>
                    </div>
                </div>
            </section>
            <!--end section application -->
            <section class="kl-sect-request-form mb-4 mb-md-5">
                <div class="container kl-container-1100">
                    <div class="kl-request-list">
                        <?php
                        $allCareer = new WP_Query(array(
                            'ignore_sticky_posts'	=> true,
                            'update_post_meta_cache' => false,
                            'no_found_rows'		  => true,
                            'post_type'			  => 'career',
                            'orderby'				=> 'date',
                            'order'				  => 'DESC',
                            'posts_per_page'		 => -1,
                        ));
                        while ($allCareer->have_posts()) : $allCareer->the_post(); ?>
                            <div class="kl-request-items">
                                <div class="kl-request-item mb-5">
                                    <a href="#" class="kl-content-label">
                                        <svg class="kl-bg-svg" width="441" height="204" viewBox="0 0 441 204" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.60425 53.1314C8.62707 26.7422 31.1197 7.69985 57.7777 6.31438C101.972 4.01751 169.928 0.980957 220.32 0.980957C270.817 0.980957 338.949 4.03007 383.137 6.32861C409.662 7.7084 432.09 26.573 436.216 52.8117C438.81 69.3037 441 87.6526 441 102.593C441 117.508 438.817 135.821 436.229 152.292C432.1 178.57 409.619 197.448 383.052 198.79C338.863 201.022 270.785 203.981 220.32 203.981C169.96 203.981 102.059 201.035 57.8626 198.804C31.1634 197.456 8.6171 178.402 4.59187 151.973C2.09586 135.585 0 117.412 0 102.593C0 87.7491 2.10279 69.5406 4.60425 53.1314Z" fill="#EF8400"/>
                                        </svg>
                                        <svg class="kl-btn-svg" width="97" height="124" viewBox="0 0 97 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="kl-path" d="M32.9445 35.3057C54.2274 25.5058 75.9931 28.816 82.5282 42.8195C89.382 57.5061 77.2368 81.9145 58.9099 90.2351C44.1462 96.9566 17.8623 87.6938 10.4652 73.2637C4.47906 61.5019 15.1249 43.4702 32.9445 35.3057Z" fill="#F9B500"/>
                                            <path d="M32.2908 62.0095C32.147 62.0095 31.9313 61.8478 31.6437 61.5242C31.3561 61.2007 31.1764 60.949 31.1045 60.7693C31.0686 60.7334 31.0506 60.6615 31.0506 60.5536C31.0146 60.4817 30.9967 60.3918 30.9967 60.284C30.9967 60.1402 31.0146 60.0144 31.0506 59.9065C31.0506 59.8346 31.0686 59.7628 31.1045 59.6909C31.2483 59.4752 31.464 59.2235 31.7516 58.9359C32.0392 58.6484 32.2189 58.5046 32.2908 58.5046H43.8302C44.0459 56.6352 44.3335 54.712 44.693 52.7348C45.0884 50.7217 45.5557 48.7805 46.095 46.9112H46.742H47.3352C47.479 46.9831 47.6767 47.0909 47.9283 47.2347C48.18 47.3426 48.4316 47.4504 48.6833 47.5583C48.9349 47.6661 49.1506 47.7919 49.3303 47.9357C49.5101 48.0436 49.5999 48.1155 49.5999 48.1514V58.9359C50.2111 58.9359 50.984 58.8461 51.9186 58.6663C52.8533 58.4506 53.752 58.3428 54.6147 58.3428C55.5135 58.3068 56.2684 58.4686 56.8795 58.8281C57.4906 59.1516 57.7962 59.8526 57.7962 60.9311C57.7962 61.5422 57.5805 62.0095 57.1491 62.3331C56.7537 62.6566 56.2504 62.9082 55.6393 63.088C55.0281 63.2318 54.3811 63.3396 53.6981 63.4115C53.015 63.4475 52.35 63.5373 51.7029 63.6811C51.0918 63.789 50.5885 63.9867 50.1931 64.2743C49.7977 64.5259 49.5999 64.9034 49.5999 65.4066C49.5999 66.2694 49.7797 67.0782 50.1392 67.8332C50.5346 68.5881 50.948 69.325 51.3794 70.044C51.8467 70.763 52.2601 71.4999 52.6196 72.2548C52.9791 73.0097 53.1588 73.8186 53.1588 74.6813C53.1588 76.299 52.35 77.1078 50.7323 77.1078C49.9774 77.1078 49.2944 76.8922 48.6833 76.4608C48.0721 75.9934 47.5149 75.3823 47.0117 74.6274C46.5443 73.8725 46.1129 73.0277 45.7175 72.093C45.358 71.1584 45.0345 70.2237 44.7469 69.2891C44.4953 68.3185 44.2976 67.4018 44.1538 66.539C44.01 65.6403 43.9021 64.8854 43.8302 64.2743L32.2908 62.0095Z" fill="white"/>
                                            </svg>
                                        <div>
                                            <span>
                                                <?php the_title(); ?>
                                            </span>
                                            <div class="kl-group-timer">
                                                <div class="kl-timer-marker">
                                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/clock.svg" alt="">
                                                    <?php the_field('work_rate'); ?>
                                                </div>
                                                <div class="kl-timer-marker">
                                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/marker.svg" alt="">
                                                    <?php the_field('location'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </section>
            <!-- section form -->
            <section class="kl-section-form-appli">
                <div class="container kl-container-1100 position-relative">
                    <form action="">
                        <div class="kl-form-appli position-relative">
                            <svg class="kl-svg-step kl-animate-draw-svg-polyline kl-color-fushia-primary" id="Calque_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180.59 38.21"><defs><style>.cls-1{fill:#5762c7;}.cls-2{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:16px;}</style></defs><path class="cls-1" d="m72.68,35.63c-.31-.41-.6-.79-.95-1.24l-.51-.04c-.42-.93-1.49-1.04-2.07-1.86.08-.12.19-.29.33-.5-.26-.67-.36-1.43-.83-2.07-.23-.31-.32-.74-.47-1.11-.33-.85-.64-1.72-1-2.56-.54-1.25-1.12-2.47-1.67-3.71-.1-.23-.12-.48-.21-.71-.27-.7-.55-1.4-.83-2.11l-.57-.23.22-.4-1.52-2.5-.45.08.13-.6c-.25-.38-.51-.77-.67-1.01-.41-.27-.68-.45-1-.66-.64-.15-1.21.29-1.83.48-1.46.45-2.9.98-4.34,1.52-1.64.62-3.27,1.27-4.9,1.92-1.98.79-3.95,1.59-5.94,2.37-3.5,1.37-7.02,2.68-10.5,4.1-1.94.8-3.82,1.75-5.71,2.69-2.02,1.01-4,2.09-6.01,3.14-.44.23-.89.44-1.33.68-.39.22-.78.37-1.24.39-.42.02-.84.17-1.29.27-.4-.29-.11-.78-.32-1.26-.61-.56-1.78-.34-2.3-1.27.05-.44.37-.71.62-1.03.47-.6.91-1.25.55-1.99-.02-.95.63-1.26,1.22-1.62,1.31-.79,2.62-1.58,3.93-2.37.51-.31,1.02-.62,1.55-.9,1.46-.79,2.92-1.59,4.4-2.34,2.58-1.3,5.22-2.44,7.92-3.46,2.75-1.03,5.47-2.17,8.2-3.25,1.07-.43,2.14-.86,3.23-1.26,2.08-.76,4.18-1.5,6.26-2.26,2.29-.83,4.57-1.69,6.86-2.5.94-.33,1.91-.56,2.83-.83.59.3,1.16.59,1.77.89l.47-.53c.63.17,1.31.35,2.12.57l.37-.22.41.28-.53.55c.07.14.13.28.22.47l.48-.58c.16.09.42.13.46.25.24.62.85.9,1.19,1.42.57.86,1.16,1.72,1.7,2.61.34.56.6,1.16.88,1.75.26.55.49,1.11.73,1.66.04.09.07.18.12.26.59.76.83,1.68,1.18,2.55.34.83.83,1.6,1.25,2.4.03.05.12.09.12.14.11,1,.72,1.78,1.07,2.66.2.5.19,1.1.27,1.64l.52.31c1.46-.24,2.7-.99,4.04-1.51,1.22-.47,2.43-1.01,3.64-1.52,1.67-.7,3.34-1.42,5.02-2.11,1.45-.59,2.91-1.14,4.37-1.71,2.04-.8,4.11-1.53,6.11-2.42,2.32-1.03,4.69-1.9,7.03-2.85,1.36-.55,2.78-.93,4.15-1.46,1.66-.66,3.3-1.36,4.91-2.14,1.5-.72,3.08-1.22,4.59-1.9.68-.31,1.38-.58,2.11-.72.18-.04.37-.04.62-.06.37.8,1.12.65,1.83.71.11-.13.23-.28.37-.44.68.46,1.44.44,2.24.32.22.32.4.65.64.93.22.26.43.51.57.93.4.16.73.48,1,1,.44.83.88,1.66,1.21,2.54.12.32.28.63.42.95.12.28.24.56.41.81.1.52.18,1.03.3,1.54.17.77.43,1.53.52,2.31.04.4.22.62.41.83.09.74.15,1.44.28,2.12.12.62.32,1.22.5,1.9.12-.04.22-.07.31-.12.08-.04.15-.11.26-.18.15.09.31.19.49.3.33-.11.7-.2,1.04-.33,2.16-.83,4.32-1.66,6.47-2.52,1.31-.53,2.58-1.13,3.88-1.66,1.06-.43,2.18-.75,3.22-1.22,1.23-.55,2.51-.96,3.77-1.37,2.74-.89,5.38-2.03,8.07-3.03,1.08-.4,2.13-.91,3.21-1.31.95-.35,1.94-.61,2.97-.93-.03.22-.05.33-.07.46.35.19.69.38.96.53.66-.16,1.28-.3,1.85-.44.39.28.73.52,1.14.81-.1.4-.42.8-.55,1.27.27.17.55.35.74.47.33,0,.56-.01.8,0,.23.01.46.05.75.08-.41.79-.94,1.45-1.73,1.91-.98.57-1.93,1.17-2.89,1.77-.18.12-.35.26-.51.41-.68.61-1.32,1.27-2.03,1.84-.49.39-1.05.69-1.59,1-1.55.9-3.23,1.53-4.89,2.19-1.86.74-3.71,1.53-5.59,2.23-1.35.5-2.75.83-4.11,1.3-1.66.58-3.28,1.24-4.93,1.83-2.18.78-4.38,1.51-6.55,2.3-1.09.39-2.19.73-3.33.9-.91.13-1.73.53-2.57.85-.88.33-1.73.73-2.62,1.02-.4.13-.86.08-1.37.11.14-.28.22-.46.34-.72-.91-.05-1.52-.56-2.1-1.14-.24-.24-.55-.41-.8-.65-.25-.23-.46-.5-.7-.75.28-.15.49-.28.76-.43-.2-.26-.35-.46-.53-.7-.01-.3-.03-.65-.04-1-.47-.83-.73-1.71-.78-2.67-.02-.31-.05-.72-.24-.89-.48-.42-.32-.91-.37-1.37-.2-.66-.4-1.31-.6-1.97l.11-.04c-.1-.12-.21-.23-.34-.38v-.88c-.37-.63-.57-1.23-.6-1.8-.4-.78-.79-1.54-1.2-2.32-.9.16-1.72.43-2.51.83-3.45,1.76-7,3.24-10.64,4.55-2.83,1.02-5.58,2.24-8.36,3.39-2.66,1.1-5.29,2.3-8.01,3.26-1.71.6-3.36,1.39-5.04,2.07-2.58,1.05-5.18,2.07-7.75,3.14-1.13.47-2.21,1.04-3.33,1.55-.83.38-1.65.76-2.5,1.07-.43.16-.91.16-1.3.22h.01Z"/><polyline class="cls-2" points="8 30.21 65.22 8 76.14 30.21 128.09 8 132.61 28.33 172.59 10.14"/></svg>
                            <div class="kl-form-appli-controls">
                                <a href="#" class="kl-prev-form kl-disabled">
                                    <svg width="39" height="13" viewBox="0 0 39 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0204 0.665929L15.5907 1.5341C15.834 2.49493 15.5803 3.49479 14.9176 4.48001C15.1298 4.52391 15.2852 4.58244 15.4457 4.58732C17.1751 4.67999 18.9045 4.78729 20.6391 4.84094C23.3627 4.92385 26.0915 4.9775 28.8151 5.03603C31.0778 5.08481 33.3457 5.11895 35.6085 5.16772C36.1159 5.17748 36.6285 5.19699 37.1308 5.26527C37.8246 5.35794 38.3476 5.7969 39 6.03101L38.767 6.53826C37.7366 7.32839 36.6182 7.26986 35.4946 7.27473C33.7858 7.28449 32.0823 7.3674 30.3736 7.38691C27.6707 7.42105 24.9679 7.44056 22.2702 7.45032C19.5932 7.4552 16.9162 7.43569 14.2392 7.42593C13.913 7.42593 13.5817 7.42593 13.0949 7.42593C13.3072 7.61615 13.3849 7.72345 13.4936 7.78198C13.8664 7.98683 14.2444 8.19168 14.6328 8.36726C15.3266 8.67941 15.9531 9.05984 16.3104 9.81583L15.7098 9.89875L15.4043 9.7573C15.3525 9.72316 15.3007 9.68902 15.3629 9.72804C15.2852 9.71829 15.3577 9.72804 15.425 9.73779L15.7201 9.88899C16.0049 10.0646 16.2897 10.2402 16.6211 10.445L16.269 10.7815C15.3525 10.4255 14.5965 9.82071 13.5351 9.56709C13.7525 9.88411 14.0373 9.91826 14.2444 10.0451C14.4826 10.1865 14.7363 10.2987 14.9797 10.4255C15.2282 10.5523 15.4664 10.684 15.7201 10.8011C15.9635 10.9181 16.2172 11.0254 16.4968 11.1522L16.4036 11.5327C16.0619 11.7131 15.8237 11.5766 15.5751 11.44C14.8451 11.0449 14.115 10.6547 13.3849 10.2645C13.1519 10.1426 12.9241 9.9524 12.5823 10.0743C12.6496 10.406 12.9241 10.5474 13.1778 10.6742C14.0011 11.0986 14.8399 11.5034 15.6735 11.918C15.7823 11.9716 15.8858 12.035 16.0049 12.0984C15.8755 12.6398 15.4612 12.4008 15.1454 12.3959L15.0211 12.8203C14.1616 13.1129 13.3694 13.0495 12.5564 12.6203C10.6872 11.6351 8.76102 10.762 6.73646 10.0938C5.60767 9.72316 4.47371 9.36712 3.32422 9.05497C2.06599 8.71355 0.978622 8.15753 0.155338 7.11866C0.103557 6.69433 0.0517803 6.22123 3.40154e-06 5.77739C0.129448 5.42622 0.305496 5.09456 0.362453 4.74827C0.455658 4.21664 0.792221 3.93863 1.29448 3.81669C2.1799 3.60697 3.0705 3.407 3.97145 3.24605C5.02257 3.05583 6.07886 2.91926 7.09373 2.57785C8.16038 2.2218 9.14936 1.73895 10.0555 1.10977C10.915 0.509854 11.8574 0.18795 12.9241 0.0318745C13.592 -0.0656724 14.115 0.0660159 14.6845 0.353779L15.2955 0.0952797L15.6528 0.378166L15.4198 0.836637L16.0256 0.651297L16.0256 0.64642L16.0204 0.665929ZM11.7435 9.74267L11.9247 9.85485L11.9403 9.79144L11.7228 9.7573L11.4121 9.61586L10.8063 9.18178L10.7183 9.32322L11.4225 9.60611L11.7383 9.74267L11.7435 9.74267ZM10.9565 8.45993C10.7442 8.26971 10.5215 8.11364 10.2057 8.16729L9.8898 8.03072L9.85356 8.1429L10.2005 8.17217C10.4179 8.37214 10.6613 8.50382 10.9772 8.44042L11.0134 8.50383L10.9565 8.45993ZM12.1577 3.90937C12.6186 4.21176 12.893 4.02154 13.1053 3.86059C13.68 3.42651 14.493 3.21678 14.6587 2.35349L12.1577 3.91424L12.1577 3.90937ZM1.1495 5.0214C1.47743 5.18398 1.74495 5.17097 1.95207 4.98238C1.67246 4.99701 1.48088 5.00677 1.1495 5.0214ZM2.87374 4.74827L2.79607 4.87996L3.22066 4.99214L3.25173 4.90434L2.87374 4.74827Z" fill="white"/>
                                    </svg>
                                </a>
                                <a href="#" class="kl-next-form">
                                    <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.459 2.86818C28.1883 2.67918 27.9228 2.49543 27.626 2.28543L27.9957 2.24343L28.3081 2.39568C28.3393 2.43768 28.3601 2.49543 28.4018 2.51118C30.12 3.28293 31.8433 4.05468 33.5667 4.81593C33.6292 4.84218 33.7281 4.78968 34.0041 4.73718C33.6344 4.57968 33.4366 4.49043 33.2387 4.40643C32.7441 4.20168 32.2443 4.01268 31.7496 3.80268C30.7395 3.36693 29.7399 2.92068 28.7298 2.48493C28.5996 2.42718 28.4382 2.43243 28.2924 2.41143C28.2716 2.18568 28.1154 2.24343 27.98 2.25918C27.9228 2.19093 27.8759 2.09643 27.803 2.05968C27.1626 1.73943 26.517 1.42968 25.8766 1.10943C25.6891 1.01493 25.46 0.941431 25.3871 0.579181C26.1265 0.731431 26.6784 1.16718 27.3344 1.33518C27.0116 0.852181 26.3608 0.831181 25.9234 0.353431C26.6159 0.190681 27.1886 0.0436807 27.8238 0.379681C29.6409 1.34043 31.5257 2.14893 33.4834 2.75793C34.5352 3.08343 35.5973 3.35643 36.6543 3.66093C37.0656 3.78168 37.4717 3.92343 37.7476 4.00743C38.034 4.49043 38.2683 4.81593 38.4297 5.18343C38.5286 5.40393 38.5703 5.68218 38.5338 5.91843C38.4141 6.62193 37.9976 7.12593 37.404 7.49868C36.6282 7.98168 35.7483 8.17593 34.9048 8.46468C33.3793 8.98443 31.8329 9.45168 30.3282 10.0292C29.3286 10.4124 28.3705 10.9217 27.4229 11.4204C26.6315 11.8352 25.8818 12.3392 25.0956 12.7697C24.8613 12.8957 24.5749 12.9219 24.3042 12.9849C24.0438 13.0427 23.7783 13.0847 23.4867 13.1424C23.6377 12.6804 23.6429 12.6857 24.351 12.2604C24.7103 12.0452 25.1372 11.9139 25.46 11.4624C24.8144 11.4467 24.4864 11.9087 24.0334 12.0767C23.57 12.2499 23.242 12.6909 22.6485 12.8012C22.7526 12.4074 23.0077 12.3077 23.2368 12.1712C23.8564 11.8089 24.4708 11.4414 25.0852 11.0634C25.2518 10.9637 25.4809 10.8849 25.3455 10.5174C24.7467 10.7117 24.2573 11.1159 23.721 11.4204C23.19 11.7249 22.737 12.2184 21.8987 12.1554L22.3309 11.4257L22.6224 11.2524L23.091 10.9479C23.3253 10.9637 23.4763 10.8587 23.5492 10.6277C23.8772 10.5962 24.1428 10.4544 24.3094 10.1552C24.3823 10.1447 24.4552 10.1342 24.3562 10.1499C24.4343 10.0869 24.3823 10.1289 24.325 10.1762C24.0126 10.2392 23.7262 10.3442 23.5596 10.6434L23.091 10.9427L22.6381 11.2629L22.3152 11.3994L21.9716 11.3207C22.1851 10.8429 22.612 10.7012 22.9609 10.4754C23.3253 10.2392 23.7002 10.0239 24.049 9.75618C23.3201 9.81393 22.8411 10.4807 22.0081 10.6434C22.7318 9.55143 23.7523 9.02118 24.6947 8.42268C24.6166 8.08668 24.3667 8.16543 24.1896 8.16543C23.216 8.14443 22.2424 8.14968 21.2687 8.13393C19.3214 8.09718 17.3794 8.06043 15.4321 8.00793C15.2134 8.00268 15 7.90293 14.7813 7.85043L14.7657 7.80318L14.7917 7.84518C14.6199 8.15493 14.3335 8.00268 14.1044 8.00268C12.001 8.01318 9.89748 8.00793 7.79922 8.00268C6.1331 8.00268 4.46698 8.01318 2.81649 8.27043C2.30103 8.34918 1.82202 8.16018 1.34822 7.97118C1.42632 7.53543 1.82723 7.78218 2.02508 7.57743L1.24409 7.51968L1.23368 7.44618C1.90012 7.33068 2.56657 7.21518 3.23302 7.09968C2.4364 6.73218 1.66062 7.21518 0.806732 7.04193L1.31177 6.67443L0.718223 6.34368L1.43674 6.07068L1.19202 5.91318C1.41591 5.57193 1.72831 5.41968 2.12922 5.35668C3.80054 5.09418 5.48227 4.87893 7.17442 4.91568C10.4494 4.98393 13.7295 5.07318 17.0045 5.17293C18.8997 5.23068 20.7949 5.33568 22.6901 5.40918C25.1737 5.50368 27.6572 5.58768 30.1408 5.67168C30.3334 5.67693 30.5261 5.64543 30.75 5.49843C30.5573 5.39868 30.3699 5.29893 30.1772 5.20443C28.7558 4.49043 27.3344 3.77643 25.913 3.07293C25.4757 2.85768 25.1581 2.56368 25.1008 1.98618L25.8505 2.10693L26.1161 2.31168L26.7773 2.56893L26.7877 2.63718L26.8398 2.58993L26.7721 2.57943L26.189 2.23293L25.8505 2.11218C25.5954 1.92843 25.3351 1.74468 25.08 1.56093L25.1164 1.45593C25.2153 1.47168 25.3247 1.46643 25.4132 1.50843C26.2202 1.90218 27.0168 2.31168 27.8238 2.70018C28.0217 2.79468 28.256 2.82618 28.4747 2.88393L28.7923 3.02568L28.8339 3.09393L28.7714 3.04668L28.4695 2.88918L28.459 2.86818ZM14.1305 7.21518L13.9795 7.05768L13.8233 6.90543L13.6671 6.74793L13.641 6.70593L13.6827 6.73218L13.8337 6.88968L13.9899 7.04193L14.1357 7.20468L14.1513 7.25193L14.12 7.21518L14.1305 7.21518ZM12.8965 5.97093L12.7455 5.81343L12.5893 5.66118L12.4331 5.50893L12.4071 5.46693L12.4487 5.49318L12.6049 5.64543L12.7611 5.79768L12.9069 5.96043L12.9225 6.00768L12.8965 5.97093ZM26.9804 9.93993C28.1102 9.61443 29.5004 8.93193 30.1148 8.35968C28.9433 8.82168 27.8707 9.11568 26.9804 9.93993ZM5.33649 6.78468L5.33649 6.86343L7.21608 6.86343L7.21608 6.78468L5.33649 6.78468ZM36.774 5.52468L36.2117 5.52468C36.3835 5.76093 36.5137 5.85543 36.774 5.52468ZM37.6695 5.94993L37.6695 5.85018L37.3467 5.85018L37.3467 5.96568L37.6695 5.94993Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="kl-form-appli-body">
                                <div class="kl-form-page kl-page-1 kl-active">
                                    <label class="kl-field-label"><span>1.</span>Email</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" id="id-lorem-1" placeholder="Lorem">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-2">
                                    <label class="kl-field-label"><span>2.</span>Phone number</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-12">
                                            <input type="tel" class="form-control" id="id-lorem-1" placeholder="Lorem">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-3">
                                    <label class="kl-field-label"><span>3.</span>Last Name & First name</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="id-last-name" placeholder="Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="id-first-name" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-4">
                                    <label class="kl-field-label"><span>4.</span>Job</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-12">
											<input type="text" class="form-control" id="id-job" placeholder="Your job">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-5">
                                    <label class="kl-field-label"><span>5.</span>Location</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-12">
											<input type="text" class="form-control" id="id-location" placeholder="Your location">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-6">
                                    <label class="kl-field-label"><span>6.</span>Lorem ipsum</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-6">
											<input type="text" class="form-control" id="id-text-1" placeholder="Lorem">
                                        </div>
                                        <div class="col-md-6">
											<input type="text" class="form-control" id="id-text-2" placeholder="Ipsum">
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <a href="#"class="kl-btn-default">
                                            Next
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="kl-form-page kl-page-6">
                                    <label class="kl-field-label"><span>7.</span>Message</label>
                                    <div class="row kl-gx-12 gy-3">
                                        <div class="col-md-12">
											<textarea class="form-control" id="id-message" placeholder="Your message" style="height:125px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="kl-form-footer text-end">
                                        <span>Press ENTER</span>
                                        <button href="#"class="kl-btn-default">
                                            Send
                                            <img class="ms-2" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/Arrow-Curve2.svg" alt="arrow icon">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="kl-form-appli-wrapper-progressbar">
                                <p class="kl-form-appli-progressbar-title">
                                    <span class="kl-step-current"></span>/<span class="kl-step-page-count">16</span>
                                </p>
                                <div class="kl-form-appli-progressbar">
                                    <span class="kl-form-appli-progressbar-text"></span>
                                    <div class="kl-form-appli-progressbar-percentage">
                                        <span class="kl-form-appli-progressbar-active"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php echo do_shortcode('[gravityform id="1" ajax="true" title="false" description="false"]'); ?>
                    <img class="kl-decor-form" src="<?php bloginfo('template_directory'); ?>/assets/images/join_us/polka-dots.svg" alt="decor">
                </div>
            </section>
            <!-- end section form -->
    
<?php get_footer(); ?>