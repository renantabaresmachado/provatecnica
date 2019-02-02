<?php
foreach ($_POST["value"] as $key => $value) {
    $data["prioridade"]=$key+1;
    updatePosition($data, $value);
}
echo "Prioridade Modificada!";
function updatePosition($data,$id){
    $con=  mysqli_connect("localhost", "root", "root", "testdot");
    if(array_key_exists("titulo", $data)){
        $data["titulo"]=$this->real_escape_string($data["titulo"]);
    }
    foreach ($data as $key => $value) {
        $value="'$value'";
        $updates[]="$key=$value";
    }
    $imploadAray=  implode(",", $updates);
    $query="Update tarefas Set $imploadAray Where id='$id'";
    $result=  mysqli_query($con,$query) or die(mysqli_error($con));
        if($result){
            return "alteração bem sucedida1!";
        }
        else
        {
            return "Erro ao modificar prioridade!";
        }
}
