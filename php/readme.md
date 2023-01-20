*** $target_dir = bepaald waar het bestand zal worden geplaatst
    $target_file = bepaald de pad van het upgeload bestand
    $download = de getal is nog niet gebruikt moet nog worden gebruikt
    $imageFileType = bevat de bestandextensies van de bestand 
***

***
$download wordt eerst gecontrolleerd of het bestand bestaat in het mapje waar het naar wordt verwezen als het in het mapje zit krijg je een foutmelding en dan wordt de $download op 0 gezet.
***

***
Als het bestand groter is dan 500kb wordt het wordt er een foutmelding gegeven en wordt de $download op 0 gezet en dan krijg je ook een foutmelding
***

***
$imageFileType controleert of het bestand type klopt zo ja is het goed zo niet dan krijg je een bericht niet goed en dan wordt $download op 0 gezet dat er een fout is.
***


