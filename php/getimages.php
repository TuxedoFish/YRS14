<?php
if (isset($_GET['submit'])) 
{
    // Replace this value with your account key
    $accountKey = 'wLSj9Byna7f76W0bjiKQ2IZXvtNk6+VNM+EJItX/bwY';            
    $ServiceRootURL =  'https://api.datamarket.azure.com/Bing/Search/v1/Image';                    
    $WebSearchURL = $ServiceRootURL . '?$format=json&Query=';

    $cred = sprintf('Authorization: Basic %s', 
      base64_encode($accountKey . ":" . $accountKey) );

    $context = stream_context_create(array(
        'http' => array(
            'header'  => $cred
        )
    ));

    $request = $WebSearchURL . urlencode('\''  . $_GET["searchText"] . '\'');

    $response = file_get_contents($request, 0, $context);
	
    echo $response;
}
?>