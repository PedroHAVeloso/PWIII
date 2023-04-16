<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/PWIII/auto_escola_php/shared/images/logos/favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="editar_screen.css">

  <!-- Autor e descrição -->
  <meta name="author" content="Pedro Veloso">
  <meta name="description" content="Olavo Bilac Auto Escola">

  <!-- Título -->
  <title>Bilac | Alunos</title>
</head>

<body>

  <header>
    <nav class="navbar">
      <button id="btnVoltar" onclick="location.href = `/PWIII/auto_escola_php/screens/home_screen/home_screen.php`">
        <img src="/PWIII/auto_escola_php/shared/images/icons/voltar.svg" alt="Icone Voltar">
      </button>

      <form class="search" action="#" method="post">
        <div class="search-div">
          <img src="/PWIII/auto_escola_php/shared/images/icons/search.svg" alt="Icone Pesquisa">
          <input type="text" name="inpPesquisa" id="inpPesquisa">
        </div>

        <input type="submit" name="inpBuscar" id="inpBuscar" value="Buscar">
      </form>
    </nav>
  </header>

  <main>
    <article>
      <section class="section-adicionar">
        <img src="/PWIII/auto_escola_php/shared/images/icons/add.svg" alt="Icone Adicionar">
      </section>

      <section class="section-aluno">
        <div>
          <h1>ID: 1AB2C3</h1>
          <h2>Nome: João da Silva Santos</h2>
          <h3>Estado: <strong data-estado="HABILITADO">HABILITADO</strong></h3>
          <button>Detalhes</button>
        </div>
      </section>

      <section class="section-aluno">
        <div>
          <h1>ID: C3B2A1</h1>
          <h2>Nome: José Santos da Silva</h2>
          <h3>Estado: <strong data-estado="DESABILITADO">DESABILITADO</strong></h3>
          <button>Detalhes</button>
        </div>
      </section>
    </article>
  </main>

</body>

</html>