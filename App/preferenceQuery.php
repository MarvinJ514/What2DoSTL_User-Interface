<?php
    session_start();
    // Connection Info
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'what2dostl_create';
    $DATABASE_PASS = '1q2w#E$R1q2w#E$R';
    $DATABASE_NAME = 'phplogin';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $aPref = $_POST['formPreferences'];
    $N = count($aPref);
    if($N <= 2) {
        //echo("You didn't select any preferences.");
        if ($stmt = $con->prepare('SELECT Event_Name,Event_Link,Location,Short_Description,Type,Event_Date FROM eventsarchiveexplore2')) {
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($event, $eventLink,$Location,$Description,$Type,$Date);
            while($stmt->fetch()) {
                $eventsArray = array($event, $eventLink, $Location, $Description, $Type, $Date);
                $eventsJSON = json_encode($eventsArray);
                echo $eventsJSON;
            } 
        }else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
    }
    else {
        echo("You selected $N preference(s): ");
        for($i=0; $i < $N; $i++) {
        echo($aPref[$i] . " ");
        }
    }
?>