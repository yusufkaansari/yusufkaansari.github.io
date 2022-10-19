<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /* bir hava durumu sitesine girilir ve hava sýcaklýklarý
      yazan yerin kaynak kodlarý alýnýr
      <ziko ng-bind="sondurum[0].sicaklik | comma " class="ng-binding">7,6</ziko>
      bu þekilde bir html olmalýdýr.
      <ziko.*class="ng-binding">([0-9]{1,2})</ziko> ÅŸeklinde bir desen yazmak gerekir.
    */

    $iladi="Samsun";
    $site=implode("",file("https://www.mgm.gov.tr/?il=$iladi"));

    $desen='/<ziko.*class="ng-binding">([0-9]{1,2})<\/ziko>/';
    preg_match_all($desen,$site,$durum);
    echo "$iladi hava sýcaklýðý: ".$durum[0][0]." Derecedir.<br>";
    
     ?>
</body>
</html>