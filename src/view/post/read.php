<link href="../../css/style.css" rel="stylesheet">



    <table>
    <?php 
    use App\Modele\Voiture;

    for ($i=0;$i<sizeof($voitures);$i++){
        echo("<div id='container'><tr><th colspan="."'2'"."> Voiture num :".$i."</th></tr>");
    
        echo('<tr><td>'.$voitures[$i]->getImmat().'</td>');
        echo("
        <td rowspan="."'5'"."><img src='assets/images/".$voitures[$i]->getImagePath()."' ></td></tr>" 
        );
    
        echo('<tr><td>'.$voitures[$i]->getModele().'</td></tr>');
    
        echo('<tr><td>'.$voitures[$i]->getMarque().'</td></tr>');
    
        echo('<tr><td>'.$voitures[$i]->getDateVoiture().'</td></tr>');
    
        echo('<tr><td>'.$voitures[$i]->getColor().'</td></tr>');
        echo("<tr><td colspan="."'2'"."> <button class='btn btn-primary btn-lg' type='button'>Achetter</button></td></tr></div>");        
    }
   

    ?>


</table>


