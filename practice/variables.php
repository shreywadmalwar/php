<html>
<head>
    <title>Hello world</title>
</head>
<body> 

    <?php 
    $var1 = 20;
    echo $var1;
    echo "<br />";
    $var2 = 23;
    echo $var2;
    ?>

    <br />

    <?php
    $var3 = "Heloo world hasdas";
    $var4= "yes there we go";
    echo $var3 . $var4;
    echo "<br />";
    echo strtolower($var3);
    ?>
<br />
<br>
    Arrays
<br>
    <?php
    $array = array(1,2,3,45, array('a','b','c','d','e'),5);
    echo $array[1];
    echo "<br>";
    echo $array[4][3];
    ?>
<br>
    <?php 
    $array2 = array("first_name" => "shreyash", "last_name" => "Wadmalwar");
    echo $array2["first_name"]; ?>
</body>
</html>