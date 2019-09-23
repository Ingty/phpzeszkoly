<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
      $dzien = 22;
      $miesiac = 11;
      $rok = 2018;
      if(checkdate($miesiac,$dzien,$rok))
      {
       print("Data $dzien.$miesiac.$rok jest poprawna");
      }
      else
      {
        print("Data $dzien.$miesiac.$rok jest niepoprawna");
      }
      echo "<br>"; echo "<br>"; echo "<br>";

      $date=date_create("2013-03-15");
      echo date_format($date, "Y-m-d");
      echo "  &nbsp &nbsp  30 days later...   &nbsp &nbsp ";
      date_add($date,date_interval_create_from_date_string("30 days"));
      echo date_format($date, "Y-m-d");
     
     ?>
  </body>
</html>
