<?php 
  $portifolio = get_page_by_title('portifolio');
?>
<ul class="portifolio-items">
<?php if(have_rows('item_portifolio', $portifolio)): while(have_rows('item_portifolio', $portifolio)) : the_row(); ?>
        <li>
         <div class="grid-8">
          <img src="<?php the_sub_field('portifolio-imagem1', $portifolio);?>" alt="<?php the_sub_field('pportifolio_imagem_desc1', $portifolio);?>" />
          </div> 
          <div class="grid-8">
          <img src="<?php the_sub_field('portifolio-imagem2', $portifolio);?>" alt="<?php the_sub_field('portifolio_imagem_desc2', $portifolio);?>" />
          </div> 
          <div class="grid-16" style="margin-top:20px">
          <img src="<?php the_sub_field('portifolio-imagem3', $portifolio);?>" alt="<?php the_sub_field('portifolio_imagem_desc3', $portifolio);?>" />
          </div> 
        </li>
        <?php endwhile; else : endif; ?>
</ul>

