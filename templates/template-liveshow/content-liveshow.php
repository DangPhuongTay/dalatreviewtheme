<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <?php global $product; ?>
        <section class="detail__liveshow">
            <div class="detail__liveshow--ticket__box">
                <div class="detail__liveshow--ticket">
                    <div class="detail__liveshow--ticket__left">
                        <div class="detail__liveshow--ticket__left--top">
                            <div class="detail__liveshow--ticket__left--title">
                                <?php the_title(); ?>
                            </div>
                            <div class="detail__liveshow--ticket__left--time">
                                <ion-icon name="calendar-clear-outline"></ion-icon>
                                <?php
                           
                                foreach ($product->attributes as $taxonomy => $attribute) {
                                   
                                   foreach ($attribute->get_terms() as $term) {
                                       if($term ->taxonomy == 'pa_thoi-gian'){
                                     echo $term->name ;
                                           }else{
                                       echo '';
                                   }
                                   }
                                } ?>
                            </div>
                            <div class="detail__liveshow--ticket__left--local">
                                <ion-icon name="location-outline"></ion-icon>
                                <p>
                                    <?php
                           
                                    foreach ($product->attributes as $taxonomy => $attribute) {
                                       
                                       foreach ($attribute->get_terms() as $term) {
                                           if($term ->taxonomy == 'pa_dia-diem'){
                                         echo $term->name ;
                                               }else{
                                           echo '';
                                       }
                                       }
                                    } ?>
                                    <br>
                                    <?php
                                    
                                    foreach ($product->attributes as $taxonomy => $attribute) {
                                       
                                       foreach ($attribute->get_terms() as $term) {
                                           if($term ->taxonomy == 'pa_dia-chi'){
                                         echo $term->name ;
                                         
                                               }else{
                                           echo '';
                                       }
                                       }
                                    } ?>
                                </p>
                            </div>
                        </div>

                        <div class="detail__liveshow--ticker__left--bottom">
                            <div class="detail__liveshow--ticket__left--price">
                                <p><?php echo $product->get_price_html(); ?></p>
                            </div>
                            <!-- <div class="detail__liveshow--ticket__left--btn">
                            MUA NGAY
                        </div>  -->
                        </div>
                    </div>
                    <div class="detail__liveshow--ticket__right">
                        <img src=" <?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="detail__liveshow--container">
                <div class="detail__liveshow--content">
                    <div class="detail__liveshow--content__left shadow">
                        <div class="detail__liveshow--content__left--header">
                            Mô tả
                        </div>
                        <div class="detail__liveshow--content__left--body">
                            <?php echo $product->get_description (); ?>
                        
                        </div>
                    </div>
                    <div class="detail__liveshow--content__right shadow">
                        <div class="detail__liveshow--content__left--header">
                            Danh sách vé
                        </div>
                        <?php 

                    get_template_part('templates/template-liveshow/item','detailliveshow');  
?>
                    </div>
                </div>
            </div>

        </section>

        <?php

    }
}
get_footer();?>