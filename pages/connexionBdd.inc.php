<?php
  #ici on doit vérifier le mot de passe login de la session de l'user
  # vérif si il existe déjà
  # vider au préalable la BDD
  # retester en se connectant avec les mêmes paramètres d'enregistrement
  # confère exo user_connextion

// Configuration de la base de données
    $serveur = "localhost";
    $nomBaseDeDonnees = "creer_un_compte";
    $utilisateur = "root";
    $motDePasse = "root";

# Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    try {
        // Connexion à la base de données avec PDO
        $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       /*  // Préparer la requête SQL pour récupérer l'utilisateur avec le mail spécifié
        $requete = $connexion->prepare("SELECT * FROM utilisateurs WHERE mail = :mail");
        $requete->bindParam(":mail", $mail);
        $requete->execute();
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC); */

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if(isset($_POST["mail"]) || isset($_POST["password"])){
            try {
                $reponse = $connexion->query("SELECT mail, password FROM  utilisateurs WHERE mail = '{$_POST['mail']}' limit 1");
                $DATA = $reponse->fetch();
                $mail = $_POST["mail"];
                $password = $_POST["password"];
                if(!$mail || !$password){
                    echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
                }
                else if(!password_verify($_POST["password"],$DATA['password'])){
                    echo '<p class="warning">Erreur login ou mot de passe?</p>';
                        }
                    else if(password_verify($_POST["password"],$DATA['password']))
                    {
                    print "Vous êtes connectes";                             
                    }
            } catch (Exception $e) {
            //throw $th;
            }
        }

    
    } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}
?>