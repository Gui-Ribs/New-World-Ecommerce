<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>NFT World</title>
</head>
<body>
    <?php 
    
        session_start();
        include 'connection.php';
        include 'nav.php';
        include 'cabecalho.php';

        $cat = $_GET['cat'];


        $query = $cn -> query ("SELECT  nomeNFT, precoNft, imNft FROM tbNFT WHERE idCategoria = '$cat'");
    ?>

    <div class="container-fluid">

            <div class="row">

                <?php while ($view = $query -> fetch(PDO::FETCH_ASSOC)) { ?>

                <div class="col-sm-3">

                    <img src="assets/img/<?php echo $view['imNft'];?>.jpg" class="img-responsive" style="width: 100%;" alt="">
                    <div><h3><b><?php echo mb_strimwidth($view['nomeNFT'],0,25,'...');?></b></h3></div>
                    <div><h4><?php echo number_format($view['precoNft'],2,'.','.');?></h4></div>

                    <div class="text-center" style="margin-top: 5px; margin-bottom: 5px;">
                        <button class="btn btn-lg btn-info">
                            <span><i class="fa fa-info"> View</i></span>
                        </button>
                    </div>

                    <div class="text-center" style="margin-top: 5px; margin-bottom: 5px;">
                        <button class="btn btn-lg btn-danger">
                            <span><i class="fa fa-info"> Buy</i></span>
                        </button>
                    </div>

                </div>

        <?php } ?>
    </div>

    <?php include 'footer.php'?>
</body>
</html>