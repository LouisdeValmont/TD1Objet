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


<?php
if (count($aSubjects) >= 1):
    ?>

    <table>
    <?php
    //Liste des subjects
    foreach ($aSubjects as $index => $osubject):
        ?>
    <tr>
        <td>
            <?php echo $osubject->getName(); ?>
        </td>
        <td>
            Durée <?php echo $osubject->getDuration(); ?>heures
        </td>
        <td>
          <?php echo $osubject->getDescription(); ?>
        </td>
        <td>
            <a href="controlers/index.php/?action=subjectEdit&index=<?php echo $index ?>" title="Remove<?php echo $index ?>">Editer</a>
        </td>
        <td>
            <a href="controlers/index.php/?action=subjectRemove&index=<?php echo $index ?>" title="Remove<?php echo $index ?>">Delete</a>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
    </table>
    <a href="controlers/index.php/?action=subjectAdd"
       title="Add">Ajouter</a>
<?php
else:
    ?>
    <p>Aucun résultat trouvé pour les matières</p>
<?php
endif;
?>
</body>
</html>
