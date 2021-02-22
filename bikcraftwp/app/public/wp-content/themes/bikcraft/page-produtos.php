<?php
// Template Name: Produtos
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include (TEMPLATEPATH . "/include/introducao.php"); ?>

<?php
	$args = array (
		'post_type' => 'produtos',
		'order'   => 'ASC'
	);
	$the_query = new WP_Query ( $args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<section class=" container produto-item fadeInDown" data-anime="1200">
<a href="<?php the_permalink();?>">
      <div class="grid-11">
        <img src="<?php the_field('foto_produto1');?>" alt="<?php the_title();?>">
        <h2 class="produto-h2"><?php the_title();?></h2>
      </div>
      <div class="grid-5 icon-prod">
        <img src="<?php the_field('icone_produto');?>" alt="<?php the_title();?>">
      </div>
      </a>
</section>
<?php endwhile; else: endif; ?>
<?php wp_reset_query(); wp_reset_postdata(); ?>

<?php include (TEMPLATEPATH . "/include/produtos_orcamento.php"); ?>

  <?php endwhile; else: endif;?>
  <?php get_footer(); ?>
