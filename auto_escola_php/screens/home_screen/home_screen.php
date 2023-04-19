<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/PWIII/auto_escola_php/shared/images/logos/favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="home_screen.css">

  <!-- Autor e descrição -->
  <meta name="author" content="Pedro Veloso">
  <meta name="description" content="Olavo Bilac Auto Escola">

  <!-- Título -->
  <title>Bilac | Auto Escola</title>
</head>

<body>

  <main>
    <nav class="navbar">
      <div class="navbar-container">
        <button onclick="location.href = `/PWIII/auto_escola_php/screens/alunos_screen/alunos_screen.php`">Alunos</button>
        <br />
        <button onclick="location.href = `/PWIII/auto_escola_php/screens/instrutores_screen/instrutores_screen.php`">Instrutores</button>
        <br />
        <button onclick="location.href = `/PWIII/auto_escola_php/screens/cfc_screen/cfc_screen.php`">CFC</button>
        <br />
        <button>Aulas</button>
        <br />
        <button onclick="location.href = `/PWIII/auto_escola_php/screens/habilitacao_screen/habilitacao_screen.php`">Habilitação</button>
      </div>
    </nav>

    <aside class="aside">
      <picture class="aside-picture">
        <img src="/PWIII/auto_escola_php/shared/images/logos/simbolo.svg" alt="Símbolo Olabo Bilac">
      </picture>
    </aside>
  </main>

  <footer>
    <button onclick="location.href = `/PWIII/auto_escola_php/screens/login_screen/login_screen.php`">Sair</button>
  </footer>

</body>

</html>