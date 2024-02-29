<?php 
    $servername = "localhost";
    $username = "root";  //your user name for php my admin if in local most probaly it will be "root"
    $password = "root";  //password probably it will be empty
    $databasename = "flipkart"; //Your db nane
    // Create connection
    $conn = new mysqli($servername, $username, $password,$databasename);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

  

    $inp = file_get_contents('data.json');
    $tempArray = json_decode($inp);
    $count = count($tempArray);
    $slno = $count + 1;
    $emailTempArray = array();

    for ($x=0; $x < $count; $x++) {
        
        $result = json_encode($tempArray[$x]);
        $newResult = json_decode($result, true);
        
        array_push($emailTempArray, $newResult['email']);
    }
    if (in_array($_POST['email'], $emailTempArray)) {
        echo "email already exists, please login";
    } else {
        $data = array("userId"=>"USR".$slno,"name"=>$_POST['name'], "password"=>$_POST['password'], "email"=>$_POST['email'], "phone"=>$_POST['phone'], "joiningDate"=>date("F j, Y"));
        $inp = file_get_contents('data.json');
        $tempArray = json_decode($inp);

        array_push($tempArray, $data);

        $jsonData = json_encode($tempArray);

        file_put_contents('data.json', $jsonData);
        echo 'added';

        $sql = "INSERT INTO users (userId, userName, userPassword, email, phone, joiningDate)
                VALUES ('USR'.$slno, ".$_POST['name'].", ".$_POST['password'].",".$_POST['email'].",".$_POST['phone'].",".date("F j, Y").")";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    






    $conn->close();
?>
