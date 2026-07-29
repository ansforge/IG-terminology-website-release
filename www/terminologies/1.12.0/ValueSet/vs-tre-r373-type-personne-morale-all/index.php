<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r373-type-personne-morale-all.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
