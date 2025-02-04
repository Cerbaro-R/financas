<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Sistema de Finanças</title>
  <link rel="stylesheet" href="../public/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Chart.js para gráficos -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand text-white" href="#">Navbar scroll</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white" aria-disabled="true">Link</a>
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
    <!-- Row com área dos saldos à esquerda e gráfico à direita -->
    <div class="d-flex dashboard-row">
      <!-- Área da esquerda (70%) -->
      <div class="left-container d-flex flex-column me-2">
        <!-- Card do Saldo Geral -->
        <div class="card text-white bg-success flex-card mb-2">
          <div class="card-body text-center">
            <h4 class="card-title">Saldo Total</h4>
            <p class="card-text h1">R$ 15.000,00</p>
          </div>
        </div>
        <!-- Card do Saldo por Conta -->
        <div class="card flex-card">
          <div class="card-header">
            <h5 class="card-title">Saldo por Conta</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Conta Corrente: R$ 8.000,00</li>
              <li class="list-group-item">Conta Poupança: R$ 5.000,00</li>
              <li class="list-group-item">Investimentos: R$ 2.000,00</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Área da direita (30%) com o gráfico -->
      <div class="right-container">
        <div class="card h-100">
          <div class="card-header">
            <h5 class="card-title">Entradas e Saídas do Mês</h5>
          </div>
          <div class="card-body">
            <canvas id="pieChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Outras seções abaixo -->
    <!-- Contas a Pagar -->
    <div class="row mb-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Contas a Pagar (Este Mês)</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between">
                <span>Cartão de Crédito</span>
                <span>R$ 1.200,00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Energia Elétrica</span>
                <span>R$ 350,00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Internet</span>
                <span>R$ 100,00</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Destaques de Despesas -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Destaques de Despesas</h5>
          </div>
          <div class="card-body">
            <p><strong>Maior Despesa do Mês:</strong> Cartão de Crédito - R$ 1.200,00</p>
            <p><strong>Maior Fonte de Entrada:</strong> Salário - R$ 4.000,00</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Script para Chart.js -->
  <script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Entradas', 'Saídas'],
        datasets: [{
          data: [8000, 4000], // Valores de exemplo
          backgroundColor: ['#28a745', '#dc3545']
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top'
          },
          tooltip: {
            callbacks: {
              label: function(tooltipItem) {
                return tooltipItem.label + ': R$ ' + tooltipItem.raw;
              }
            }
          }
        }
      }
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
