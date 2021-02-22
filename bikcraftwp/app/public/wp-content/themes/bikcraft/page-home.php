<?php
// Template Name: Home
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 <?php
  $imagem_id = get_field('background_home');
  $background_large = wp_get_attachment_image_src( $imagem_id, 'large' );
  $background_medium = wp_get_attachment_image_src( $imagem_id, 'medium');
  ?>
<style>
  .introducao {
    background: url("<?php echo $background_large[0] ?>") no-repeat center;
  }
  @media only screen and (max-width: 787px) {
    .introducao {
      background: url("<?php echo $background_medium[0] ?>") no-repeat center;
  }
  }
</style>
  <!--INTRODUCAO-->
  <section class="introducao " id="intro">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown anime">  <?php the_field('titulo_introducao')?></h1>
      <blockquote class="quote-externo fadeInDown" data-anime="800">
        <p>
        <?php the_field('quote_introducao')?>
        </p>
        <cite><?php the_field('citacao_introducao')?></cite>
      </blockquote>
      <a data-anime="1200" href="/bikcraftwp/produtos/" class="btn">Orçamento</a>
    </div>
  </section>
  <!--FECHA INTRODUCAO-->
  <!--ABRE PRODUTOS-->
  <section class="container produtos fadeInDown" data-anime="1600">
    <h2 class="subtitulo">Produtos</h2>
    <ul class="produtos_lista">
    <?php
          $args = array (
            'post_type' => 'produtos',
            'order'   => 'ASC'
          );
          $the_query = new WP_Query ( $args );
      ?>

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <li class="grid-1-3">
        <div class="img-prod">
          <img src="<?php the_field('icone_produto'); ?>" alt="passeio-imagem" />
        </div>
        <div class="produtos_desc">
          <h3><?php the_title(); ?></h3>
          <p>
            <?php the_field('resumo_produtos');?>
          </p>
        </div>
      </li>
      <?php endwhile; else: endif; ?>
      <?php wp_reset_query(); wp_reset_postdata(); ?>
    </ul>
    <div class="call">
      <p>  <?php the_field('chamada_produtos')?></p>
      <a href="/bikcraftwp/produtos/" class="btn btn-preto">Produtos</a>
    </div>
  </section>
  <!--FECHA PRODUTOS-->
  <!--ABRE PORTIFOLIO -->
  <div class="portifolio">
  <h2 class="subtitulo">PORTIFÓLIO</h2>
    <div class="container " data-slide="portifolio">
      <?php include (TEMPLATEPATH . "/include/clientes_portifolio.php"); ?>
    </div>
    <div class="call">
              <p id="call_p_portifolio">  <?php the_field('chamada_portifolio')?></p>
              <a href="/bikcraftwp/portifolio/" class="btn">Portifolio</a>
        </div> 
  </div>
  <!--FECHA PORTIFOLIO -->
  <!--ABRE QUALIDADE  -->
  <section class="qualidade container">
  <?php include (TEMPLATEPATH . "/include/qualidade.php"); ?>
  </section>
  <!--FECHA QUALIDADE  -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simple-slide.js"></script>
  <?php endwhile; else: endif;?>
  <?php get_footer(); ?>
