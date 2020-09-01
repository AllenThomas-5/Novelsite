<?php 
     /**
    * Template Name: HOME
    * The template for displaying Novelsite HOMEPAGE.
    * @package novelsite
    * @subpackage novlesite 1.0.0
    * @since novelsite 1.0.0
    */

?>

<?php 

$args_novelposts = array(
    'post_type' => 'novel',
    'posts_per_page'   => -1,
    'order' => 'ASC',
    'post_status' => 'publish'
   );

   $novel_posts = query_posts($args_novelposts);

   	// echo '<pre>';
    //  var_dump($novel_posts);
    //  echo  '</pre>';
    
    //  foreach ($novel_posts as $novel_post) {
        // --------- To get the featured image of the custom post
        // $novel_featured_image = get_the_post_thumbnail_url( $novel_post->ID, 'medium' ); 
        // echo '<pre>';
        //  var_dump($novel_featured_image);
        // echo  '</pre>';

        // -----  To get links of each novel post
        // $novel_post_link = get_post_permalink($novel_post->ID);
        // echo '<pre>';
        //  var_dump($novel_post_link);
        // echo  '</pre>';
    //  }

     
    
    //  die;
	

?>

 <?php get_header();  ?>

 <section>
        <!-- Tagline Section -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Fanatasy Novels You Ought To Read</h1>
              <p class="lead">Fantasy is a genre of speculative fiction set in a fictional universe, often inspired by real world myth and folklore. Its roots are in oral traditions, which then became fantasy literature and drama.</p>
            </div>
          </div>
    </section>

    <section>
   <!-- Books in Card Format -->
        <div class="container">
            <div class="row">
                <?php foreach ($novel_posts as $novel_post) { ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid text-center" style="" src="<?php echo get_the_post_thumbnail_url( $novel_post->ID, 'medium' ); ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $novel_post->post_title ?></h4>
                            <p class="card-text"><?php echo $novel_post->post_excerpt ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo get_post_permalink($novel_post->ID); ?>" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

 <?php get_footer(); ?>
