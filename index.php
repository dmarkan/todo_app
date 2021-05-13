
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>To Do app</title>
</head>
<body>
    <header>
    <div class="card text-center">
  <div class="card-header">
  For your daily tasks
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><h1>TO DO APP</h1></p>
  </div>
  <div class="card-footer text-muted">
    Organize your day
  </div>
</div>
    </header>
    <main>
    
    <form action="save_task.php" method="post">
    <input type="text" name="task" placeholder="New task">
    <button class="btn btn-primary"type="submit">Add</button>
    </form> <br>
    <?php 
require "connection.php";
    $sql = "SELECT * FROM tasks";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    ?>
    <?php foreach($result as $row): ?>
    <?php echo $row['task']; ?><form action="delete.php?id=<?php echo $row['id'] ?>" method="post">
    <button class="btn btn-danger" type="submit">Delete</button>
    </form><hr>
    <?php endforeach ?>
    <?php
 
    mysqli_close($db);
?>
    </main>
</body>
</html>