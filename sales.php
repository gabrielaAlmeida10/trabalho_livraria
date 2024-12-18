<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vendas</title>
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php
  include "i_topo.php";
  ?>
  <br />
  <?php
  include "i_menu.php";
  ?>

  <section class="menu-container">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-lower">Lista de Vendas!</span>
            </h2>
            <a href="addSale.php" class="btn btn-success">Registrar Nova Venda</a>
            <hr>
            <br />
            <p class="list-unstyled list-hours mb-5 text-left mx-auto">
              <?php
              $sales = [
                [
                  'id' => 1,
                  'livro' => 'Livro A',
                  'qtd' => 2,
                  'valor' => 59.80,
                  'cliente' => 'Cliente 1',
                  'pagamento' => 'Cartão de Crédito'
                ],
                [
                  'id' => 2,
                  'livro' => 'Livro B',
                  'qtd' => 1,
                  'valor' => 49.90,
                  'cliente' => 'Cliente 2',
                  'pagamento' => 'Dinheiro'
                ],
                [
                  'id' => 3,
                  'livro' => 'Livro C',
                  'qtd' => 3,
                  'valor' => 59.70,
                  'cliente' => 'Cliente 3',
                  'pagamento' => 'Pix'
                ]
              ];

              ?>

            <table border="1" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Livro</th>
                  <th>Quantidade</th>
                  <th>Valor (R$)</th>
                  <th>Cliente</th>
                  <th>Pagamento</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sales as $sale): ?>
                  <tr>
                    <td><?= $sale['id']; ?></td>
                    <td><?= htmlspecialchars($sale['livro']); ?></td>
                    <td><?= $sale['qtd']; ?></td>
                    <td><?= number_format($sale['valor'], 2, ',', '.'); ?></td>
                    <td><?= htmlspecialchars($sale['cliente']); ?></td>
                    <td><?= htmlspecialchars($sale['pagamento']); ?></td>
                    <td>
                      <a href="editSale.php?id=<?= $sale['id']; ?>" class="btn btn-warning ">Editar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "i_rodape.php";
  ?>
</body>

</html>