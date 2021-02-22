<?php   $contato = get_page_by_title('contato');?>
<section class="orcamento">
    <div class="container">
      <h3 class="subtitulo"> Orçamento</h3>
      <form action="./enviar-sendgrid.php" method="POST" id="form-orcamento" class="grid-8 form form-php">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required />
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required />
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" />
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" id="mensagem" required></textarea>
        <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
        <!-- MACETE PARA TIRAR SPAM DOS EMAILS ENVIADOS !! -->
        <label class="nao-aparece">Se você não é um robô, deixe em branco!</label>
        <input type="text" class="nao-aparece" name="leaveblank">
        <!-- MACETE PARA TIRAR SPAM DOS EMAILS ENVIADOS !! -->
        <label class="nao-aparece">Se você não é um robô, nao mude esse campo!</label>
        <input type="text" class="nao-aparece" name="dontchange" value="http://">

      </form>

      <div class="dados-orcamento grid-8">
        <h4>Dados</h4>
        <span> <?php the_field('telefone',$contato);?></span>
        <span><?php the_field('email',$contato);?></span>
        <h4>Monte sua bikcraft</h4>
        <p>Escolha as Especificações:</p>
        <ul>
          <li>- Cores</li>
          <li>- Estilos</li>
          <li>- Acessórios</li>
          <li>- Medidas</li>
          <li>- Outros</li>
        </ul>
        </div>

     
    </div>
  </section>