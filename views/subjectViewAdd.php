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
<h1>Formulaire d'ajout</h1>
<form action="index.php?action=subjectAdd" method="POST">
    <p>
        <label for="name">nom de la matiere</label>
        <input type="text" name="name" id="name" value=""/>
    </p>
    <p>
        <label for="duration">durées de la matiere</label>
        <input type="number" name="duration" id="duration" value=""/>
    </p>
    <p>
        <label for="description">description de la matiere</label>
        <textarea name="description" id="description"></textarea>
    </p>
    <p>
        <input type="submit" value="valider" id="valider" name="valider">
    </p>
</form>
</body>
</html>
