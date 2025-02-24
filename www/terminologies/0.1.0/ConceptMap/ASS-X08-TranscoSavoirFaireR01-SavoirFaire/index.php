<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X08-TranscoSavoirFaireR01-SavoirFaire.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
