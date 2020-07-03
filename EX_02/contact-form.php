
<?php
if(empty($_POST)){
    echo '<p> Aucune donnée reçue.</p>';
}
else{
    echo '<p> Nom et prénom: '.$_POST['Nom Prénom'].'</p>';
    echo '<p> E-mail: '.$_POST['Adresse e-mail'].'</p>';
    echo '<p> Message: '.$_POST['Message'].'</p>';
}
?>