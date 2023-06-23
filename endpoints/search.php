<?php
  define("ROOT", dirname(__FILE__, 2));
  require_once ROOT .'/core/lib/responser.php';
  require_once ROOT .'/core/poo-test/search.php';
  
  $httpRequestData = (isset($_GET["name"])) ? $_GET : json_decode(file_get_contents('php://input'), true);

  $search = new search;

  $searchRequest = $search->search($httpRequestData["name"]);
  if($searchRequest["status"] == 200){
    responser::preformedHttpResponse($searchRequest);
  }
  else{
    responser::httpResponse(400, "We didn't found matches, please verify the data", NULL);
  }
?>
