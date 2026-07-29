<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-v3-ObservationInterpretation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
