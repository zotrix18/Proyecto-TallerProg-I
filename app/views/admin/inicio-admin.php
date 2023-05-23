<?=$cabecera?>


<?php
$session=session();
if($session->has('usuario')){
    echo "Bienvenido, ";
}else{
    echo "adius ";
}
?>
    
<!-- asdasdadas -->

<?=$pie?>