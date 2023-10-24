<?php
// function MultiplicationDe5()
// {
//     for ($i = 0; $i <= 10; $i++) {
//         echo "5 x $i = " . ($i * 5) . "\n";
//     }
// }
// MultiplicationDe5();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication 5</title>
</head>

<body>
    <div>
        <table border="1">
            <?php for ($i = 0; $i <= 10; $i++) : ?>
                <tr>
                    <td><?= "5 x $i = " ?></td>
                    <td><?= $i * 5 ?></td>

                </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>

</html>