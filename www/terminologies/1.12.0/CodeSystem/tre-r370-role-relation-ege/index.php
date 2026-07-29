<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/CodeSystem-tre-r370-role-relation-ege.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
