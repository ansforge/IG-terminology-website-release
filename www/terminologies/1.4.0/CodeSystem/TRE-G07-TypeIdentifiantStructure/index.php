<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-G07-TypeIdentifiantStructure.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
