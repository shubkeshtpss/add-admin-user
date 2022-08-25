<ul class="content_img_list">
            <?php 
            $args = array(
                'numberposts' => -1,
                'post_type'   => 'post_type',
                'post_status' => 'publish',

            );  
            $posts = get_posts( $args ); 
            foreach ($posts as $post) {     
                $image_url = get_the_post_thumbnail_url($post->ID,'thumbnail');
                
                ?>
                <li class="content_img_item"> 
                    <img src="<?php echo $image_url; ?>" alt="" class="img-fluid"> 
                    <div class="rollover_content" data-toggle="modal" data-target="#exampleModalCenter-<?php echo $post->ID; ?>"> 
                        <div href="" class="rollover_icon">
                            <span></span>
                        </div> 
                    </div> 
               
                <div class="modal fade custom-modal" id="exampleModalCenter-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                              ============
                            </div>
                        </div>
                    </div>
                </div>
             </li>
        </ul>

