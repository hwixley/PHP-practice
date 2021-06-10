<!DOCTYPE html>

<html lang=en>

<head>

    <meta charset="UTF-8">

    <title>Test</title>

</head>

<body>
    <?= "NIce" ?>

    <ul>
        <?php foreach ($task as $feature=>$value) : ?>

            <li><strong><?= ucwords($feature); ?></strong> <?= ($feature == "completed") ? (($value == 1) ? "True &#9989" : "False") : ucwords($value);?>
            </li>

        <?php endforeach; ?>

    </ul>

</body>

</html>
