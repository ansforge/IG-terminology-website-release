<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.1.0/ConceptMap-ASS-A14-FamilleActivite-ActiviteOperationnelle.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
