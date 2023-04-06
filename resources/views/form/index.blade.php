<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon calculateur</title>
</head>
<body>
    <h2>Calculateur</h2>
    <form action="/calcul" method="post">
        <table>
            <tr>
                <td>Nombre 1</td>
                <td><input type="text" name="nbre1" ></td>
            </tr>
            <tr>
                <td>Nombre 2</td>
                <td><input type="text" name="nbre2" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Calculer"></td>
            </tr>
        </table>
    </form>

</body>
</html>