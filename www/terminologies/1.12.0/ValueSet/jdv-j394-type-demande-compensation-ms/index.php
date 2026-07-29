<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j394-type-demande-compensation-ms.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
