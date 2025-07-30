<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.2.0/ConceptMap-ASS-X09-DepartementOM-RegionOM.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
