<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    include_once("funcApp.php");
    $page = isset($_GET["page"]) ? $_GET["page"] : 0;
    switch ($page) {
        case 1:
            include_once("about.php");
            break;
        case 2:
            include_once("contacts.php");
            break;
        case 3:
            include_once("project.php");
            break;
        case 4:
            include_once("map.php");
            break;
        case 0:
            echo "<h1>Home</h1>";
            break;
    }
    ?>
</body>

</html>