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

    

        
    </head>

    <body>



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

        

        <br><br><br>   



        <?php tableDetails () ; ?>


          


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