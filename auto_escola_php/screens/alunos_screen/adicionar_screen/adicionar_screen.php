<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/PWIII/auto_escola_php/shared/images/logos/favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="adicionar_screen.css">

  <!-- Autor e descrição -->
  <meta name="author" content="Pedro Veloso">
  <meta name="description" content="Olavo Bilac Auto Escola">

  <!-- Título -->
  <title>Bilac | Alunos</title>
</head>

<body>

  <header>
    <nav class="navbar">
      <button id="btnVoltar" onclick="location.href = `/PWIII/auto_escola_php/screens/alunos_screen/alunos_screen.php`">
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
      <form action="#" method="post">
        <label for="inpUsuario">Usuário:</label>
        <br />
        <input type="text" name="inpUsuario" id="inpUsuario" required>
        <br />
        <label for="inpCPF">CPF:</label>
        <br />
        <input type="text" name="inpCPF" id="inpCPF" required>
        <br />
        <label for="inpEstado">Estado:</label>
        <br />
        <input type="text" name="inpEstado" id="inpEstado" required>
        <br />

        <div class="container-submit">
          <input onclick="location.href = `/PWIII/auto_escola_php/screens/alunos_screen/alunos_screen.php`" type="submit" name="inpAdicionar" id="inpAdicionar" value="Adicionar">
        </div>
      </form>
    </article>
  </main>

</body>

</html>