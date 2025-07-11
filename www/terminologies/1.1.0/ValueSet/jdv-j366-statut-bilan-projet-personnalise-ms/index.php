<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-jdv-j366-statut-bilan-projet-personnalise-ms.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
