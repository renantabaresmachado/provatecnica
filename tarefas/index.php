
<?php
$con=  mysqli_connect("localhost", "root", "root", "testdot");
$select="Select * from tarefas Order By prioridade";
$result=  mysqli_query($con, $select);
$count=  mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Test Renan Exercício 4</title>


  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link " href="/index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/exercicio1.php">Exercício1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/exercicio2.php">Exercício2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/exercicio3.php">Exercício3</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/teste/tarefas">Exercício4</a>
    </li>
  </ul>
  <table class="table table-bordered table-striped" id="tablelist">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Prioridade</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if($count<1){}else
      {
        foreach ($result as $row) {
          ?>
          <tr id="<?php echo $row["id"]; ?>">
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["titulo"]; ?></td>
            <td><?php echo $row["prioridade"]; ?></td>
            <input type="hidden" value="<?php echo $row["id"]; ?>" id="item" name="item">
          </tr>
          <?php 
        }
      }
      ?>
    </tbody>
  </table>
  <script src="jquery.min.js"></script>
  <script src="jquery-ui.min_1.js"></script>
  <script>
    var $sortable = $( "#tablelist > tbody" );
    $sortable.sortable({
      stop: function ( event, ui ) {
        var parameters = $sortable.sortable( "toArray" );
        $.post("tarefaPosition.php",{value:parameters},function(result){
          alert(result);
        });
      }
    });
  </script>
</body>
</html>