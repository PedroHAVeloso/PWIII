<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/PWIII/auto_escola_php/shared/images/logos/favicon.ico" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="login_screen.css">

  <!-- Autor e descrição -->
  <meta name="author" content="Pedro Veloso">
  <meta name="description" content="Olavo Bilac Auto Escola">

  <!-- Título -->
  <title>Bilac | Auto Escola</title>
</head>

<body>

  <header>
    <nav class="navbar">
      <img src="/PWIII/auto_escola_php/shared/images/logos/logotipo.svg" alt="Logotipo Olavo Bilac Auto Escola">
    </nav>
  </header>

  <main>
    <article>

      <header class="container-aviso">
        <picture class="container-aviso-picture">
          <img src="/PWIII/auto_escola_php/shared/images/icons/interrogacao.svg" alt="Icone de Interrogação">
          <h1>Solicite uma conta ao administrador.</h1>
        </picture>
      </header>

      <section class="container-login">
        <form action="#" method="post">
          <label for="inpUsuario">Usuário:</label>
          <input type="text" name="inpUsuario" id="inpUsuario">

          <label for="inpSenha">Senha:</label>
          <input type="password" name="inpSenha" id="inpSenha">

          <input type="submit" name="inpEntrar" value="Entrar">
        </form>
      </section>

    </article>
  </main>

</body>

</html>