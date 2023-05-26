<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <?php
    function say_hello()
    {
        echo "Hello World <br />";
    }

    function say_hello2($word)
    {
        echo "Hello " . $word . " <br />";
    }

    say_hello();
    say_hello2("EveryOne");

    $name = "shreyash";

    say_hello2($name);
    ?>

    <?php

    function cal($val1, $val2)
    {

        $sum = $val1 + $val2;
        $sub = $val1 - $val2;
        $div = $val1 / $val2;
        $mul = $val1 * $val2;

        $result = array($sum, $sub, $div, $mul);
        return $result;
    }

    $result_arr = cal(26, 4);
    echo "Addition " . $result_arr[0] . "<br/>";
    echo "Substraction " . $result_arr[1] . "<br/>";
    echo "Division " . $result_arr[2] . "<br />";
    echo "multiplication " . $result_arr[3] . "<br />";

    ?>
</body>

</html>