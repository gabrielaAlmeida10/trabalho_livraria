<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Editar Venda</title>
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
            <p>Editar Venda</p>

            <?php
            // Mock para buscar os dados de uma venda
            $idSale = $_GET['id'] ?? null; // ID da venda passada pela URL
            $sales = [
              ['id' => 1, 'livro' => 'Livro A', 'quantidade' => 2, 'preco' => 59.80, 'cliente' => 'Cliente 1', 'pagamento' => 'Cartão de Crédito'],
              ['id' => 2, 'livro' => 'Livro B', 'quantidade' => 1, 'preco' => 49.90, 'cliente' => 'Cliente 2', 'pagamento' => 'Dinheiro'],
              ['id' => 3, 'livro' => 'Livro C', 'quantidade' => 3, 'preco' => 59.70, 'cliente' => 'Cliente 3', 'pagamento' => 'Pix']
            ];

            // Busca a venda pelo ID
            $sale = null;
            foreach ($sales as $editSale) {
              if ($editSale['id'] == $idSale) {
                $sale = $venda;
                break;
              }
            }

            if (!$sale) {
              echo "<p>Venda não encontrada.</p>";
            } else {
            ?>

              <form name="editSale" method="post" action="../database/books/bd_editar.php">
                <input type="hidden" name="id" value="<?php echo $sale['id']; ?>">

                Nome do Livro: <input type="text" name="nome" value="<?php echo $sale['livro']; ?>" size="80"><br><br>
                Quantidade: <input type="number" name="qtd" value="<?php echo $sale['quantidade']; ?>" size="80"><br><br>
                Preço: <input type="number" name="preco" value="<?php echo $sale['preco']; ?>" size="80"><br><br>
                Nome do Cliente: <input type="text" name="cliente" value="<?php echo $sale['cliente']; ?>" size="80"><br><br>
                Forma de Pagamento: <input type="text" name="pagamento" value="<?php echo $sale['pagamento']; ?>" size="80"><br><br>

                <center>
                  <input type="submit" value="Salvar" class="btn btn-success">
                  <input type="reset" value="Limpar" class="btn btn-danger">
                </center>
              </form>

            <?php
            }
            ?>

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
