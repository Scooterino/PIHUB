<!DOCTYPE html>

<?php
require 'Functions.php'; 
?>

<html>
    <head>

    <link rel = "stylesheet" href = "bootstrap.min.css">
    
    <title>
        PIHUb Policy Info
    </title>

    <style >

        body {
            background-color: rgb(187, 240, 240);
        }
        

        table,tr, th, td {
            
            border : 1px  solid black; 
            border-collapse : collapse ; 
            padding-left: 10px;
            padding-right: 10px;  
        }

        th {
            text-align: center;
        }

        tr :nth-child(even) {
            background-color: rgb(255, 243, 188);
        }
        
        tr :nth-child(odd) {
            background-color: rgb(255, 191, 191);
            text-align: center;
        }

        .card {
            background-color: rgb(55, 177, 248);
            text-align: center;
        }

        .card > .card-header {
            background-color: rgb(243, 86, 86);
        }

        img {            
            
            margin-left: auto;
            margin-right: auto;
            width : 200px;

        }

        
    
    </style>

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