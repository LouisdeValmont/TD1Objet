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
<form action="index.php?action=apprenantAdd" method="POST">
    <p>
        <label for="name">prenom</label>
        <input type="text" name="name" id="name" value=""/>
    </p>
    <p>
        <label for="surname">nom</label>
        <input type="text" name="surname" id="surname" value=""/>
    </p>
    <p>
        <label for="birthDate">date de naissance</label>
        <input type="number" name="birthDate" id="birthDate" value=""/>
    </p>
    <p>
        <input type="submit" value="valider" id="valider" name="valider">
    </p>
</form>
</body>
</html>
