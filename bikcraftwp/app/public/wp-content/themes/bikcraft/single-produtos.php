<?php
// Template Name: Single Produtos
get_header();
$contato = get_page_by_title('contato');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="produto-item fadeInDown" data-anime="1200">
    <div class="container">
      <div class="grid-11">
        <img src="<?php the_field('foto_produto1');?>" alt="<?php the_title();?>">
        <h2 class="produto-h2"><?php the_title();?></h2>
      </div>
      <div class="grid-5 icon-prod">
        <img src="<?php the_field('icone_produto');?>" alt="<?php the_title();?>">
      </div>
      <div class="grid-8">
        <img src="<?php the_field('foto_produto2');?>" alt="<?php the_title();?>">
      </div>
      <div class="grid-8 produto-info">
          <?php the_content();?>
      </div>
    </div>
  </section>
  <?php include (TEMPLATEPATH . "/include/produtos_orcamento.php"); ?>

  <?php endwhile; else: endif;?>
  <?php get_footer(); ?>
