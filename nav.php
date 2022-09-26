<nav class="navbar" style="background-color: #313131; border: none; border-radius: 0; margin: 0;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">NFT World</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="lancamento.php">Novidades</a></li>
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipos <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #313131;">
                        <li><a href="categoria.php?cat=1">Animes</a></li>
                        <li><a href="categoria.php?cat=2">Jogos</a></li>
                        <li><a href="categoria.php?cat=3">Séries</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="categoria.php?cat=4">Filmes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="categoria.php?cat=5">Skins de jogos</a></li>
                        <li><a href="categoria.php?cat=6">Memes</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn">Procurar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-headphones"></i> Suporte</a></li>

                <?php if(empty($_SESSION['ID'])) {?>

                <li><a href="logon.php"><i class="fa fa-door-open"></i> Logar</a></li>
                <?php } else {
                    $consulta_user = $cn -> query("SELECT nmUser FROM tbUsuario WHERE idUser = '$_SESSION[ID]'");

                    $query_user = $consulta_user -> fetch(PDO::FETCH_ASSOC);
                ?>
                <li><a href="#"><i class="fa fa-circle-user"></i> <?php echo $query_user['nmUser'];?></a></li>
                <li><a href="logout.php"><i class="fa fa-door-open"></i> Sair</a></li>
                <?php }?>
                <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
            </ul>
        </div>
    </div>
</nav>