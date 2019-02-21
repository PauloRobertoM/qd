<?php get_header(); ?>

   <section class="topo-interna">
      <div class="bg-interna">
         <h1><?php the_title(); ?></h1>
      </div><!-- bg-interna -->
      <div class="container">
         <ol class="breadcrumb">
            <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
            <li class="active"><?php the_title(); ?></li>
         </ol>
      </div><!-- container -->
   </section><!-- topo-interna -->

   <?php $titPag = get_the_title();
   if ($titPag == "Quem Somos" || $titPag == "Tutoriais" || $titPag == "Avaliações") { ?>
      <section class="interna quem-somos">
         <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <p><?php the_content(); ?></p>
            <?php endwhile; else : ?>
               <p><?php _e( 'Nenhum post cadastrado até o momento' ); ?></p>
            <?php endif; ?>         
         </div><!-- container -->
      </section><!-- interna -->
   <?php } else { ?>
      <section class="interna quem-somos">
         <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('responsive-img responsive-img'); ?>
               <?php endif; ?>
               <p><?php the_content(); ?></p>
            <?php endwhile; else : ?>
               <p><?php _e( 'Nenhum post cadastrado até o momento' ); ?></p>
            <?php endif; ?>         
         </div><!-- container -->
      </section><!-- interna -->
   <?php } ?>
  
<?php get_footer(); ?>