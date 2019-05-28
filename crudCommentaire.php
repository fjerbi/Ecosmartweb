<?php
require_once('connect.php');
	require('FPDF/fpdf.php');



if ($type == 'ajout'){
$sql = "INSERT INTO `commentaire`(`id_annonce`, `id_user`, `contenu`, `date_creation`)

VALUES(".$_GET["idBonPlan"].",'".$_GET["idAuteur"]."','".$_GET["contenu"]."',NOW())";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

else if($_GET["type"]=="supprimer"){

$sql= "DELETE FROM commentaire WHERE id=".$_GET["idCommentaire"]." ";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}	

else if($_GET["type"]=="afficher"){
$sql="SELECT * FROM commentaire where id_bon_plan=".$_GET["idBonPlan"]."";

 $res = mysqli_query($conn,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	array_push($result,
		array('id'=>$row['id'],
			  'idBonPlan'=>$row['id_bon_plan'],
			  'idAuteur'=>$row['id_auteur'],
			  'contenu'=>$row['contenu'],
			  'dateCreation'=>$row['date_creation']
			)
	);

}

}


else if($_GET["type"]=="getAuteur"){
$sql="SELECT * FROM Utilisateur where id=".$_GET["idAuteur"]."";
while($row = mysqli_fetch_array($res)){
	array_push($result,
		array('id'=>$row['id'],
			  'username'=>$row['username'],
			  'photoDeProfil'=>$row['photo_de_profil'],
			  'nom'=>$row['nom'],
			  'prenom'=>$row['prenom']
			)
	);

}

}



else if($_GET["type"]=="reservationPdf"){
$pdf = new FPDF();
$pdf->AddPage();

//Nom Professionnel	
$pdf->SetFont('Arial','B',25);
$pdf->setTextColor(0,0,204);
$pdf->setX(75);
$pdf->Cell(40,10,$_GET["professionnel"]);
$pdf->Ln(30);
//Nom Bon Planeur
$pdf->setTextColor(0,0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(40,10,"Nom : "." ".$_GET["nom"]);
$pdf->Ln(15);
//Prenom Bon Planeur
$pdf->Cell(40,10,"Prenom : "." ".$_GET["prenom"]);
$pdf->Ln(15);
//Date Reservation
$pdf->Cell(40,10,"Date Reservation : "." ".$_GET["dateReservation"]);
$pdf->Ln(15);
//Nombre de Places
$pdf->Cell(40,10,"Nombre de places: "." ".$_GET["nbPlaces"]);	
$pdf->Output();

}

else if($_GET["type"]=="reservationAuthor")
{
	$sql="SELECT id_auteur FROM reservation JOIN bon_plan ON reservation.id_bon_plan=bon_plan.id";
	while($row = mysqli_fetch_array($res)){
	array_push($result,
		array('reservationAuthor'=>$row['id_auteur']
			)
	);

}
}



else if($_GET["type"]=="test"){
$sql="SELECT * FROM Utilisateur where id=".$_GET["idAuteur"]."";
$db = Db::getInstance();
$stmt = $db->prepare($sql);
$stmt->execute();
 echo json_encode($stmt->fetchAll());
}





?>