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
<a href="http://127.0.0.1/TD1Objet/index.php/?action=formateurView" title="voir la liste des formateur">voir la liste
    des formateur</a><br/>
<a href="http://127.0.0.1/TD1Objet/index.php/?action=subjectView" title="voir la liste des formateur">voir la liste
    des Subjects</a><br/>
<a href="http://127.0.0.1/TD1Objet/index.php/?action=promoView" title="voir la liste des formateur">voir la liste
    des promo</a><br/>
<a href="http://127.0.0.1/TD1Objet/index.php/?action=apprenantView" title="voir la liste des formateur">voir la liste
    des apprenant</a><br/>

<ul>
    <?php
    //Liste des promotions
    foreach($aPromos as $promo):
        ?>
        <li>
            <h2><?php echo $promo->getName(); ?></h2>
            <p><?php echo $promo->getStart() .' au ' . $promo->getEnd(); ?></p>
            <p>Nombre d'apprenants <?php echo $promo->getNumbreOfStudent(); ?></p>
        </li>
    <?php
    endforeach;
    ?>
</ul>
</body>
</html>
