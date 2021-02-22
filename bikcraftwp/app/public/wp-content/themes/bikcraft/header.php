<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title><?php bloginfo('name'); ?><?php wp_title();?></title>

  <!--ABRE  - MELHORAR RANQUEAMENTO GOOGLE - TAGS (SEO e Head):  && META TAGS-->
  <meta name="description"
    content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description"
    content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
  <meta property="og:url" content="url-site" />
  <meta property="og:image" content="img-da-marca-link" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico">
  <!-- FECHA - MELHORAR RANQUEAMENTO GOOGLE - TAGS (SEO e Head): -->

  <!--css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

  <script>
    document.documentElement.classList.add("js");
  </script>
    <!-- Inicio WP HEADER -->
    <?php wp_head(); ?>
    <!-- Final WP HEADER -->
</head>
<body>
  <!--HEADER-->
  <header class="header">
    <div class="container">
      <a href="/bikcraftwp/home" class="grid-4">
        <img src="<?php echo get_template_directory_uri();?>/img/bikcraft.svg" alt="Bikcraft" />
      </a>
      <nav class="header_menu grid-12">
      <?php
          $args = array(
            'menu' => 'principal',
            'theme_location' => 'menu-principal',
            'container' => false
          );
          wp_nav_menu( $args );
      ?>
      </nav>
    </div>
  </header>