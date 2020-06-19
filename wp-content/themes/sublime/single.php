<?php get_header(); ?>
<div class="banner-blog">
    
	
  </div>
  <section class="blog-single">
    <div class="container">
      <div class="row">
      <?php while (have_posts() ) : the_post(); ?>
        <div class="col-12 d-md-none">
          <form action="#" class="search-form">
            <div class="form-group">
              <a class="icon fa fa-search" href="#"></a>
              <input class="form-control" placeholder="Buscar" type="text">
            </div>
          </form>
        </div>
      <div class="col-md-8 order-md-last">
            <h2 class="col-md-8 order-md-last"><?php the_title(); ?></h2>
          <div class="content-post">  
          <p><?php the_content();?></p>
        </div>
         <?php endwhile; ?>
      </div>
      <div class="col-md-4 sidebar">
        
<div class="sidebar-box">
  <form action="<?php echo bloginfo('url'); ?>" class="search-form d-none d-md-block">
    <div class="form-group">
      <a class="icon fa fa-search" href="#"></a>
      <input class="form-control" placeholder="Buscar" type="text" name="s">
    </div>
  </form>
</div>
<div class="sidebar-box">
  <h3 class="sidebar-subtitles">Categorías</h3>
  <div class="categories">
  <?php $args = array(
      
    'orderby' => 'slug',
    'order' => 'ASC'
    );
    $product_categories = get_terms('category', $args);
    $count = count($product_categories);

    foreach ($product_categories as $product_category) {?>
      <li>
        <a href="<?php echo $url_category = get_term_link( $product_category ) ?>">
          <?php echo $product_category->name; ?>
          <span><?php echo numero_total_post($product_category->term_id); ?></span>
        </a>
      </li>
    <?php  } ?>
  </div>
</div>
<div class="sidebar-box">
  <h3 class="sidebar-subtitles">Posts recientes</h3>
  <?php $args = array( 'post_type' => 'post',
      'posts_per_page' => 3); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="block-21 mb-4 d-flex">
        <div class="text">
          <h3 class="heading">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="meta">
            <div>
              <a href="<?php the_permalink(); ?>">
                <span class="fa fa-calendar"></span>
                <?php echo get_the_time('M j Y'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>  
</div>



      </div>
     </div>      
   </div>
  </section>
  <?php get_footer(); ?>