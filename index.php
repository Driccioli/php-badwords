<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->

<?php

$paragraph="How many breads have you eaten in your life? Did you ever hear the tragedy of Darth Plagueis the Wise? Lorem Ipsum Yadda Yadda";
$paragraphLength = strlen($paragraph);

echo $paragraph . "<br>";
echo "Paragraph length: ". $paragraphLength. "<br>";

$censoredWord = $_GET["censoredWord"];

$censoredParagraph= str_ireplace($censoredWord, "***", $paragraph);
$censoredParagraphLength = strlen($censoredParagraph);

echo "<br>Censored word: ". $censoredWord. "<br><br>";
echo $censoredParagraph. "<br>";
echo "Censored paragraph length: ".$censoredParagraphLength. "<br>";

?>