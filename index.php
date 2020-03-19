<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'header.php';
?>
<main>
    <h1>PHP Basics</h1>
    <h2>Variables et include</h2>
    <?php
    echo 'Hello fellowship' . "\n";

    $ringBearer = 'Frodo' . "\n";
    echo $ringBearer;

    $ringCreator = 'Sauron' . "\n";
    echo $ringCreator;

    $fellowshipNumber = 9;

    $isOnFinger = true;

    $ringBearer = 'Bilbo';
    echo $ringBearer . "\n";

    $fellowshipNumber = $fellowshipNumber + 1;
    echo $fellowshipNumber . "\n";

    $fellowshipNumber += 2;
    echo $fellowshipNumber . "\n";

    $fellowshipNumber -= 2; // $fellowshipNumber = $fellowshipNumber - 2;
    echo $fellowshipNumber . "\n";

    $fellowshipNumber++; // $fellowshipNumber = $fellowshipNumber + 1;
    $fellowshipNumber--; // $fellowshipNumber = $fellowshipNumber - 1;

    $middleEarth = '';
    echo $middleEarth . "\n\n";


    echo "Le porteur est $ringBearer\n";
    echo 'Le porteur est ' . $ringBearer . "\n";

    $letterNumber = strlen($ringBearer);
    echo 'Le porteur est ' . $ringBearer . ' nombre de caractères ' . $letterNumber . "\n";
    echo "Le porteur est $ringBearer nombre de caractères $letterNumber\n";

    $message = 'L\'anneau est porté par ' . $ringBearer;
    echo $message . "\n";

    echo "Le créateur est " . strtoupper($ringCreator) . "\n";

    $ringCreator = strtoupper($ringCreator);
    echo 'Le créateur est ' . $ringCreator;

    $wizard = 'Gandalf';
    include 'wizard.php';

    ?>
    <h2>Tableaux, conditions</h2>
    <h3>Boucles For</h3>
    <h4>Boucle de 0 à 9</h4>
    <?php

    for ($i = 0; $i < 10; $i = $i + 1) {
        echo $i;
    }
    ?>
    <h4>Boucle de 0 à 10</h4>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    }
    ?>
    <h4>Boucle de 1 à 10</h4>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    ?>
    <h4>Boucle de 10 à 0</h4>
    <?php
    for ($i = 10; $i >= 0; $i--) {
        echo $i;
    }
    ?>
    <h4>Boucle de 25 à 50 tous les 5</h4>
    <?php
    for ($i = 25; $i <= 50; $i += 5) {
        echo $i;
    }
    ?>
    <h4>Boucle de 10 à -10 tous les 3</h4>
    <?php
    for ($i = 10; $i >= -10; $i -= 3) {
        echo $i;
    }

    ?>
    <h3>Conditions</h3>
    <?php
    $name = 'Jarjar';

    if ($name === 'Darth Vader' || $name === 'Darth Sidious') {
        echo 'Sith';
    } elseif ($name === 'Yoda') {
        echo 'Jedi';
    } else {
        echo 'Pas de pouvoir';
    }
    ?>
    <h3>Tableaux indexes numériquement</h3>
    <?php
    $jedis = [
        'Obi-Wan Kenobi',
        'Yoda',
        'Luke Skywalker',
        'Windu',
        'Qui-gon Jinn',
    ];

    var_dump($jedis);

    $jedis[] = 'Rey';
    var_dump($jedis);

    echo $jedis[1];
    ?><br/><?php

    echo count($jedis);

    $jedis[10] = 'Ben';
    $jediNumber = count($jedis);
    var_dump($jedis);

    sort($jedis);
    var_dump($jedis);

    for ($i = 0; $i < $jediNumber; $i++) {
        echo $jedis[$i];
    }
    ?>
    <h3>Tableaux associatifs</h3>
    <?php

    $characters = [
        'Yoda'           => 900,
        'Leia'           => 19,
        'Luke Skywalker' => 19,
        'Darth Vader'    => 46,
        'Chewbacca'      => 200,
    ];

    var_dump($characters);

    $characters['Han Solo'] = 29;
    var_dump($characters);

    asort($characters);
    var_dump($characters);
    ?>
    <ul>
        <?php foreach ($characters as $name => $age) : ?>
            <li>
                <?= $name . ' : ' . $age ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
    ksort($characters);
    var_dump($characters);
    ?>
    <ul>
        <?php foreach ($characters as $name => $age) : ?>
            <li>
                <?= $name . ' : ' . $age ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <ul>
        <?php foreach ($characters as $name => $age) :
            if ($age > 20) : ?>
                <li>
                    <?= $name . ' : ' . $age ?>
                </li>
            <?php endif;
        endforeach; ?>
    </ul>

    <h3>Tableaux multidimensionnels</h3>

    <?php
    $characters = [
        'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
        'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
        'Gungan' => ['Jar Jar Binks'],
        'Human' => ['Han Solo', 'Leia'],
    ];

//    $experiences = [
//        'Comptable' => [
//                'employeur' => 'nom entreprise',
//                'contrant' => 'CDD',
//                'annee' => 2015
//        ],
//        'Chef Comptable' => [
//                'employeur' => 'autre entreprise',
//                'contrant' => 'CDI',
//                'annee' => 2018
//        ],
//    ];

    var_dump($characters);

    foreach($characters as $race => $raceCharacters) : ?>
        <h2><?= $race . ' ('. count($raceCharacters) .')' ?></h2>

        <ul>
        <?php foreach($raceCharacters as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endforeach;

    include 'footer.php';

    ?>


</main>
</body>
</html>
