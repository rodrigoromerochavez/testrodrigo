<?php get_header(); 

 $max_mean = 4;
 $section_html = '<section class="menu">
                	<div class="wrapper">
                    	<div class="menu_title">
                                <h2>The Menu</h2>
                    	</div>
                         %s
                         %s
                         %s
                    </div>   
            </section>' ; // first %s $menu_mean, $menu_hide/blank, and $load_more/blank 

 $menu_hide = '<div class="hidden_items">
 				%s
 			   </div>'; // left and right items
 $menu_mean= '<div class="mean_menu">
 				%s
 			   </div>'; // left and right items
 $article = '<article class="lmenu">
                            <ul>
                                %s
                            </ul>
                        </article>

                        <!--  right menu row  -->
                        <article class="rmenu">
                            <ul>
                                %s
                            </ul>
                        </article>'; //first letf, second right
 $item_info = '<li>
                            <div class="item_info">
                                <h3 class="item_name">%s</h3>
                                    <p class="item_desc">%s</p>
                            </div>
                            <h4 class="price">%s</h4>
                            <span class="separator"></span>
              </li>';
$load_more = '<div class="load-more">
                         <a href="#" id="more_items">
                             show more
                             <hr/>
                             <span class="down_arrow"></span>
                         </a>
               </div> ';

?>
                    
    <?php $iterate = 0; 
    	  $item_info_mean_right="";
    	  $item_info_mean_left="";
    	  $item_info_hide_right="";
    	  $item_info_hide_left="";
    	  $article_menu_hide="";
    	  $article_menu_mean="";
    ?>
	<?php while(have_posts()) : the_post();  ?>
		<?php $count_posts = wp_count_posts()->publish; 
			ob_start();
			the_content();
			$content = ob_get_clean();
			$dish_day = explode(";",$content);

			//left

			$left_dish_name="";
			$left_dish_desc="";
			$left_dish_price ="";
			//right
			$right_dish_name = "";
			$right_dish_desc = "";
			$right_dish_price ="";
			if(isset($dish_day[0]))
				$left_dish_name=$dish_day[0]; // left dish name
			if(isset($dish_day[1]))
				$left_dish_desc=$dish_day[1]; // left dish desc
			if(isset($dish_day[2]))
				$left_dish_price = $dish_day[2]; // left dish price
			if(isset($dish_day[3]))
				$right_dish_name = $dish_day[3]; // right dish name
			if(isset($dish_day[4]))
				$right_dish_desc = $dish_day[4]; // right dish desc
			if(isset($dish_day[5]))
				$right_dish_price = $dish_day[5]; // right dish price
		
		 ?>
		    <?php if($iterate <= $max_mean): 
		    	$item_info_mean_left=$item_info_mean_left.
		    	sprintf($item_info,$left_dish_name ,$left_dish_desc, $left_dish_price);

		    	$item_info_mean_right=$item_info_mean_right.
		    	sprintf($item_info,$right_dish_name ,$right_dish_desc, $right_dish_price);
		    ?>
            <?php else: 
 				$item_info_hide_left=$item_info_hide_left.
		    	sprintf($item_info,$left_dish_name ,$left_dish_desc, $left_dish_price);
		    	$item_info_hide_right=$item_info_hide_right.
		    	sprintf($item_info,$right_dish_name ,$right_dish_desc, $right_dish_price);
                ?>
            <?php endif; ?>
            <?php $iterate =$iterate + 1; ?>
		<?php endwhile; 
			$article_menu_mean = sprintf($article,$item_info_mean_left,$item_info_mean_right);
			$menu_mean =sprintf($menu_mean,$article_menu_mean);
			if($iterate > $max_mean )
			{
				$article_menu_hide = sprintf($article,$item_info_hide_left,$item_info_hide_right);
				$menu_hide =sprintf($menu_hide,$article_menu_hide);
				$section_html = sprintf($section_html,$menu_mean,$menu_hide,$load_more);

			}
			else
			{
				$article_menu_hide = sprintf($article,$item_info_hide_left,$item_info_hide_right);
				$menu_hide =sprintf($menu_hide,$article_menu_hide);
				$section_html = sprintf($section_html,$menu_mean,"","");
			}
            echo $section_html ;

		?>
		
<?php get_footer(); ?>
