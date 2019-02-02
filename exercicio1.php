<!DOCTYPE html>
<html>
<head>
    <title>TesteRenanExercício1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/teste/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/teste/exercicio1.php">Exercício1</a>
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

    <?php
    

    echo"<p>Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
    “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
    de ambos (3 e 5), imprima “FizzBuzz”.</p>";
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-sm"></div>';
    echo '<div class="col-sm"';
    echo '<ul class="list-group-flush">';
    for ($i=1; $i<=100; $i++){
     switch ($i) {
        case ($i%3 == 0 && $i%5 == 0 ):
        echo '<li class="list-group-item">FizzBuzz</li>';
        break;
        case ($i%3 == 0):
        echo '<li class="list-group-item">Fizz</li>';
        break;
        case ($i%5 == 0):
        echo '<li class="list-group-item">Buzz</li>';
        break;
        default:	
        echo '<li class="list-group-item">'.$i.'</li>';    
    }
}
echo '</div><div class="col-sm"></div>';   
echo "</ul></div></div>";

?> 
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
</html>

