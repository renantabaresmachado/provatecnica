<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>TestRenanExercício2</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/teste/index.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/teste/exercicio1.php">Exercício1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/exercicio2.php">Exercício2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/exercicio3.php">Exercício3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/teste/tarefas">Exercício4</a>
    </li>
  </ul>
  
  <p>
    2. Refatore o código abaixo, fazendo as alterações que julgar necessário.
  </p>
  <textarea readonly rows='15' cols='80'>
    <?		   

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {   
      header("Location: http://www.google.com");  
      exit();  
    } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {  
      header("Location: http://www.google.com");  
      exit();  
    }
    ?>
  </textarea>
  <p>
    Resposta
  </p>
  <textarea readonly rows='15' cols='80'>
    <?   
    session_start();
    if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {   
     header("Location: http://www.google.com");  
     exit();  
   } elseif (!isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {  
    header("Location: http://www.google.com");  
    exit();  
  }

  ?>
</textarea>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
</body>
</html>
