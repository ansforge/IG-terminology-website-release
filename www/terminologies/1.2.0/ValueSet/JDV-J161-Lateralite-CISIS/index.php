<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ValueSet-JDV-J161-Lateralite-CISIS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
