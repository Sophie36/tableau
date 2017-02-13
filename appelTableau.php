<?php
require_once('include/infoConnexion.php');
require_once('include/executeRequete.php');
require_once('include/connexion.php');
require_once('tableau.class.php');
$obTableau= new Tableau();//creation d'un nouvel objet

$cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);
$sql="SELECT * FROM auteur";//Je récupère dans ma base de données bibliotheque
$idRequete=executeRequete($cnx,$sql);

$tab=setId();
$tab=getId();
$tab=setNom();
$tab=getNom();
$tab=getPrenom();

while($row=$idRequete->fetch){// je met les infos dans un tableau
    $id_auteur = $row['ID auteur']; 
    $nom = $row['Nom']; 
    $prenom = $row['Prénom'];
    $tab=new Tableau($id_auteur,$nom,$prenom);
    $liste[] = $tab;
    $tab->afficheHTML();
} // je parcours maintenant mon tableau pour l'afficher 


?> 
<table id_auteur="liste" > 
<tr> 
<th>ID</th> 
<th>Nom</th> 
<th>Prénom</th> 
</tr> 

<?php 
foreach($liste as $tableau) 
{ ?> 
<tr> 
<td><?php echo $tableau->getId().'<br/>';?></td> 
<td><?php echo $tableau->getTitre().'<br/>';?></td> 
<td><?php echo $tableau->getDescription().'<br/>';?></td> 
<tr><?php 
}
echo '<pre>'; 
var_dump($liste); 
echo '</pre>';
?> 
</table> 

http://www.commentcamarche.net/forum/affich-25347653-php-parcourir-un-tableau-d-objet
