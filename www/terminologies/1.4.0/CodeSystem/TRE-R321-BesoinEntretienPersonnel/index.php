<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-TRE-R321-BesoinEntretienPersonnel.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
