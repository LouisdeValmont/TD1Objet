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
    //Liste des apprenants
    $ageTotal = 0;
    foreach($aApprenants as $apprenant):
        ?>
        <li>
            <h2><?php echo $apprenant['nom']; ?> <?php echo $apprenant['prenom']; ?></h2>
            <p><?php echo $apprenant['dateNaissance']; ?></p>
        </li>
        <?php
        $ageTotal +=  2021-$apprenant['dateNaissance'];
    endforeach;
    ?>
</ul>
</body>
</html>