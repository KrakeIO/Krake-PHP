<?php

  // Gets a list of all batches

  // The data can be viewed at https://getdata.io/krakes/199-worldwide-directory-of-public-companies
  // The API can be uniquely identified using  "1_worldwide_directory_of_public_companieseses"
  require_once('../krake_client.php');

  $datasource_unique_id = "1_worldwide_directory_of_public_companieseses";
  $k_client = new KrakeClient($datasource_unique_id);
  $batches = $k_client->getBatches();

  print_r($batches);
  // Sample output
  // ====
  // Array
  // (
  //     [0] => stdClass Object
  //         (
  //             [pingedAt] => 2014-02-26 03:43:16+00
  //         )

  //     [1] => stdClass Object
  //         (
  //             [pingedAt] => 2013-09-20 04:23:48+00
  //         )

  //     [2] => stdClass Object
  //         (
  //             [pingedAt] => 2013-09-15 06:35:52+00
  //         )

  // )  

  echo "Most second recent batch date" . PHP_EOL;
  
  $second_most_recent_batch = $k_client->getPreviousBatch($batches[0]->pingedAt);  
  echo $second_most_recent_batch . PHP_EOL;
  // Sample output
  // ===
  // 2013-09-20 10:28:26
?>