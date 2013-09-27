<?php

echo "Du vil nÃ¥ motta vÃ¥rt nyhetsbrev. Takk for at du registrete deg!<br>";
$fornavn =         $_POST['fornavn'];
$etternavn =     $_POST['etternavn'];
$epost =         $_POST['epost'];
$lagre =         $_POST['lagre'];
$hente =         $_POST['hente'];

if ($lagre)        
    lagre($fornavn, $etternavn, $epost);
else if ($hente)
    hente();
else echo "Noe er feil";     


function lagre($fornavn, $etternavn, $epost)
{    
    $file=fopen("test.txt","a");    
    $fornavn=$fornavn."\n";
    $etternavn=$etternavn."\n";
    $epost=$epost."\n";

    fwrite($file,$fornavn); 
    fwrite($file,$etternavn); 
    fwrite($file,$epost); 
    fclose($file);    
}


function hente()
{    $file=fopen("test.txt","r");
    $teller = 1; 
    while (!feof($file))     
    {    $fornavn=fgets($file);
        $etternavn=fgets($file);
        $epost = fgets($file);
        echo "Bruker nr $teller: <br>";
        echo "Fornavn: $fornavn  ";
        echo "Etternavn:  $etternavn <br>";
        echo "Epost:  $epost <br><br>"; 
        $teller++;    
    }    
    fclose($file);
}
?>
