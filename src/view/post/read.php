<link href="../../css/style.css" rel="stylesheet">



    <table>
    <?php 
    use App\Modele\Voiture;

    for ($i=0;$i<sizeof($voitures);$i++){
        if($voitures[$i]->getisSold()==0){

                echo("<div id='container'><tr><th colspan="."'2'"."> Voiture num :".$i."</th></tr>");
            
                echo('<tr><td>'.$voitures[$i]->getImmat().'</td>');
                echo("
                <td rowspan="."'5'"."><img src='assets/images/".$voitures[$i]->getImagePath()."' ></td></tr>" 
                );
            
                echo('<tr><td>'.$voitures[$i]->getModele().'</td></tr>');
            
                echo('<tr><td>'.$voitures[$i]->getMarque().'</td></tr>');
            
                echo('<tr><td>'.$voitures[$i]->getDateVoiture().'</td></tr>');
            
                echo('<tr><td>'.$voitures[$i]->getColor().'</td></tr>');
                echo("<tr><td colspan="."'2'".">
                <form action='index.php' method='GET'>
                    <input type='hidden' name='action' value='update'>
                    <input type='hidden' name='immat' value='".$voitures[$i]->getImmat()."'>
                    <input type='submit' value='Acheter' >
                </form>
                    </td></tr></div>");     
                }   
    }
   

    ?>


</table>


