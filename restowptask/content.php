<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage restowptast
 * @since aa
 */
?>
 <?php post_class(); ?>
 <?php $count_posts = wp_count_posts()->publish; 
			ob_start();
			the_content();
			$content = ob_get_clean();
			$dish_day = explode(";",$content);
			
			/*
			$dish_day[0]; // left dish name
			$dish_day[1]; // left dish desc
			$dish_day[2]; // left dish price

			$dish_day[3]; // right dish name
			$dish_day[4]; // right dish desc
			$dish_day[5]; // right dish price
			*/
		 ?>
		    <?php if($iterate < 5): ?>
		    		<div class="mean_menu">
					    <article class="lmenu">
                            <ul>
                                <li>
                                    <div class="item_info">
                                        <h3 class="item_name"><?php if(isset($dish_day[0])) echo $dish_day[0];  ?></h3>
                                        <p class="item_desc"><?php if(isset($dish_day[1])) echo $dish_day[1];  ?></p>
                                    </div>
                                    <h4 class="price"><?php if(isset($dish_day[2])) echo $dish_day[2];  ?></h4>
                                 <span class="separator"></span>
                                </li>

                            </ul>
                        </article>

                        <!--  right menu row  -->
                        <article class="rmenu">
                            <ul>
                                <li>
                                    <div class="item_info">
                                        <h3 class="item_name"><?php if(isset($dish_day[3])) echo $dish_day[3];  ?></h3>
                                        <p class="item_desc"><?php  if(isset($dish_day[4])) echo $dish_day[4];  ?></p>
                                    </div>
                                    <h4 class="price"><?php if(isset($dish_day[5])) echo $dish_day[5]; ?></h4>
                                 <span class="separator"></span>
                                </li>
                            </ul>
                        </article>

            <?php elseif($count_posts == $iterate && $count_posts <5): ?>
            		</div>
            <?php else: ?>
 					</div>
            	<div class="hidden_items">
                        <!--  left menu row  -->
                        <article class="lmenu">
                            <ul>
                                <li>
                                    <div class="item_info">
                                        <h3 class="item_name"> <?php if(isset($dish_day[0])) echo $dish_day[0];  ?> </h3>
                                        <p class="item_desc"> <?php if(isset($dish_day[1])) echo $dish_day[1];  ?> </p>
                                    </div>
                                    <h4 class="price"><?php if(isset($dish_day[2])) echo $dish_day[2];  ?></h4>
                                 <span class="separator"></span>
                                </li>

                            </ul>
                        </article>

                        <!--  right menu row  -->
                        <article class="rmenu">
                            <ul>
                                <li>
                                    <div class="item_info">
                                        <h3 class="item_name"><?php if(isset($dish_day[3])) echo $dish_day[3];  ?></h3>
                                        <p class="item_desc"><?php  if(isset($dish_day[4])) echo $dish_day[4];  ?></p>
                                    </div>
                                    <h4 class="price"><?php if(isset($dish_day[5])) echo $dish_day[5]; ?></h4>
                                 <span class="separator"></span>
                                </li>
                            </ul>
                        </article>
                </div>
                <?php endif; ?>
            