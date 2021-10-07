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
if (count($aApprenants) >= 1):
?>
<table>
    <?php
    foreach($aApprenants as $index => $apprenant):
        ?>
    <tr>
        <td>
            <h2><?php echo $apprenant->getName(); ?></h2>

        </td>
        <td>
            <?php echo $apprenant->getSurname(); ?>
        </td>
        <td>
            <p><?php echo $apprenant->getBirthDate(); ?></p>
        </td>
        <td>
            <a href="controlers/index.php/?action=apprenantEdit&index=<?php echo $index ?>">Editer</a>
        </td>
        <td>
            <a href="controlers/index.php/?action=apprenantRemove&index=<?php echo $index ?>">Delete</a>
        </td>
    </tr>
        <?php
    endforeach;
    endif;
    ?>
</table>
</body>
</html>
