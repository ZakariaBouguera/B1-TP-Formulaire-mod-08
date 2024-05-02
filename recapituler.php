<!DOCTYPE html>
<html lang="fr">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ricapulatif</title>

</head>


<?php 


$mode = $_POST ["mode"];
// variable qui prend la vlaeur entré par l'utilisateur 
$civilite = ucfirst ($_POST["civilite"]);
$nom = ucfirst ($_POST["nom"]);
$prenom = ucfirst ($_POST["prenom"]);
$tel = ucfirst ($_POST["tel"]);
$email = ucfirst ($_POST["email"]);
$raison = ucfirst ($_POST["raison"]);
$methode = ucfirst ($_POST["mode"]);
$message = ucfirst ($_POST["message"]);

//tableau comportant le nom des champs obligatoire
$info_requi = array ("nom", "prenom", "tel", "email");
//Ce morceau de code permet de vérifier si un des champs obligatoire est vide
// on crée un tableau vide, avec la boucle foreach on parcours le tableau des champs requis ensuite avec "empty" on vérifie 
//si un des champs est vide si c'est le cas on l'ajoute dans le tableau verification
$verification = array();
foreach ($info_requi as $info) {
    if (empty($_POST[$info])) {
        $verification[] = $info;
    }
}
//on indique les champs obligatoire manquant, cette partie fonctionne seulement si l'utilisateur oublie un champ obligatoire
if (!empty($verification)) {
    echo "<p>Les champs suivants sont obligatoires Veuillez les completer : </p>";
    echo "<ul>";
    //on met le nom des champs sous forme de liste
        foreach ($verification as $verification_lister) {
            echo "<li><span style='color: red;'>".ucfirst($verification_lister)."</span></li>";
        }
	echo "</ul>";
}
// on affiche le recapitulatif des informations du client, cet partie fonctionne seulement si l'utilisateur remplis tout les champs 
else{
		echo "Recapitulatif de tout les informations que vous avez renseignez, Merci et à bientôt";
		echo "<ul>";
        echo "<li>Civilité: " . $civilite . "</li>";
        echo "<li>Nom: " . $nom . "</li>";
        echo "<li>Prénom: " . $prenom . "</li>";
        echo "<li>Numéro de téléphone: " . $tel . "</li>";
        echo "<li>Adresse électronique: " . $email. "</li>";
        echo "<li>Raison : " .$raison. "</li>";
        echo "<li>Modes de réponses: " . $methode . "</li>";
        echo "<li>Message complémentaire: <br/>" . $message. "</li>";
        echo "</ul>";
   }
?>
<div><a href = saisieContact.html> Retourner au formulaire </a></div>
