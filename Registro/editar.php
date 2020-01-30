<head>
    <meta charset="UTF-8">
    <title>E-commerce Brothers</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../src/js/index.js"> </script>
    <link rel="stylesheet" href="../src/css/default.css">
    <link rel="stylesheet" href="../src/css/index.css">
</head>
<?php
include "../model/Usuario.php";
include "../database/MySQLiConnection.php";
if (!empty($_REQUEST['action'])){
?>
    <input type="hidden" value="<?php echo $_REQUEST['id']?>" id="requestaction">
    <script>
        $(document).ready(function() {
            console.log($('#requestaction').val());
            var id =$('#requestaction').val();
            
        });
    </script>
<?php
    
}

$con = new MySQLiConnection();
$usuario = new Usuario();
$objUsuarios = $usuario->getUser($con,$_REQUEST['id']);

?>



<header>
    <!--    Dropdownronaldo-->
    <ul id="dropcategory" class="dropdown-content">
        <li><a href="#!">PC</a></li>
        <li><a href="#!">Playstation</a></li>
        <li><a href="#!">XBOX</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper grey " >
            <a href="#" class="brand-logo right">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="../index.php"><i class="material-icons">home</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropcategory">Produtos<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="register.php">Cadastro</a></li>
            </ul>
        </div>
    </nav>
</header>


<body>

</body>
<?php
    foreach ($objUsuarios as $usuario){
                    ?>

    <div class="constraint">
        <div class="row grey ">
            <form class="col s12">
                <div class="row grey ">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate" name="nome" value="<?php echo $usuario['nome']?>" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="tel" type="text" class="validate" name="telefone" value="<?php echo $usuario['telefone']?>" required>
                        <label for="tel">Telefone</label>
                    </div>
                </div>
                <div class="row grey ">
                    <div class="input-field col s6">
                        <input id="documento" type="text" class="validate" name="cpf" value="<?php echo $usuario['documento']?>" required>
                        <label for="documento">Documento</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="idusuario" type="text" class="validate" name="idusuario" value="<?php echo $usuario['idusuario']?>" readonly=“true” required>
                        <label for="idusuario">Id</label>
                    </div>
                </div>
                <div class="row grey ">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email"value="<?php echo $usuario['email']?>" required>
                        <label for="email">Email</label>
                    </div>

                </div>
                <div class="row grey ">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="senha" value="<?php echo $usuario['senha']?>" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <button id="editar-submit" class="btn waves-effect waves-light" type="button">Altera</button>
            </form>
        </div>
    </div>
    <?php
                }
            ?>
</body>

<script>
        $(document).ready(function() {

            $('#editar-submit').click(function () {
                var email = $("#email").val();
                var nome = $("#name").val();
                var telefone = $("#tel").val();
                var documento = $("#documento").val();
                var senha = $("#password").val();
                var idusuario= $("#idusuario")
                $.ajax({
                    url: "persistance.php",
                    data:{
                        email: email,
                        nome: nome,
                        telefone: telefone,
                        documento: documento,
                        password: senha,
                        idusuario:idusuario,
                        action: 2
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>