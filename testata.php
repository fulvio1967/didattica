<?php 
// Sezione Head comune a tutte le pagine
$head = "<head>";
$css = "<link href='stile.css' rel='stylesheet' type='text/css'>";
$head_close = "</head>";

// Stampa la testata
echo $head . $css . $head_close;

// Corpo della testata
echo "<div class='testata'>
        <h1>FULMONT</h1>
        <h2>Web Developer</h2>
        <h3>www.fulmont.it</h3>
      </div>";
?>