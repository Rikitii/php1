
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>

<body>
    <form action="condiciones.php" method="POST">
        <thead>
            <table border="2" width="40%">
                <thead>
                    <tr>
                        <th colspan="2">
                            Digite 3 numeros
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            Digite el primer numero
                        </td>
                        <td>
                            <input type="number" name="primero" value="0">
                        </td>
                    </tr>
                    <tr>
                          <td>
                            Digite el segundo numero
                        </td>

                         <td>
                            <input type="number" name="segundo" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Digite el tercer numero
                        </td>

                        <td>
                            <input type="number" name="tercero" value="0">
                        </td>
                    </tr>

                    <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="numeros" value="enviar">
                    </td>
                </tr>
                </tbody>
            </table>
        </thead>
    </form>
</body>

</html>

