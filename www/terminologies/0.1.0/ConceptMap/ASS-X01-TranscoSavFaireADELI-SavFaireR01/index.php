<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0/ConceptMap-ASS-X01-TranscoSavFaireADELI-SavFaireR01.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
