<?php
// Template Name: portifolio
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include (TEMPLATEPATH . "/include/introducao.php"); ?>

  <div class="container fadeInDown" data-anime="1200" data-slide="quote">
    <blockquote class="quote_clientes">
      <p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta
        atividade. Recomendo à todos que amo.”</p>
      <cite>Barbara Moss</cite>
    </blockquote>
    <blockquote class="quote_clientes">
      <p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me
        traiu e está sempre a minha disposição.”</p>
      <cite>Jhony Rato</cite>
    </blockquote>
    <blockquote class="quote_clientes">
      <p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a
        velocidade transcendental. Nunca vida nada igual.”</p>
      <cite>Bernardo</cite>
    </blockquote>
  </div>


  <!--ABRE PORTIFOLIO -->
  <div class="portifolio fadeInDown" data-anime="1600">
    <div class="container" data-slide="portifolio">
    <?php include (TEMPLATEPATH . "/include/clientes_portifolio.php"); ?>
    </div>
  </div>
  <?php endwhile; else: endif;?>
  <?php get_footer(); ?>