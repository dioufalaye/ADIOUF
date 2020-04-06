<?php
function truePhrase($phrase){
    if(preg_match('/^[A-Z]{1}.+[.!?]$/',$phrase)){
        $resultat="phrase valide";
    }else{
        $resultat="phrase invalide";
    }
    echo $resultat;
    return $resultat;
}
function decoupe_texte_en_phrase($chaine)
{
    $tabphrse= preg_split("#[.|!|?]{1,}#" ,$chaine);
    foreach($tabphrse as $value)
    {
        if(preg_match('/[A-Z]/',$value))
        {
           echo $value;
        }
    }
    
    
}

function nombrephrase($commentaire)//OK
    {
       preg_match_all('#[a-z]([^.!?]|([.][0-9]))*[.?!]#i' ,$commentaire,$tab);
        
        $i=0;
           foreach($tab[0] as $key=>$value)
           {
               $i++;
            
           }
           return $i;   
    }

function  Rec_ph($texte){
    preg_match_all('#[A-Z][.*1-9][^.!?]*[.!?]#i',$texte,$phrase);
    echo "<pre>";
    print_r($phrase[0]);
    echo "<pre>";
    }

    function recuperateur_phrase_bis(string $texte)
    {
        preg_match_all('#[a-z](([^.!?]|([0-9][.*][0-9])).+){1,198}[.?!]#i' ,$texte,$phrases);
        
        return $phrases;       
    } 


    function correcteur_espace($texte){
        $texte=trim($texte);
        $correction_espace=preg_replace('#[ ]+#',' ',$texte);
        $correction_apostrophe=preg_replace('#([ ]+\' | \'[ ])#','\'',$correction_espace);
        $correction_virgule=preg_replace('#([ ]+,)#',',',$correction_apostrophe);
        $correction_point_virgule=preg_replace('#([ ]+;)#',';',$correction_virgule);
        $correction_point=preg_replace('#([ ]+\.)#','.',$correction_point_virgule);
        return $correction_point;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">

       
    <textarea name="text" placeholder="s'aisir un text" cols="30" rows="10"></textarea><br></br>
    <input type="submit" name="valider" value= valider>
    </form>
    <?php

  if(isset($_POST['valider']))
  {
      if (isset($_POST['text'])) 
      {
        if (!empty($_POST['text']) )
        {
            $text=$_POST['text'];
           $text1=correcteur_espace($text);
           if(recuperateur_phrase_bis($text1))
           {
               $textf=ucfirst($text1);
               
               ?>
            <textarea name="" id="" cols="30" rows="10" disabled><?php echo $textf?></textarea>
               <?php
           }                
                
        }
        else
        {
            echo "saissie please";
        }
    }
}
          
?>
    
</body>
</html>