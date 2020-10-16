<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Campanha de arrecadação de presentes de natal para as crianças do Lar Santa Filomena de Presidente Prudente">
    <meta name="keywords" content="Lar Santa Filomena, Presidente Prudente, Campanha de Natal">
    <meta name="author" content="Fundação Inova Prudente">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <script src="https://kit.fontawesome.com/d157821a76.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      });

      $(document).on("click", ".open-modal", function () {
        var title = $(this).attr( "title" );
        var id = $(this).attr( "id" );
        var carta = $(this).attr( "carta" );

        $( "#criancaModalLabel" ).text( title );

        $("#linkPresentear").attr("href",'pages/presentear/'+id);

        //$("#urlCarta").attr("src",'cartas/cartinha_exemplo-1.jpg');
        $("#urlCarta").attr("src",'./' + carta);
      });
    </script>
    <title>Natal Solidário</title>
    <?= $this->Html->css(['style']) ?>
  </head>
  <body>
    <nav class="navbar">
      <div>        
        <a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'index']) ?>" data-toggle="tooltip" data-placement="bottom" title="Página Inicial"><?= $this->Html->image('logo-lar-sta-filomena-branco-chapeu.png') ?></a>
      </div>
      <div>
        <a class="navbar-toggler btn btn-outline-danger" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'login']) ?>" data-toggle="tooltip" data-placement="left" title="Área Administrativa">
          <i class="fas fa-user-lock"></i>
        </a>           
      </div>
    </nav>
    <main role="main">
      <div class="container">
        <?= $this->fetch('content') ?>
      </div>
    </main>
    <footer>
      <div class="copyright">
        <div class="row">
          <div class="col-8 offset-2">
            <a href="https://www.inovaprudente.com.br/"><?= $this->Html->image('Logo_Inova_Prudente-footer.png', ['class' => 'img-fluid']) ?></a>
          </div>
        </div>       
        <p>Desenvolvido por: Fundação Inova Prudente</p>
      </div>     
    </footer>
  </body>
</html>