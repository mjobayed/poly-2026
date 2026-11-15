<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Display data table</title>
  </head>
  <body>
    <h1>Data Table</h1>
    <table cellpadding=10>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
      </tr>
      <?php

      $conn = include "./db.php";

      $sql = "select * from students;";

      // object oriented style ->
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["phone"] . "</td>";
          echo "<td>" . $row["department"] . "</td>";
          echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>
