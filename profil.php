<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profil</title>
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
          
        <div id="belepes">
            
          

            <?php 

              
            
            

              if(!isset($_SESSION['uid']))
              {
                print '<a href="belepes"> BELÉPÉS </a>' ; //print "<a href='belepes'> BELÉPÉS </a>" ;
              }
              else
              {
                echo "<a href='profil'> $_SESSION[unick] </a>" ;
                      //print "<a href='index.php'>. "$user['unick']" . </a>" ;
                
                print"
                  
                    <a href='javascript:' onclick='kisablak.location.href=\"http://localhost/zz/wvp/logout.php\"'><img src='images/logout.png' class='kilepesgomb' alt='profilkep'></a>


                    ";
              }
                    


            
            ?>
            
        </div>

	    </div>

  <hr style="clear:both; margin:0;" size="1">
    </div>


    <div class='loginFormContainer'>
    <form action='login_ir.php' method=post target='kisablak' >
            <!-- Headings for the form -->
            <div class='headingsContainer'>
                <h3>... adatai</h3>
                
            </div>

            <!-- Main container for all inputs -->
            <div class='mainContainer'>
                
            <!-- vezetéknév -->
            <label for='unev'>Vezetéknév</label>
                <input placeholder='' name='unev' required>

                <br><br>
            
            <!-- Username -->
            <label for='unev'>Keresztnév</label>
                <input placeholder='' name='unev' required>

                <br><br>    
            
            <!-- Username -->
                <label for='unick'>Felhasználónév</label>
                <input placeholder='' name='unick' required>

                <br><br>
            
            <!-- OM -->
              <label for='uom'>UOM</label>
                <input  placeholder='' name='uom' required>

                <br><br>

            <!-- Email -->
            <label for='uemail'>Email</label>
                <input placeholder='' name='uemail' required>

                <br><br>

            <!-- WeissesEmail -->
            <label for='uwmail'>Weissemail</label>
                <input placeholder='' name='uwmail' required>

                <br><br>        

                <!-- Password -->
                <label for='upw'>Jelszó</label>
                <input type='password' placeholder='' name='upw' required>

                <br><br>

                <!-- Submit button -->
                <button type='submit'>Változtatások jóváhagyása</button>
                
                
            </div>

        </form>
    </div>




<iframe name='kisablak' id="kisablak"></iframe>
 


    </body>
</html>