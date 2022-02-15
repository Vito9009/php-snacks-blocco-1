<!--
    Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga 
    un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
    $nome = $_GET['name'];
    $email = $_GET['mail'];
    $eta = $_GET['age'];

    if (empty($nome) === false && empty($email) === false && empty($eta) === false) {
        if(strlen($nome) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($eta)){
            echo 'Accesso riuscito';
        }else{
            echo 'Accesso negato';
        }
    }else{
        echo "Verifica di avere inserito tutti i dati richiesti";
    }
?>