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
include "model/Usuario.php";
include "database/MySQLiConnection.php";

if (!empty($_REQUEST['action'])){
?>
    <input type="hidden" value="<?php echo $_REQUEST['id']?>" id="requestaction">
    <script>
        $(document).ready(function() {
            console.log($('#requestaction').val());
            var id =$('#requestaction').val();
            $.ajax({
                url: "Registro/persistance.php",
                data:{
                    action: 3,
                    id: id
                },
                success: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
<?php
    header("Refresh: 0; url=index.php");
}

$con = new MySQLiConnection();
$usuario = new Usuario();
$objUsuarios = $usuario->getUsuario($con);

?>

<header>
    <!--    Dropdown-->
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
                <li><a href="Registro/register.php">Cadastro</a></li>
            </ul>
        </div>
    </nav>
</header>
<body>
<div class="row">
    <div class="col s8"></div>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                foreach ($objUsuarios as $usuario){
                    ?>
                    <tr>
                        <input type="hidden" class="id_usuario" ></input>
                        <td><?php echo $usuario['idusuario']?></td>
                        <td><?php echo $usuario['nome']?></td>
                        <td><?php echo $usuario['telefone']?></td>
                        <td><a  href="Registro/persistance.php?action=2&id=<?php echo $usuario['idusuario']?>">Editar</a></td>
                        <td><a href="index.php?action=3&id=<?php echo $usuario['idusuario']?>">Excluir</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
</div>
</body>

<script>
    $(document).ready(function() {
        $('.btn-excluir').click(function () {
            alert($('.btn-excluir').val());
        });
    });
</script>