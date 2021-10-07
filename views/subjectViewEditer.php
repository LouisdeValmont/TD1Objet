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
<form action="index.php?action=subjectEdit" method="POST">
    <p>
        <label for="name">nom de la matiere</label>
        <input type="text" name="name" id="name" value="<?php if (!empty($oSubject) and !empty(
            $oSubject->getName())): echo $oSubject->getName(); endif; ?>"/>
    </p>
    <p>
        <label for="duration">durées de la matiere</label>
        <input type="number" name="duration" id="duration" value="<?php if (!empty($oSubject) and !empty(
            $oSubject->getDuration())): echo $oSubject->getDuration(); endif; ?>"/>
    </p>
    <p>
        <label for="description">description de la matiere</label>
        <textarea name="description" id="description"><?php if (!empty($oSubject) and !empty(
                $oSubject->getDescription())): echo $oSubject->getDescription(); endif; ?></textarea>
    </p>
    <p>
        <?php
        if(isset($_REQUEST['index']) AND $_REQUEST['index']>=0):
        ?>
        <input type="hidden" value="<?php echo $_REQUEST['index'] ?>" id="index" name="index"/>
        <?php endif; ?>
        <input type="submit" value="valider" id="valider" name="valider">
    </p>
</form>

<br/>
</body>
</html>
