<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.0.0/ValueSet-JDV-J231-XdsTypesIdentifiantsReferenceId-DMP.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
