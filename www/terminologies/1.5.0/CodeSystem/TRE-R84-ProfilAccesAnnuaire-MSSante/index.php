<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.5.0/CodeSystem-TRE-R84-ProfilAccesAnnuaire-MSSante.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
