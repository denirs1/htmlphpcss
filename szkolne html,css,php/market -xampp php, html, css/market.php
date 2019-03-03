<html LANG="PL">
<head><title>super-market</title>
<meta charset="UTF-8">
</head>
<link rel="Stylesheet" type="text/css" href="style.css" />
<body style="margin:0px;">
<div class="kon">
<div class="gora">
    <img src="logo.png" alt="logo" class="obrazek" >
                                            </div>
<div class="s">
<div class="lewo">
    
<form method="POST" action="market.php">
    <h2>Podaj kod kreskowy produktu by go zakupić lub nazwe by wyszukac:</h2><br>
	<input type="number" name="kod" placeholder="Zakup produkt"><br>
    <input type="text" name="szukaj" placeholder="Wyszukaj produkt po nazwie"><br>
    <input type="submit">
            </form>
        
<?php
    error_reporting(0);
    //Kod kreskowy lewy góra
    $con= mysqli_connect("127.0.0.1","root","","market"); //połączenie z bazą

    $dane=$_POST['kod'];

    $zapytanie= mysqli_query($con,"SELECT produkt,cena,ilosc,kreskowy from produkty where kreskowy='$dane'"); //wynik zapytania
echo "<table>";
    
while($info=mysqli_fetch_array($zapytanie)) //tablica zawierajaca kolejny wiersz z podanych wyników zapytania
{if($info['ilosc']>=1){
    if($info['kreskowy']==$dane){
      $odej = "UPDATE produkty SET ilosc = ilosc-1 where kreskowy = '$dane'";
           $wyk2= mysqli_query($con,$odej);
        $ile=$info['ilosc']-1;
}
	echo "<p><tr><td>produkt: ".$info['produkt']."</td></br>"."<td> cena: ".$info['cena']."</td></br>"."<td> ilosc: ".$ile."</td></tr></p>";
    
}
  if($info['ilosc']<=0){
        echo "<h1>Brak na magazynie</h1>";
    }}
 echo "</table>";
  
    $search=$_POST['szukaj'];
    
    $zapytanie9= mysqli_query($con,"SELECT produkt,cena,ilosc,kreskowy from produkty where produkt='$search'");
echo "<table>";
    
while($info9=mysqli_fetch_array($zapytanie9))
{
  echo "<p><tr><td>produkt: ".$info9['produkt']."</td></br>"."<td> cena: ".$info9['cena']."</td></br>"."<td> ilosc: ".$info9['ilosc']."</td>"."<td> Kod kreskowy:".$info9['kreskowy']."</td>"."</tr></p>";
}

    echo "</table>";
    mysqli_close($con); //zamykanie
                ?>
    
                                            </div>

<div class="prawo">
    <h2>Produkty:</h2>
    
    <table class="tabela">
        <tr><th>produkt:</th><th>cena w zł:</th><th>kod kreskowy:</th><th>ilość na magazynie:</th></tr>
        
    <?php
        //wyświetlanie z bazy prawa góra
    
    $con= mysqli_connect("127.0.0.1","root","","market");
    $zapytanie2= mysqli_query($con,"SELECT * from produkty");
        
while($info=mysqli_fetch_array($zapytanie2))
{
    
    echo "<tr>";
	echo "<td>".$info['produkt']."</td>".
        "<td>".$info['cena']."</td>".
        "<td>".$info['kreskowy']."</td>".
        "<td>".$info['ilosc']."</td>"
        ;
	echo "</tr>";

  }

    mysqli_close($con);
    
    ?>
        </table>
                                            </div>
    
                                            </div>
	<div class="s2">
	<div class="lewo2">
	<form method="POST" action="market.php">
        <h2>Podaj kod kreskowy, a następnie ilość by uzupełnić towar:</h2><br>
	<input type="number" name="kreska" placeholder="Kod kreskowy"><br>
        <input type="number" name="ilosc" placeholder="Ilosc do uzupelnienia"><br>
    <input type="submit">
            </form>
        <?php
        //lewy dół dodawanie uzupełnień
        $con= mysqli_connect("127.0.0.1","root","","market");
        
        $kreska=$_POST['kreska'];
        $ilo=$_POST['ilosc'];
        
        $zapytanie3= mysqli_query($con,"SELECT ilosc,kreskowy from produkty where kreskowy='$kreska'");
        while($info2=mysqli_fetch_array($zapytanie3)){
        if($info2['kreskowy']==$kreska){
        $dod = "UPDATE produkty SET ilosc=ilosc+'$ilo' where kreskowy='$kreska'";
           $wyk= mysqli_query($con,$dod);
        $ilo=0;
            
header('refresh: 1;');

        }}
        mysqli_close($con);
        ?>
        
        
											</div>
	<div class="prawo2">
	<h2>Produkty do uzupelnienia:</h2>
        <table class="tabela">
        <tr><th>produkt:</th><th>kod kreskowy:</th><th>ilość na magazynie:</th></tr>
        
    <?php
    //prawy dół co należy uzupełnić
    $con= mysqli_connect("127.0.0.1","root","","market");
    $zapytanie2= mysqli_query($con,"SELECT * from produkty");

while($info3=mysqli_fetch_array($zapytanie2))
    {
    if($info3['ilosc']<=10)
{echo "<tr>";
	echo "<td>".$info3['produkt']."</td>".
        
        "<td>".$info3['kreskowy']."</td>".
        "<td>".$info3['ilosc']."</td>"
        
        ;
	echo "</tr>";
}
    }
    mysqli_close($con);
    
    ?>
        </table>
											</div>
	
											</div>
<div class="stopka">
   
    <img src="wozek.png" alt="wozek" class="obrazek" >
     Autor:DK
                                            </div>


                                            </div>


    </body>
</html>