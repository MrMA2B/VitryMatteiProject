<?php 

use App\Modele\Voiture;
for ($i=0;$i<sizeof($voitures);$i++){
    echo('Voiture num :'.$i);
    echo('<br>');
    echo($voitures[$i]->getImmat());
    echo('<br>');
    echo($voitures[$i]->getModele());
    echo('<br>');
    echo($voitures[$i]->getMarque());
    echo('<br>');
    echo($voitures[$i]->getDateVoiture());
    echo('<br>');
    echo($voitures[$i]->getColor());
    echo('<br>');
    echo('<br>');
   
}

 ?>