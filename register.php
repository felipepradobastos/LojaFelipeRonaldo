<head>
    <meta charset="UTF-8">
    <title>E-commerce Brothers</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="src/js/index.js"> </script>
    <link rel="stylesheet" href="src/css/default.css">
    <link rel="stylesheet" href="src/css/index.css">
</head>

<header>
    <!--    Dropdownronaldo-->
    <ul id="dropcategory" class="dropdown-content">
        <li><a href="#!">PC</a></li>
        <li><a href="#!">Playstation</a></li>
        <li><a href="#!">XBOX</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper grey darken-1" >
            <a href="#" class="brand-logo right">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a><i class="material-icons">home</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropcategory">Produtos<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="register.php">Cadastro</a></li>
            </ul>
        </div>
    </nav>
</header>
<bord>

<div class="constraint">
<div class="row grey darken-1" >
    <form class="col s12">
      <div class="row grey darken-1">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="nome">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="tel" type="text" class="validate" name="telefone">
          <label for="tel">Telefone</label>
        </div>
      </div>
      <div class="row grey darken-1">
      <div class="input-field col s6">
          <input  id="documento" type="text" class="validate" name="cpf">
          <label for="documento">Documento</label>
        </div>
      </div>
      <div class="row grey darken-1">
      <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
        
      </div>
      <div class="row grey darken-1">
      <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="senha" >
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit">Submit
      </button>
    </form>
    
  </div>
</div>


</bord>
