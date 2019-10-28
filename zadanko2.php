<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
      input{
        background: none;
        border: 1px solid #fc0;
        color: #FC0;
      }
      textarea{
        background: none;
        border: 1px solid #fc0;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
    if(isSet($_GET["nazwapliku"])){
    $nazwapliku = $_GET["nazwapliku"];
    $plik = fopen("nowy/".$nazwapliku,"r") or die("Nie ma takiego pliku");
    print "<br>Data modyfikacji pliku: ";
    echo date("Y.m.d",filemtime("nowy/".$nazwapliku));
    print "<br><br>";
    print "Ilosc linii: ";
    echo count(file("nowy/".$nazwapliku));
    print "<br><br>";
    print "Rozmiar pliku: ";
    echo (filesize("nowy/".$nazwapliku))/1000 . " KB";
    print "<br><br>";
    fpassthru($plik);
    print "<br><br>";
    }
    else{
      print '
        <br>Odczyt z pliku:
        <form action="zadanko2.php" method="get">
          Plik: <input type="text" name="nazwapliku">
          <input type="submit" value="Wyslij">
        </form>
      ';
    }
    if(isSet($_GET["nazwa"])&&isSet($_GET["tresc"])){
    $nazwa=$_GET["nazwa"];
    $tresc=$_GET["tresc"];
    $typ=$_GET["typ"];
    if($typ=="Dodaj"){
      $myfile = fopen("nowy/".$nazwa,"a") or die("Unable to open");
      fwrite($myfile,$tresc);
      fclose($myfile);
      print '</b><br> <a href="zadanko2.php">Powrot</a>';
    }
    else if($typ=="Nadpisz"){
      $myfile = fopen("nowy/".$nazwa,"w") or die("Unable to open");
      fwrite($myfile,$tresc);
      fclose($myfile);
      print '</b><br> <a href="zadanko2.php">Powrot</a>';
    }
    }
    else{
      print '<br>Zapis do pliku: <br>
      <form action="zadanko2.php" method="get">
        Plik:&nbsp;&nbsp; <input type="text" name="nazwa"><br>
        Tresc: <textarea name="tresc" rows="5" cols="30"></textarea><br>
        <input type="radio" id="dodaj" name="typ" value="Dodaj" checked>
        <label for="los">Dodaj</label>
        <input type="radio" id="nadpisz" name="typ" value="Nadpisz">
        <label for="nielos">Nadpisz</label>
        <input type="submit" value="Wyslij">
      </form>
      ';
    }
    if(isSet($_GET["generuj"])){
    $generuj=$_GET["generuj"];
    if($generuj=="tak"){
      $rozszerzenie = rand(1,3);
      if($rozszerzenie == 1){
        $ext = ".txt";
      }
      else if($rozszerzenie == 2){
        $ext = ".php";
      }
      else if($rozszerzenie == 3){
        $ext = ".html";
      }
      $nazwa = substr(md5(rand()), 1, 7) . $ext;
      function generateRandomString($length = 2137) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        $enter = 0;
        $losenter = rand(50,250);
        for ($i = 0; $i < $length; $i++) {
            $enter++;
            $randomString .= $characters[rand(0, $charactersLength - 1)];
            if($enter==$losenter){
              $randomString.="\n";
              $losenter = rand(50,250);
            }
        }
        return $randomString;
      }
      $tresc = generateRandomString();
      $myfile = fopen("nowy/".$nazwa,"w") or die("Unable to open");
      fwrite($myfile,$tresc);
      fclose($myfile);
      print '</b><br> <a href="zadanko2.php">Powrot</a>';
    }
    }
    else{
      print '
      <form action="zadanko2.php" method="get">
      Jeżeli napewno chcesz wygenerowac wpisz "tak":
      <input type="text" name="generuj">
      <input type="submit" value="Wyslij">
      </form>
      ';
    }
     ?>
  </body>
</html>
