<<<<<<< HEAD
<?php
  session_start()


?>  
=======
>>>>>>> ab5ec25af34bb968328eb3e2df202078df2f566e
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pszihologus</title>
        <meta name="description" content="Weiss pszihologus">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="pszihologus.css">
    </head>
    <body>
      <div id="fejlec">
        <a href="index.php" id="cimerkep" title="WEISSesvagyok.hu - főoldal">
	      <img src="images/logo.png" alt="WEISSesvagyok.hu">
	      </a>

	    <div id="menu">
	      <a href="/meresek/"> MÉRÉSEK </a>  <!-- digit. okt. , TE   -->
	      <a href="/tesztek/"> TESZTEK </a>  <!-- személyiségtesztek -->
	      <a href="/portrek/"> PORTRÉK </a>  <!-- személyiségtesztek -->
	      <a href="/palyaiv/"> PÁLYAÍV </a>  <!-- ... ... ... ...    -->
        <a href="*"> PSZICHOLÓGUS </a>  <!-- ... ... ... ...    -->
<<<<<<< HEAD
        
      <div id="belepes">
          
        

          <?php 

            
          
            $m1 = $_GET['m1'];

            if(!isset($_SESSION['uid']))
            {
              print "<a href='belepes'> BELÉPÉS </a>" ;
            }
            else
            {
              print "<a href='kilepes'> KILÉPÉS </a>" ;
            }
      
          


          
          ?>
          
=======
      
      <div id="belepes">
        <a href="belepes"> BELÉPÉS </a>
>>>>>>> ab5ec25af34bb968328eb3e2df202078df2f566e
      </div>

	</div>

  <hr style="clear:both; margin:0;" size="1">
    </div>

    
<<<<<<< HEAD
   


<div>
<?php



    if( !isset( $_SESSION['uid'] ) )
    {
    if( $m1 == "belepes" )        include( "login.php" ) ;
    if( $m1 == "regisztracio" )   include( "reg.php"   ) ;
    }
    else
    {
    print "Beléptél, örüljél!" ;
    }




    
    
?>
</div>

<iframe name='kisablak'></iframe>
 


    </body>
</html>
=======
    </body>
</html>


<?php


$m1 = @$_GET['m1'] ;
    if( $m1 == "belepes" )        include( "Login.php" ) ;
    if( $m1 == "regisztracio" )   include( "reg.php"   ) ;
    if( $m1 == "fooldal" )        include( "index.php" ) ;

?>
>>>>>>> ab5ec25af34bb968328eb3e2df202078df2f566e
