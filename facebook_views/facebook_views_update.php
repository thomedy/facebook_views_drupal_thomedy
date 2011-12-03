function facebook_views_cron() {
  $doc->load($xml);

    $comparedDateMiddleMan = $dataset->item(1)->getElementsByTagName('pubDate');
  $comparedDate = $comparedDateMiddleMan->item(0)->nodeValue;

  $comparedTime = strtotime($comparedDate);

  echo $comparedTime . "</br>" . $time;


}

