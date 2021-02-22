<?php
// Template Name: Contato
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include (TEMPLATEPATH . "/include/introducao.php"); ?>

    <section class="contato container fadeInDown" data-anime="1200">
        <form action="enviar-sendgrid.php" id="form-contato" class="grid-8 form-contato" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required />
            <label for="email">E-mail</label> 
            <input type="email" name="email" id="email" required />
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" />
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" required></textarea>
            <button type="submit" class="btn btn-preto" id="enviar" name="enviar">Enviar</button>
            <!-- MACETE PARA TIRAR SPAM DOS EMAILS ENVIADOS !! -->
            <label class="nao-aparece">Se você não é um robô, deixe em branco!</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <!-- MACETE PARA TIRAR SPAM DOS EMAILS ENVIADOS !! -->
            <label class="nao-aparece">Se você não é um robô, nao mude esse campo!</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">


        </form>
        <div class="dados-contato grid-8">
            <h4>Dados</h4>
            <span> <?php the_field('telefone') ?> </span>
            <span><?php the_field('email') ?></span>
            <span><?php the_field('endereco1') ?></span>
            <span> <?php the_field('endereco2') ?></span>
            <h4>Redes Sociais</h4>
            <?php include (TEMPLATEPATH . "/include/redes_sociais.php"); ?>
        </div>
    </section>

    <div class="container contato-mapa">
        <a class="grid-16" href="<?php the_field('link_mapa') ?>" target="_blank"><img src="<?php the_field('imagem_mapa') ?>"
        alt="<?php the_field('texto_mapa') ?>"></a>
    </div>

<?php endwhile; else: endif;?>

<?php get_footer(); ?>