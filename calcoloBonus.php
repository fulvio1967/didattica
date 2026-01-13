<?php
    $reddito =$_POST['reddito'];
    $residenza =$_POST['residenza'];
    $ristruttura=$_POST['ristrutturazione'];
    $efficienza=$_POST['efficienza'];
    $sogliaReddito=25000;
   
function verificaBonusElettrodomestici($red, $eff, $res, $ris, $soglia ) {
    $esitoRed=true;
    $esitoEff=true;
    $esitoRes=true;
    $esitoRis=true;
    // Verifica reddito
    if ($red > $soglia) {
        $esitoRed=false;
        echo  "Reddito troppo alto per accedere al bonus.<br>";

    }
   
    if ($eff < 1 ) {
        $esitoEff=false;
        echo "Gli elettrodomestici acquistati devono avere almeno efficienza A+.<br>";
         
    }

    if ($res ==0) {
        $esitoRes=false;
        echo "È necessario avere la residenza in Italia.<br>"; 
    }
    if ($ris == 0 ) {
        $esitoRis=false;
        echo "È necessario avere in corso una ristrutturazione.<br>";
        
    }
    // Se tutte le condizioni sono rispettate
    if ($esitoRed && $esitoEff && $esitoRes && $esitoRis){
        echo "Tutte le condizioni sono soddisfatte. Puoi accedere al bonus.<br>";
    }
}
    verificaBonusElettrodomestici($reddito, $residenza, $ristruttura, $efficienza,  $sogliaReddito );


?>
