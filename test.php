<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try Connection with database</title>
</head>
<body>
    

    <?php
    
        include 'connection.php';

        $query = $cn -> query('SELECT * FROM vwNFT');

       while ($view = $query -> fetch(PDO::FETCH_ASSOC)) {
        
        echo $view['nomeNFT'].'<br>';
        echo $view['descNft'].'<br>';
        echo $view['oferta'].'<br>';
        echo $view['nomeCripto'].'<br>';
        echo $view ['precoNft'].'<br>';

        echo '<hr>';

       }

    ?>

</body>
</html>