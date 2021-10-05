<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
    //Liste des promotions
    foreach($aPromos as $promo):
        ?>
        <li>
            <h2><?php echo $promo['nom']; ?></h2>
            <p><?php echo $promo['dateDebut'].' au '.$promo['dateFin']; ?></p>
            <p>Nombre d'apprenants <?php echo $promo['nombreApprenant']; ?></p>
        </li>
    <?php
    endforeach;
    ?>
</ul>
</body>
</html>
