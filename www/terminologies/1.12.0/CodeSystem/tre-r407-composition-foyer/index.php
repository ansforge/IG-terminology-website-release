<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r407-composition-foyer.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
