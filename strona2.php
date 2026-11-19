<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Uczniowie2</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="">
  <button type="submit" name="pokaz">pokaz baze</button>
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pokaz"])) {
    $db = new PDO("sqlite:" . __DIR__ . "/baza2.sqlite");
    $sql = file_get_contents(__DIR__ . "/baza2.sql");
    $db->exec($sql);

    $wynik = $db->query("SELECT * FROM uczniowie2");

    echo "<table>";
    echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th></tr>";
    foreach ($wynik as $wiersz) {
        echo "<tr>";
        echo "<td>" . $wiersz["id"] . "</td>";
        echo "<td>" . $wiersz["imie"] . "</td>";
        echo "<td>" . $wiersz["nazwisko"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>