<?php

        $servername = "localhost";
        $username = "db_chatbot";
        $password = "mf}Ot!HZhX9i";
        $dbname = "db_chatbot";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if (!$conn)

    	 {
            die("Connection failed: " . $conn->connect_error);

            }
            
if(isset($_POST['email'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $starttime=$_POST['starttime']; 
    $endtime=$_POST['endtime'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];
    
    $sql=mysqli_query($conn,'INSERT INTO `chatbot`( `name`, `email`, `phone`, `subject`, `message`, `start_time`, `end_time`) VALUES ("'.$name.'","'.$email.'","'.$phone.'","'.$sub.'","'.$msg.'","'.$starttime.'","'.$endtime.'")');
    
    if($sql){
        echo"ok inserted";
    }
}else{
    echo "no data";
}

?>