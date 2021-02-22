<?php
// Template Name: Sobre
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include (TEMPLATEPATH . "/include/introducao.php"); ?>

  <section class="conteudo-sobre fadeInDown" data-anime="1200">
    <div class="container">
      <div class="grid-10">
        <h3 class="subtitulo-interno">Historia, Missão e Visão</h3>
        <p><?php the_field('missao');  ?> </p>
        <p></p>
      </div>
      <div class="grid-6">
        <h3 class="subtitulo-interno">Valores</h3>
        <?php the_field('valores');  ?>
      </div>
      <div class="grid-16 equipe-bikcraft">
        <img src="<?php the_field('imagem_equipe');  ?>" alt="equipe-bikcraft">
      </div>
    </div>
  </section>
  <section class="qualidade container">
   <?php include (TEMPLATEPATH . "/include/qualidade.php"); ?>
 </section>
<?php endwhile; else: endif;?>
<?php get_footer(); ?>