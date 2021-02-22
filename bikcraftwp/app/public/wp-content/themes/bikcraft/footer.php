<?php $contato = get_page_by_title('contato'); ?>
  <!--ABRE FOOTER   -->
  <div class="quebra">
    <blockquote class="quote-externo container">
      <p>
        "O verdadeiro segredo da felicidade está em ter um genuíno interesse
        por todos os detalhes da vida cotidiana. "
      </p>
      <cite>WILLIAM MORRIS</cite>
    </blockquote>
  </div>
<footer>
    <div class="footer">
      <div class="container">
        <div class="grid-8 footer-historia">
          <h3>Nossa história</h3>
          <p>
          <?php the_field('resumo_historia', $contato) ?>
          </p>
        </div>
        <div class="grid-4 footer-contato">
          <h3>Contato</h3>
          <ul>
            <li>- <?php the_field('telefone', $contato) ?></li>
            <li>- <?php the_field('email', $contato) ?></li>
            <li>- <?php the_field('endereco1', $contato) ?></li>
          </ul>
        </div>
        <div class="grid-4 footer-sociais">
          <h3>Redes Sociais</h3>
          <?php include (TEMPLATEPATH . "/include/redes_sociais.php"); ?>
        </div>
      </div>
    </div>
    <div class="copy">
      <div class="container">
        <p class="grid-16">Bikcraft <?php echo date('Y') ?> - Alguns direitos reservados</p>
      </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
    <!-- Final WP Footer -->
</body>

</html>
