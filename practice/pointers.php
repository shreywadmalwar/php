<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    $ages = array(23, 45, 67, 89, 43);
    echo "1: " . current($ages) . "<br />";
    next($ages);
    echo "2 " . current($ages) . "<br />";
    reset($ages);
    echo "3 " . current($ages) . "<br />";

    ?>

    <?php
    while ($age = current($ages)) {
        echo $age . " , ";
        next($ages);
    }
    ?>
</body>

</html>