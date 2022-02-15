<!--
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo.
-->

<?php
    $testoCanzone = "By a lonely prison wall, I heard a young girl calling Michael, they have taken you away, For you stole Trevelyan's corn, So the young might see the morn. Now a prison ship lies waiting in the bay. Low lie the fields of Athenry Where once we watched the small free birds fly Our love was on the wing We had dreams and songs to sing It's so lonely round the fields of Athenry. By a lonely prison wall, I heard a young man calling Nothing matters, Mary, when you're free Against the famine and the crown, I rebelled, they cut me down. Now you must raise our child with dignity. Low lie the fields of Athenry Where once we watched the small free birds fly Our love was on the wing We had dreams and songs to sing It's so lonely round the fields of Athenry. By a lonely harbor wall, she watched the last star falling As the prison ship sailed out against the sky Sure she'll wait and hope and pray, for her love in Botany Bay It's so lonely round the fields of Athenry. Low lie the fields of Athenry Where once we watched the small free birds fly Our love was on the wing We had dreams and songs to sing It's so lonely round the fields of Athenry.";

    $paragrafoCanzone = explode(".", $testoCanzone);
                    
    // var_dump($paragrafoCanzone);                             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            for($i = 0; $i < count($paragrafoCanzone); $i++){
                echo "<p>" . $paragrafoCanzone[$i] . "</p>";
            }; 
        ?>
    </div>
</body>
</html>