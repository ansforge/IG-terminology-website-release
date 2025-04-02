<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/0.1.0-ballot/ValueSet-TRE-R222-MediaTypeCorpsCDANonStructure-all.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
