<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/ValueSet-jdv-type-acte-post-partum-cisis.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
