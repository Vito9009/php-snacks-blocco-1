<!--
    Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga 
    un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    <!--
        http://localhost/php-snacks-blocco-1/snackB.php?name=vito&mail=fdfdfd@.com&age=31
    -->
</body>
</html>