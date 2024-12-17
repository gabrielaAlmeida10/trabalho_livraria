<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro</title>
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <?php
  include("i_topo.php");
  ?>
  <br />
  <?php
  include("i_menu.php");
  ?>


  <section class="menu-container">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <p>Cadasto de Livro no Estoque</p>
            <form name="cadastro" method="post" action="bd_cadastro.php">
              Digite o código do livro: <input type="number" name="cod" size="80"><br><br>
              Digite o nome do livro: <input type="text" name="nome" size="80"><br><br>
              Digite o autor do livro: <input type="text" name="autor" size="80"><br><br>
              Digite a quantidade do livro:<input type="number" name="qtd" size="80"><br><br>
              Digite o valor do livro:<input type="number" name="qtd" size="80"><br><br>
              <center><input type="submit" value="Enviar" class="btn btn-success"><input type="reset" value="Limpar"
                  class="btn btn-danger"></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include("i_rodape.php");
  ?>
</body>

</html>