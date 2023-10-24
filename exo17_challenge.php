<?php
$patients = [
    [
        "nom" => "patient1",
        "prenom" => "Prenom patient1",
        "adresse_email" => "patient1@gmail.com",
        "test_covid" => "positive"


    ],
    [
        "nom" => "patient2",
        "prenom" => "Prenom patient2",
        "adresse_email" => "patient2@gmail.com",
        "test_covid" => "negative"


    ],
    [
        "nom" => "patient3",
        "prenom" => "Prenom patient3",
        "adresse_email" => "patient3@gmail.com",
        "test_covid" => "positive"


    ],
    [
        "nom" => "patient4",
        "prenom" => "Prenom patient4",
        "adresse_email" => "patient4@gmail.com",
        "test_covid" => "positive"


    ],
    [
        "nom" => "patient5",
        "prenom" => "Prenom patient5",
        "adresse_email" => "patient5@gmail.com",
        "test_covid" => "negative"


    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($patients)) : ?>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse email</th>
                <th>Resultat test covid</th>

            </tr>

            <?php foreach ($patients as $patient) : ?>
                <?php if ($patient["test_covid"] == "positive") : ?>
                    <tr>
                        <td><?= $patient["nom"] ?></td>
                        <td><?= $patient["prenom"] ?></td>
                        <td><?= $patient["adresse_email"] ?></td>
                        <td><?= $patient["test_covid"] ?></td>



                    </tr>
                <?php endif; ?>

            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <div><?= "le tableau n'existe pas" ?></div>
    <?php endif; ?>
</body>

</html>