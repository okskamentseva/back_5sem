<html lang="en">
<head>
    <title>Hello page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица Читателей</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Фамилия</th>
        <th>Книга</th>
    </tr>
    <?php
    $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
    $result = $mysqli->query("SELECT * FROM books");
    foreach ($result as $row) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['book']}</td></tr>";
    }
    ?>
</table>

</body>
</html>