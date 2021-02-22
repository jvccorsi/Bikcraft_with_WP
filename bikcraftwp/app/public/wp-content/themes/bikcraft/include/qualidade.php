<?php 
  $sobre = get_page_by_title('sobre');
?>
  <h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre);?></h2>    
    <img src="<?php the_field('logo_bikcraft', $sobre);?>" alt="bik-craft" />
    <ul class="qualidade-lista">
    <?php if(have_rows('item_qualidade', $sobre)): while(have_rows('item_qualidade', $sobre)) : the_row(); ?>
      <li class="grid-1-3" id="durabilidade">
        <h3><?php the_sub_field('titulo_item_qualidade', $sobre);?></h3>
        <p><?php the_sub_field('descricao_item_qualidade', $sobre);?></p>
      </li>
      <?php endwhile; else : endif; ?>
    </ul>
<?php if (!is_page('sobre')){ ?>
    <div class="call">
      <p><?php the_field('chamada_sobre', $sobre);?></p>
      <a href="/bikcraftwp/sobre/" class="btn btn-preto">Sobre</a>
    </div>
 
<?php } ?>