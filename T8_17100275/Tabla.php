<html>
    <head>
        <title>
           Tarea 8 | Web
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

          <h2>Tarea 8 | 17100275</h2>
          <form>

  <table class="table">
  <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Materia</th>
          <th>Horario</th>
        </tr>
      </thead>
      <tbody>

      <?php
      include 'db_connection.php';
      $conn = OpenCon();
      $sql = "SELECT * from docente";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>".$row['DocenteID']."</td>";
     echo "<td>".$row['Nombre']."</td>";
     echo "<td>".$row['Apellido']."</td>";
     echo "<td>".$row['Materia']."</td>";
     echo "<td>".$row['Horario']."</td>";
     echo "</tr>";
      }     
      ?>
      </tbody>
    </table>
  
          </form>
        </div>
      </div>
    </body>

</html>