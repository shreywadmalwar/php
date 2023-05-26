<html>

<head>
    <title>IF ELSE</title>
</head>

<body>
    <?php
    $a = 33;
    $b = 33;
    if ($a > $b) {
        echo "A is greater than b";
    } elseif ($a == $b) {
        echo "A is equal to b";
    } else {
        echo "A is not larger than b";
    }
    ?>
    <br />
    <?php
    $c = 334;
    $d = 33;
    if (($c > $d) && ($a > $b)) {
        echo "A is greater than b";
    } elseif ($c == $d) {
        echo "A is equal to b";
    } else {
        echo "A is not larger than b";
    }
    ?>
    <br>
    SWITCHS
    <br>
    <?php
    $u = 0;
    switch ($u) {
        case 0:
            echo "0";
            break;
        case 1:
            echo "1";
            break;
        default:
            echo "null";
            break;
    }
    ?>
</body>

</html>