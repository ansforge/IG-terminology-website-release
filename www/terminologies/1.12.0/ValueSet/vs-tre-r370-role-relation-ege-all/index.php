<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-vs-tre-r370-role-relation-ege-all.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
