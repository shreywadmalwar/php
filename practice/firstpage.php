<html>

<head>
    <title>First Page</title>
</head>

<body>
    First Page
    <a href="secondpage.php">second Page</a>
    <?php
    echo "<br/>";
    print_r($_GET);
    $id = $_GET['id'];
    $name = $_GET['name'];
    echo "<br />" . $id;
    ?>
</body>

</html>