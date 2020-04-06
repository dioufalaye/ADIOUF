
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" href="index2.css">
<title>CONTACTEZ-MOI</title>
    <title>CONTACTEZ-MOI</title>
</head>
<body >
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
        <h2>FORMULAIRE D'INSCRIPTION</h2>
        </div>
        <div class="row">
            <div class="col-lg-10-col-lg-offset-1">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contact-form" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prenom<span class="blue"> *<span></span></label>
                            <input type="text" name="firstname"  class="form-control" id="firstname" placeholder="votre prenom" value="">
                            <p class="comments"></p>
                        </div>

                        

                   
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *<span></span></label>
                           <input type="text" name="name" class="form-control" id="name" placeholder="votre nom" value="">
                            <p class="comments"></p>
                        </div>
                            
                        <div class="col-md-6">
                            <label for="email">ADRESSE<span class="blue"> *<span></span></label>
                           <input type="text"  name="email" class="form-control" id="email" placeholder="votre email" value="">
                            <p class="comments"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="telephone">telephone</label>
                           <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="votre telephone" value="">
                            <p class="comments"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="telephone">confirmation de numero </label>
                           <input type="tel" name="telephone2" class="form-control" id="telephone" placeholder="veuillez confirmer votre numero" value="">
                            <p class="comments"></p>
                        </div>

                        <div id="text1">   <p>Choisir votre Genre:</p></div>
            <select name="genre" id="gender">
                <option id="man" value="homme" selected="selected">Homme</option>
                <option id="woman" value="femme">Femme</option>
            </select>
            <!--c -->
            <div id="text2">     <p>Etes vous satisfait:</p></div>
            <input type="radio" id="Oui" name="satisfait" value="Oui" checked="checked">
            <label for="Oui">Oui</label>
            <input type="radio" id="Non" name="satisfait" value="Non">
            <label for="Nom">Non</label>
            <!--d -->
            <div id="text3"><p>Choisissez vos langues</p> </div>
            <input type="checkbox" id="langue1" name="langue1" value="Francais" checked="checked">
            <label for="langue1"> Francais</label>
            <input type="checkbox" id="langue2" name="langue2" value="Anglais">
            <label for="langue2">Anglais</label><br>
            <input type="checkbox" id="langue3" name="langue3" value="Espagnole">
            <label for="langue3">Espagnole</label>
            <input type="checkbox" id="langue4" name="langue4" value="Portuguais">
            <label for="langue4">Portugais</label><br>

                        <div class="col-md-12">
                            <label for="message">message<span class="blue"> *<span></span></label>
                            <textarea name="message" id="message" cols="30" rows="4" class="message" placeholder="votre message"></textarea>
                            <p class="comments"></p>
                        </div>

                        <div class="col-md-12">
                            <p class="blue"><strong>*Ces informations sont requises</strong></p>
                        </div>

                        <div class="col-md-12">
                            <input type="submit" class="button1" name="Envoyer" value="Envoyer">
                        </div>

                        </div>

                   
                        <p class="thanks-you" style="display: Votre message a ete bien enregistre .Merci de m'avoir contacter :)</p>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <?php 
    //DEBUT PHP
        include('fonction.php');
        $k=0;
        if(isset($_POST['langue1']) )
        
        {
            $k=$k+1;
            $_SESSION['L1']=($_POST['langue1']);

        }
        if(isset($_POST['langue2']))
        {
            $_SESSION['L2']=($_POST['langue2']);
            $k=$k+1;
        }
        if(isset($_POST['langue3']))
        {
            $_SESSION['L3']=($_POST['langue3']);
            $k=$k+1;
        }
        if(isset($_POST['langue4']))
        {
            $_SESSION['L4']=($_POST['langue4']);
            $k=$k+1;
        }
        
        if(isset($_POST['Envoyer']) && $k>=2 &&  Maj($_POST['firstname']) && Maj($_POST['name']) &&  adresseValide($_POST['email']) && verifNumeroIdentique($_POST['telephone'], $_POST['telephone2']) && validecommentairebi($_POST['commentaire']))
        {
        
             $_SESSION['PrenomV']=Maj($_POST['firstname']);
             $_SESSION['NomV']=Maj($_POST['name']);
             $_SESSION['GenreV']=$_POST['genre'];
             $_SESSION['AdresseV']=adresseValide($_POST['adresse']);
             $_SESSION['telephoneV']=numeroValide($_POST['telephone']);
             $_SESSION['Satifaction']=$_POST['satisfait'];
             

        }
        elseif($k<2)
        {
            echo "le nombre de choix minimale est 2";
        }
        elseif(!Maj($_POST['firstname']))
        {
            echo "le prenom doit etre Alphabetique";
            $_POST['prenom']="";
        }
        elseif(!Maj($_POST['nom']))
        {
            echo "le nom doit etre Alphabetique";
            $_POST['nom']="";
        }
        elseif(!adresseValide($_POST['adresse']))
        {
            echo "l'adresse doit etre alphanumerique";
            $_POST['adresse']="";
        }
        elseif(!verifNumeroIdentique($_POST['phone1'], $_POST['phone2']))
        {
            echo "votre numero n'est pas valides ou pas identiques a celle confirmé ";
            $_POST['phone1']="";
            $_POST['phone2']="";

        }
        if(isset($_POST['commentaire'])){
            if(!validecommentairebi(commentaire))
        {
           echo " votre commentaire est invalide.";
        }
        }
        if(isset($_POST['reinitialiser']))
        {
            $_POST['adresse']="";
            $_POST['phone1']="";
            $_POST['phone2']="";
            $_POST['prenom']="";
            $_POST['nom']="";

        }

    ?>
</body>
</html>