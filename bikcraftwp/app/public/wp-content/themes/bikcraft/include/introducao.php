<style>
.introducao-interna{
  background:url(<?php the_field('background_interno'); ?>) no-repeat center;;
  background-size: cover;
}
        
</style>


<section class="introducao-interna introducao-contato">
        <h1 class="subtitulo fadeInDown" data-anime="400"><?php the_title(); ?></h1>
        <p class="fadeInDown" data-anime="800"><?php the_field('subtitulo');?></p>
</section>