<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ValueSet-JDV-J282-TransportsLiesAuProjetIndividuel-SERAFIN.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
