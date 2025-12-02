<?php
// TESTATA DEL SITO
include("testata.php"); 

// Sezione Header comune
$header = "<body><header><h1 id='uno'></h1></header>";
echo $header;

// Corpo della pagina

// Griglia 3x3
echo "<div class='griglia'>
        <div class='quadrato q1'>1</div>
        <div class='quadrato q2'>2</div>
        <div class='quadrato q3'>3</div>
        <div class='quadrato q4'>4</div>
        <div class='quadrato q5'>5</div>
        <div class='quadrato q6'>6</div>
        <div class='quadrato q7'>7</div>
        <div class='quadrato q8'>8</div>
        <div class='quadrato q9'>9</div>
      </div>";

// FOOTER PIE DI PAGINA DEL SITO
require("footer.php"); // obbligatorio
?>