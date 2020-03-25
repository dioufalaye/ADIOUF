
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P> choisir</P>
    <form action="" method="POST" >
        <label for="fra">calendrier francais</label>
        <input type="checkbox"  name="langue" value="fr"><br/>
        <label for="eng">calendrier englais</label>
        <input type="checkbox"  name="langue" value="en"><br/>
        <input type="submit" name="valider" >
    </form>
        <?php 
            if (isset($_POST['valider']) && isset($_POST['langue']) && !empty($_POST['langue']))
            {
                $tab=array(
                    '1'=>['janvier','january'],
                    '2'=>['fevrier','febriary'],
                    '3'=>['mars','mars'],
                    '4'=>['avril','april'],
                    '5'=>['mai','may'],
                    '6'=>['juin','jun'],
                    '7'=>['juillet','july'],
                    '8'=>['aout','august'],
                    '9'=>['septembre','september'],
                    '10'=>['octobre','october'],
                    '11'=>['novembre','november'],
                    '12'=>['decembre','december']);
                    if ($_POST['langue']=='fr') 
                    {
                       echo '<table border 1>';
                       for ($i=1; $i < 13; $i+=3) 
                       { 
                           echo '<tr>';
                                for ($j=$i; $j <=$i+2 ; $j++) { 
                                    echo '<td>'.$j.'</td>';
                                    echo '<td>'.$tab[$j][0].'</td>';
                                }
                           echo '</tr>';
                       }     
                       echo '</table>';                        
                    }

                    if ($_POST['langue']=='en') 
                    {
                       echo '<table border 1>';
                       for ($i=1; $i < 13; $i+=3) 
                       { 
                           echo '<tr>';
                                for ($j=$i; $j <=$i+2 ; $j++) { 
                                    echo '<td>'.$j.'</td>';
                                    echo '<td>'.$tab[$j][1].'</td>';
                                }
                           echo '</tr>';
                       }     
                       echo '</table>';                        
                    }
            }
        ?>
    
</body>
</html>