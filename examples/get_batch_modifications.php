<?php

  // Gets records for a specific batch

  // The data can be viewed at https://getdata.io/krakes/966-www-marionford-com-used-cars
  // The API can be uniquely identified using  "1_7a72a8898dc7cac18b38d849cbe9a56feses"
  require_once('../krake_client.php');

  $datasource_unique_id = "1_7a72a8898dc7cac18b38d849cbe9a56feses";
  $k_client = new KrakeClient($datasource_unique_id);
  $batches = $k_client->getBatches();
  $batch = $batches[0]->pingedAt;

  $modifications = $k_client->getBatchModifications($batch);

  echo "Records that were modified since the latest batch";
  print_r($modifications);

  // Sample Response
  // ===============================
  // (
  //     [0] => stdClass Object
  //         (
  //             [stock number] => AA8724
  //             [year] => 2011
  //             [make] => Toyota
  //             [model] => 2011 Toyota Sienna SE - Marion, IL
  //             [vehicle url] => http://www.marionford.com/Used-2011-Toyota-Sienna-SE-Marion-IL/vd/18789619
  //             [condition] => used
  //             [origin_url] => http://www.marionford.com/inventory/newsearch/Used/
  //             [origin_pattern] => http://www.marionford.com/inventory/newsearch/Used/
  //             [createdAt] => 2014-03-22 14:15:06
  //             [updatedAt] => 2014-03-29 11:00:00
  //             [pingedAt] => 2014-03-29 11:00:00
  //         )

  //     [1] => stdClass Object
  //         (
  //             [stock number] => AA8756
  //             [year] => 2007
  //             [make] => Toyota
  //             [model] => 2007 Toyota Camry LE - Marion, IL
  //             [vehicle url] => http://www.marionford.com/Used-2007-Toyota-Camry-LE-Marion-IL/vd/18877322
  //             [condition] => used
  //             [origin_url] => http://www.marionford.com/inventory/newsearch/Used/
  //             [origin_pattern] => http://www.marionford.com/inventory/newsearch/Used/
  //             [createdAt] => 2014-03-22 14:15:06
  //             [updatedAt] => 2014-03-29 11:00:00
  //             [pingedAt] => 2014-03-29 11:00:00
  //         )

  //     [2] => stdClass Object
  //         (
  //             [stock number] => AA8862
  //             [year] => 2008
  //             [make] => Honda
  //             [model] => 2008 Honda CR-V EX - Marion, IL
  //             [vehicle url] => http://www.marionford.com/Used-2008-Honda-CR-V-EX-Marion-IL/vd/19230298
  //             [condition] => used
  //             [origin_url] => http://www.marionford.com/inventory/newsearch/Used/
  //             [origin_pattern] => http://www.marionford.com/inventory/newsearch/Used/
  //             [createdAt] => 2014-03-22 14:15:06
  //             [updatedAt] => 2014-03-29 11:00:00
  //             [pingedAt] => 2014-03-29 11:00:00
  //         )

  //     [3] => stdClass Object
  //         (
  //             [stock number] => AA8973
  //             [year] => 2002
  //             [make] => Chevrolet
  //             [model] => 2002 Chevrolet Silverado 2500HD LT - Marion, IL
  //             [vehicle url] => http://www.marionford.com/Used-2002-Chevrolet-Silverado-2500HD-LT-Marion-IL/vd/19638447
  //             [condition] => used
  //             [origin_url] => http://www.marionford.com/inventory/newsearch/Used/
  //             [origin_pattern] => http://www.marionford.com/inventory/newsearch/Used/
  //             [createdAt] => 2014-03-26 11:00:00
  //             [updatedAt] => 2014-03-29 11:00:00
  //             [pingedAt] => 2014-03-29 11:00:00
  //         )

  // )

?>