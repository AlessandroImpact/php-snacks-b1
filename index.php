<?php


/*SNACK2 
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un
 punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$nameControl = $_GET["name"];

$emailDotControl = $_GET["email"];

$emailControlAt = $_GET["email"];

$ageControl = $_GET["age"];

if(!empty($_GET["name"]) || !empty($_GET["email"]) || !empty($_GET["age"])){

    if(strlen($nameControl) >= 3 && strpos($emailDotControl , '.') !== false && strpos($emailControlAt , '@') !== false && is_numeric($ageControl)){

        echo "Accesso Riuscito <br/>";
    }else{
        echo "Accesso Negato <br/>";
    };

    
}else{
    echo "Inserire correttamente i dati <br/>";
}


/* SNACK5
Prendere un testo abbastanza lungo, contenente diverse frasi. 
Prendere il testo e suddividerlo in tanti paragrafi ogni volta 
in cui si incontrerà un punto. */

$paragraphBig = "lorem ipsum. sit manet . nullam frigissam quesque dunit. Questa è una frase di prova in latino. Check.";

$paragraphXploded = explode(".", $paragraphBig);



for($i=0; $i < count($paragraphXploded); $i++){
    echo $paragraphXploded[$i] . "." . "<br/>";
}