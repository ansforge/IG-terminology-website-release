<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/ValueSet-jdv-modalite-demande-acte-imagerie-cisis.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
