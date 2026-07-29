<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.12.0/ValueSet-jdv-j342-type-act-soumise-a-reconnaissance-finess.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
