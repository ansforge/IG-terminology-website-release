<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R58-AutreTypeDiplome.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
