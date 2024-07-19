<?php
  require_once('db.php');
  $db->query('DELETE FROM fruits WHERE id=' . intval( $_POST['id'] ));
  header('Location: /');
?>
