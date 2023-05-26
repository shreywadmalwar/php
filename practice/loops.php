<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    $count = 0;
    while ($count <= 10) {
        echo ("2 X " . $count . " = " . $count * 2);
        echo "<br />";
        $count++;
    }
    ?>

    <br>
    <br>
    <br>
    FOR LOOPS
    <br>

    <?php
    for ($c = 0; $c <= 10; $c++) {
        echo ("3 X " . $c . " = " . $c * 3);
        echo "<br />";
    }
    ?>

    <br>
    <br>
    <br>
    FOREACH LOOPS
    <br>

    <?php
    $ages = array(23, 45, 67, 89, 43);
    foreach ($ages as $age) {
        echo $age;
        echo "<br />";
    }
    echo "<br />";
    foreach ($ages as $position => $age) {
        echo $position . " : " . $age;
        echo "<br />";
    }
    ?>
    <br>
    <br>
    <br>
    FOREACH LOOPS continue
    <br>
    <?php
    for ($c = 0; $c <= 10; $c++) {
        echo ("3 X " . $c . " = " . $c * 3);
        echo "<br />";
    }
    ?>
</body>

</html>