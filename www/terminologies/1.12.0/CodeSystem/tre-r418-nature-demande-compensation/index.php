<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r418-nature-demande-compensation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
