<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="authentification.css">
    <title>Auhentification</title>
</head>
<body>
    <div class="titre">
            <img src="image/logo-QuizzSA.png" alt="" class="image">
            <label for="" class="slogan">Le plaisir de jouer </label>
            
     </div>
    <div class="cadre">
         
        <div class="inscription">
            <div class="gauche">
                <div class="gaucheHaut">
                    <label for="">S'inscrire</label><br>
                    <p>Pour tester votre niveau</p>
                </div>
                <div class="gaucheBas">
                    <form action="" class="adherer" enctype="multipart/form-data">
                        <label for="">Prenom</label><br>
                        <input type="text" placeholder="Aaaa" name="prenom" class="prenom"><require><br>
                        <label for="">Nom</label><br>
                        <input type="text" placeholder="BBBB" name="prenom" class="prenom"><require><br>
                        <label for="">login</label><br>
                        <input type="text" placeholder="Login" name="Login" class="prenom"><require><br>
                        <label for="">Passeword</label><br>
                        <input type="password" placeholder="...." name="passeword" class="prenom"><require><br>
                        <label for="">Confirmer Passeword</label><br>
                        <input type="password" placeholder="...." name="passeword" class="prenom"><require><br>
                        <label for="">Avatar</label>
                        <input type="file" name="avatar" id="" class="bouton">
                        <input type="submit" value="Creer_compte" name="creer_compte" class="bouton"id="compte">

                    </form>
                </div>
            </div>
            <div class="droite">
                <div class="photo"></div>
            </div>


        </div>
    
        
    </div>
    
</body>
</html>