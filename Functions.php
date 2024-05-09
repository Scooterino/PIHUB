<!DOCTYPE html>

<?php


    


    function FindPolicy($id, $returning) {

        //Credentials to access database
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pihub";
        
        // Establish a connection and verify connection
        
        $conn = new mysqli($servername, $username, $password, $database);

        
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        
        
        
        // Create an object that will hold the to-be statement and its operator 
        
        $query = "SELECT * FROM policies WHERE ID =  ";
        
        // Join the statements with the ID item 
            
        
            $query .= $id;
        
        
        // Return all results
            
        $result = $conn->query($query); 
        
        if($result) {
        
            
            while ($row = $result->fetch_assoc()) {
        return $row[$returning];
        
        }

        }
        
        
        $conn->close();
  
   
    }

    function countRows () {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pihub";
        
        $conn = new mysqli($servername, $username, $password, $database);

      
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
           
        $sql = "SELECT COUNT(*) AS total FROM policies ";
        $result = $conn->query($sql);

        if($result) {
        
            
            while ($row = $result->fetch_assoc()) {
        return $row["total"];
        
        }

    }
        
        
        

    }

    function tableDetails() {

        

        echo '<table class = "table" >


            <tr >
                <th  >
                    Policy Type
                </th>
                <th>
                    Policy Details
                </th>
                <th>
                    Price
                </th>
            </tr>
            
        '; 
       
        for($i = 1; $i <= countRows() ;$i++) {   
            
            $tempType = FindPolicy($i, "policyType");
            $tempInfo = FindPolicy($i, "policyInfo");
            $tempPrice = FindPolicy($i, "price");

            
            echo '<tr>' ; 
            echo '<td>' .$tempType . '</td> ';
            echo '<td>' .$tempInfo . '</td> ' ; 
            echo '<td>$'.$tempPrice. '</td> ' ;
            echo '</tr>';           

        }

        echo '</table>';

        
    }

  
?> 


