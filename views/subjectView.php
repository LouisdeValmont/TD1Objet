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
<?php
if(count($aSubjects) >= 1):
    ?>
    <ul>
        <?php
        //Liste des subjects
        foreach($aSubjects as $subject):
            ?>
            <li>
                <h2><?php echo $subject['nom']; ?> </h2>
                <?php
                if($subject['duree']>4):
                    ?>
                    <strong>Module important</strong>
                <?php
                endif;
                ?>
                <ul>
                    <li>Durée <?php echo $subject['duree']; ?>heures</li>
                </ul>

                <p><?php echo $subject['description']; ?></p>
            </li>
        <?php
        endforeach;
        ?>
    </ul>

<?php
else:
    ?>
    <p>Aucun résultat trouvé pour les matières</p>
<?php
endif;
?>
</body>
</html>
