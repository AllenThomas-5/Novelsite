<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package novelsite
 */

get_header();
?>


		<?php
		global $post;
		//$novel_post = the_ID();
		// echo '<pre>';
		// var_dump($post);
		// echo  '</pre>';

		
		// ------- To get the list of custom fields
		// $novel_post_meta = get_post_meta( $post->ID,'',true );
		// echo '<pre>';
		// var_dump($novel_post_meta);
		// echo  '</pre>';

		// ------ To get value of specific custom field 
		// $novel_post_meta = get_post_meta( $post->ID,'amazon_link',true ) ? get_post_meta( $post->ID,'amazon_link',true ):'www.amazon.ca';
		// echo '<pre>';
		// var_dump($novel_post_meta);
		// echo  '</pre>';

		// die;
		?>


<section>
        <div class="container">
			<div class="row">
				<div class="col-md-12 mt-4">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo $post->post_title ?></li>
						</ol>
					</nav>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title"><?php echo $post->post_title ?></h3>
                              <hr>
                              <?php echo $post->post_content ?>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                  <a class="cardblock-links" href="<?php echo get_post_meta( $post->ID,'amazon_link',true ) ? get_post_meta( $post->ID,'amazon_link',true ):'https://www.amazon.ca/'?>" target="_blank">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Buy From</div>
                        <div class="card-body">
                          <h5 class="card-title text-center">Amazon</h5>
                          <i class="fab fa-amazon"></i>
                        </div>
                      </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a class="cardblock-links" href="<?php echo get_post_meta( $post->ID,'audiobook_link',true ) ? get_post_meta( $post->ID,'audiobook_link',true ):'https://www.audible.ca/' ?>" target="_blank">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Hear From:</div>
                        <div class="card-body">
                          <h5 class="card-title text text-center">Audible</h5>
                          <i class="fab fa-audible"></i>
                        </div>
                      </div>
                    </a>   
                </div>
                <div class="col-md-4">
                  <a class="cardblock-links" href="<?php echo get_post_meta( $post->ID,'wikipedia_link',true ) ? get_post_meta( $post->ID,'wikipedia_link',true ):'https://www.wikipedia.org/' ?>"  target="_blank">
                    <div class="card bg-light mb-3">
                        <div class="card-header">More Info:</div>
                        <div class="card-body">
                          <h5 class="card-title text-center">Wikipedia</h5>
                          <i class="fab fa-wikipedia-w"></i>
                        </div>
                      </div>
                    </a>
                </div>
            </div>
        </div>
      
    </section>

<?php
get_footer();
?>