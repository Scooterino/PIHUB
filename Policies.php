<!DOCTYPE html>

<?php
require 'Functions.php'; 
?>

<html>
    <head>

    <link rel = "stylesheet" href = "bootstrap.min.css">
    <link rel = "stylesheet" href = "styling.css">
    
    <title>
        PIHUb Policy Info
    </title>
    
    

    <nav class="card text-center">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link" href="main.html">Main Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="agents.php">Agents </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="Policies.php">Policies </a>
                </li>                
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title"> Insuratech</h5>
              
            </div>
        </nav>
        
    </head>

    <header class = "card" >

            
            <h5 class="card-header">Insuratech Belize</h5> 
            <img src="images/Insuratech.png" class = "img-thumbnail">
            <div class="card-body">
                <h5 class="card-title">PIHUB Database</h5>
                <p class="card-text">                    
                    Here are the policies offered by Insuratech Belize to it's customers.                                     
                </p>

                <img src="images/PIHUB PIC.png" class = "img-thumbnail">

                
                
            </div>

            
    </header>

    <body>



        

        

        <br><br><br>   



        <?php PtableDetails () ; ?>


          


    <footer class = "card" >

            
        <h5 class="card-header">Managed and owned by <br> Insuratech Belize</h5> 
            
        <div class="card-body">
                
           <p class="card-text">                    
                © All rights Reserved  
                                     
           </p>

         <img src="images/Insuratech.png" class = "img-thumbnail">

                
                
        </div>

            
    </footer>



        
    </body>
</html>