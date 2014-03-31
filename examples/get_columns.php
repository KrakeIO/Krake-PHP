<?php
  // Gets the columns that will be returned in each record

  // The data can be viewed at https://getdata.io/krakes/199-worldwide-directory-of-public-companies
  // The API can be uniquely identified using  "1_worldwide_directory_of_public_companieseses"
  require_once('../krake_client.php');

  $datasource_unique_id = "1_worldwide_directory_of_public_companieseses";
  $k_client = new KrakeClient($datasource_unique_id);
  $columns = $k_client->getColumns();
  print_r($columns);

  // Sample response
  // ===============================
  // (
  //     [columns] => Array
  //         (
  //             [0] => industry
  //             [1] => company
  //             [2] => country
  //             [3] => contact number
  //             [4] => summary
  //             [5] => company_link
  //             [6] => industry_link
  //             [7] => origin_url
  //             [8] => origin_pattern
  //             [9] => createdAt
  //             [10] => updatedAt
  //             [11] => pingedAt
  //         )

  //     [url_columns] => Array
  //         (
  //             [0] => company_link
  //             [1] => industry_link
  //         )

  //     [index_columns] => Array
  //         (
  //         )

  // )  
?>