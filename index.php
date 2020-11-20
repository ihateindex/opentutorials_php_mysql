<?php
   $conn = mysqli_connect("localhost", "root", "", "opentutorials");

   $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn,$sql);
    $list = '';
    while($row = mysqli_fetch_array($result)) {
                $list = $list."<li><a href=\"index.php?id=".$row['id']."\">".$row['title']."</a></li>";
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>

<body>
    <h1>WEB</h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <h2>Welcome</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit
</body>

</html>