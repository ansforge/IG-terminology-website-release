<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.html');
else 
  Redirect('https://interop.esante.gouv.fr/terminologies/1.3.0/NamingSystem-IHERoleCodeVocabulary.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
