<?php

  // Gets records for a specific batch

  // The data can be viewed at https://getdata.io/krakes/199-worldwide-directory-of-public-companies
  // The API can be uniquely identified using  "1_worldwide_directory_of_public_companieseses"
  require_once('../krake_client.php');

  $datasource_unique_id = "1_worldwide_directory_of_public_companieseses";
  $k_client = new KrakeClient($datasource_unique_id);
  $batches = $k_client->getBatches();
  $batch = $batches[0]->pingedAt;

  $records_per_page = 10;
  $page_num = 0;
  $batch_records = $k_client->getBatchRecords($batch, $records_per_page, $page_num);

  print_r($batch_records);

  // Sample Response
  // ===============================
  // Array
  // (
  //     [0] => stdClass Object
  //         (
  //             [industry] => Insurance (Accident & Health)
  //             [company] => Foundation Health Corp.
  //             [country] => United States
  //             [contact number] => Phone: (916) 631-5000
  //             [summary] => 
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=11052
  //             [industry_link] => http://crmz.com/Directory/Industry706.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [1] => stdClass Object
  //         (
  //             [industry] => Computer Networks
  //             [company] => NetWorth, Inc.
  //             [country] => United States
  //             [contact number] => Phone: (972) 929-1700
  //             [summary] => NWTH designs, develops, manufactures, markets and supplies intelligent hubs and related products to local area network systems.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=10033
  //             [industry_link] => http://crmz.com/Directory/Industry1012.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [2] => stdClass Object
  //         (
  //             [industry] => Computer Hardware
  //             [company] => GAP Instrument
  //             [country] => United States
  //             [contact number] => Phone: (516) 273-0909
  //             [summary] => GAP produces and manufactures electronic systems primarily for the U.S. Government. Products are primarily servo-mechanisms, consisting of signal data-conversion equipment employed in load actuation, information readout display, & operational control.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=11001
  //             [industry_link] => http://crmz.com/Directory/Industry1006.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [3] => stdClass Object
  //         (
  //             [industry] => Retail (Catalog & Mail Order)
  //             [company] => Eastbay, Inc.
  //             [country] => United States
  //             [contact number] => Phone: (800) 826-2205
  //             [summary] => Eastbay is a direct marketer of athletic footwear, apparel, equipment and licensed and private label products through its full-color catalogs.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=11329
  //             [industry_link] => http://crmz.com/Directory/Industry948.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [4] => stdClass Object
  //         (
  //             [industry] => Airline
  //             [company] => China Eastern Airlines Corporation Ltd.
  //             [country] => China
  //             [contact number] => Phone: +86 2162686268
  //             [summary] => China Eastern Airlines Corporation Limited is an air carrier operator in China. The Company provides civil aviation services, including passenger transportation, cargo transportation and mail delivery services. The Company operates its businesses in domestic and overseas markets. The Company operates its transportation business through its domestic, international and regional transportation lines.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=6537439
  //             [industry_link] => http://crmz.com/Directory/Industry1106.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [5] => stdClass Object
  //         (
  //             [industry] => Air Courier
  //             [company] => Federal Express Corp.
  //             [country] => United States
  //             [contact number] => Phone: (901) 369-3600
  //             [summary] => Federal Express offers a wide range of express services.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=11174
  //             [industry_link] => http://crmz.com/Directory/Industry1103.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [6] => stdClass Object
  //         (
  //             [industry] => Railroads
  //             [company] => Zeljeznice Republike Srpske a.d. Doboj
  //             [country] => Bosnia and Herzegovina
  //             [contact number] => Phone: +387 53241368
  //             [summary] => Zeljeznice Republike Srpske ad Doboj is a Bosnia and Herzegovina-based company engaged in railway transportation services. Its main activities include passenger and freight transport, rail tracks technical supervision and maintenance, as well as maintenance and construction of related devices, plants and installations. The Company’s parent entity is Akcijski fond Republike Srpske ad Banja Luka, which holds a 65.02% stake in the capital.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=10869343
  //             [industry_link] => http://crmz.com/Directory/Industry1112.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [7] => stdClass Object
  //         (
  //             [industry] => Retail (Technology)
  //             [company] => Semi-Tech Corporation
  //             [country] => Canada
  //             [contact number] => Phone: (905) 475-2670
  //             [summary] => Semi-Tech Corporation is a Canadian multinational company engaged in the retailing and distribution of sewing products, household appliances, and audio and video consumer electronics.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=9394
  //             [industry_link] => http://crmz.com/Directory/Industry966.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [8] => stdClass Object
  //         (
  //             [industry] => Computer Hardware
  //             [company] => Dicker Data Ltd
  //             [country] => Australia
  //             [contact number] => Phone: +61 295898400
  //             [summary] => Dicker Data Limited, formerly Rodin Corporation Pty Limited, is an Australian based company. The Company is a wholesale distributor of computers and related products. During the financial year ended on June 30, 2010 Dicker Data distributed Information Technology hardware and software products from Hewlett-Packard, Toshiba, Microsoft, Samsung, Canon, Netgear, Sony and Kingston, among others.01
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=17474888
  //             [industry_link] => http://crmz.com/Directory/Industry1006.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  //     [9] => stdClass Object
  //         (
  //             [industry] => Railroads
  //             [company] => Teplovozoremontnyi Zavod PAT
  //             [country] => Ukraine
  //             [contact number] => Phone: +380 532517100
  //             [summary] => Teplovozoremontnyi zavod VAT (Diesel Locomotive Repairing Plant) is a Ukraine-based company that specializes in the repair of passenger diesel locomotives and in the production of spare parts for them. It repairs passenger locomotives series TEP70; universal trunk locomotives series M62; freight 2TE116; maneuvers TEM7, TEM2 and TGM6. The Company cooperates with the countries of the Commonwealth of Independent States, as well as the Baltic countries, Europe and Asia.
  //             [company_link] => http://crmz.com/Report/ReportPreview.asp?BusinessId=9499895
  //             [industry_link] => http://crmz.com/Directory/Industry1112.htm
  //             [origin_url] => http://crmz.com/Directory/
  //             [origin_pattern] => http://crmz.com/Directory/
  //             [createdAt] => 2013-10-27 08:25:19
  //             [updatedAt] => 2013-10-27 08:25:19
  //             [pingedAt] => 2013-10-27 08:25:19
  //         )

  // )  
?>