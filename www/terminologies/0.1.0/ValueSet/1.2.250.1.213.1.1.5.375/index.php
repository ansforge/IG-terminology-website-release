<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-1.2.250.1.213.1.1.5.375.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
