<?php
// Wat hieronder staat zijn me variabellen
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["naam"]);
$download = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Contorle of het bestand een afbeelding is of niet
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["dir_naam"]);
  if($check !== false) {
    echo "Bestand is een afbeelding " . $check["bestand"] . ".";
    $download = 1;
  } else {
    echo "Bestand is geen afbeelding";
    $download = 0;
  }
}

// Controle of het een bestaand of gebruikt bestand is
if (file_exists($target_file)) {
  echo "Dit bestand is al in gebruik.";
  $download = 0;
}

// Controle hoe groot het bestand is
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Helaas uw bestand is te groot.";
  $download = 0;
}

// Controle of de bestand type klopt
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Helaas, Alleen de bestand JPG, JPEG, PNG & GIF Kunnen upgeload worden.";
  $download = 0;
}

// Controle of de bestand is gedownload 
if ($download == 0) {
  echo "Helaas uw bestand is niet upgeload";

// Controle of alles werkt zo ja wordt het upgeload
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["dir_naam"], $target_file)) {
    echo "Het Bestand ". htmlspecialchars( basename( $_FILES["fileToUpload"]["naam"])). " is geupload";
  } else {
    echo "Helaas is er een fout opgetreden bij het uploaden van uw bestand.";
  }
}
