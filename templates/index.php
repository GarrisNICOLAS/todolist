<!DOCTYPE html>
<html>
    <head>
    <title>To Do List</title>
    </head>
    <body>
    <?php

  echo "<table border='1'>";
  echo "<tr><th>ID</th><th>Title</th><th>Description</th><th>Status</th><th>Deadline</th></tr>";
  //On appelle toutes les taches mashallah
  foreach ($tasks->fetchAll() as $t) {
      //On appelle toutes les colonnes des taches ici akhy
    echo "<tr>";
    echo "<td>".$t['id']."</td>";
    echo "<td>".$t['title']."</td>";
    echo "<td>".$t['description']."</td>";
    echo "<td>".$t['status']."</td>";
    echo "<td>".$t['deadline']."</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
    </body>
</html>
