<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contas a Receber - Sistema de Finanças</title>
  <link rel="stylesheet" href="../public/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Chart.js para gráficos -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand text-white" href="">Sistema de Finanças</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link text-white" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contas_a_pagar.html">Pagar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Receber</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-4">
    <!-- Resumo do Total a Receber -->
    <div class="row mb-4">
      <div class="col-12">
        <div class="card text-white bg-primary">
          <div class="card-body text-center">
            <h4 class="card-title">Total a Receber</h4>
            <p class="card-text h1">R$ 12.500,00</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Lista de Contas a Receber -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Contas a Receber (Próximos 30 Dias)</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between">
                <span>Fatura Cliente A</span>
                <span>R$ 4.000,00 - Vencimento: 10/02/2025</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Fatura Cliente B</span>
                <span>R$ 3.500,00 - Vencimento: 15/02/2025</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Projeto Cliente C</span>
                <span>R$ 5.000,00 - Vencimento: 20/02/2025</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Destaques de Recebíveis -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Destaques de Recebíveis</h5>
          </div>
          <div class="card-body">
            <p><strong>Maior Recebível:</strong> Projeto Cliente C - R$ 5.000,00</p>
            <p><strong>Próximo Vencimento:</strong> Fatura Cliente A - 10/02/2025</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
