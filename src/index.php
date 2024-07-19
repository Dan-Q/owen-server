<?php
  require_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fruits</title>
</head>
<body>
  <h1>Fruits</h1>
  <ul>
    <?php
      $result = $db->query('SELECT * FROM fruits ORDER BY name');
      while ($row = $result->fetch_assoc()) {
        ?>
        <li>
          <a href="fruit.php?id=<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?>
          </a>
        </li>
        <?php
      }
    ?>
  </ul>

  <h2>Add a fruit</h2>
  <form method="post" action="add-fruit.php">
    <p>
      <label for="fruit-name">Name:</label>
      <input type="text" name="name" id="fruit-name">
    </p>
    <p>
      <input type="submit" value="Put it in the bowl!">
    </p>
  </form>
</body>
</html>
