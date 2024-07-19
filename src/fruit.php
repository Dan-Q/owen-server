<?php
  require_once('db.php');
  $fruits = $db->query('SELECT * FROM fruits WHERE id=' . intval( $_GET['id'] ) . ' LIMIT 1');
  $fruit = $fruits->fetch_assoc();
  if( ! $fruit ) {
    // 404:
    http_response_code(404);
    die();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fruit: <?php echo $fruit['name']; ?></title>
</head>
<body>
  <h1>Fruit: <?php echo $fruit['name']; ?></h1>
  <p>
    ID: <?php echo $fruit['id']; ?><br>
    Name: <?php echo $fruit['name']; ?><br>
  </p>

  <p>
    <form method="post" action="delete-fruit.php">
      <input type="hidden" name="id" value="<?php echo $fruit['id']; ?>">
      <input type="submit" value="Delete this fruit">
    </form>
  </p>

  <p>
    <a href="/">Back to list</a>
  </p>
</body>
</html>
