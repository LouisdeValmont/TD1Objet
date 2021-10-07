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
<h1>Formulaire d'edition</h1>
<form action="index.php?action=apprenantEdit" method="POST">
    <p>
        <label for="name">prenom</label>
        <input type="text" name="name" id="name" value="<?php if(!empty($oApprenant) AND !empty($oApprenant->getName
        ())): echo $oApprenant->getName(); endif; ?>"/>
    </p>
    <p>
        <label for="surname">nom</label>
        <input type="text" name="surname" id="surname" value="<?php if(!empty($oApprenant) AND !empty
            ($oApprenant->getSurname())): echo $oApprenant->getSurname(); endif; ?>"/>
    </p>
    <p>
        <label for="dateOfBirth">année de naissance</label>
        <input type="number" name="dateOfBirth" id="dateOfBirth" value="<?php if(!empty($oApprenant) AND !empty
            ($oApprenant->getBirthDate())): echo $oApprenant->getBirthDate(); endif; ?>"/>
    </p>
    <p>
        <?php if(isset($_REQUEST['index']) AND $_REQUEST['index']>=0): ?>
        <input type="hidden" value="<?php echo $_REQUEST['index']; ?>" id="index" name="index"/>
        <?php endif; ?>
        <input type="submit" value="valider" id="valider" name="valider">
    </p>
</form>
</body>
</html>
