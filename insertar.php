<?php
include 'conexion.php';
if (isset($_POST['register'])){

    $nombredeusuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
    $mail=mysqli_real_escape_string($conexion,$_POST['mail']);
    $password_1=password_hash($_POST['password_1'], PASSWORD_DEFAULT);
    $password_2=password_hash($_POST['password_2'], PASSWORD_DEFAULT);

    $insertar=mysqli_query($conexion,'insert into registros(username,password,email)
    values ("'.$nombredeusuario.'","'.$password_1.'","'.$mail.'")') or die ('No se pudo registrar<br>'.mysqli_error($conexion));
    header('location: ./');
    mysqli_close($conexion);

}else{
  header('location: ./');
}
?>
