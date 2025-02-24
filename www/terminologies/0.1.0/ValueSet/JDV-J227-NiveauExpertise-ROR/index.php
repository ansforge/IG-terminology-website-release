<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ValueSet-JDV-J227-NiveauExpertise-ROR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
