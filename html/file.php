<?php
    include 'connection.php';
    $data1 = NULL; 
    $data2 = NULL;
    $data3 = NULL;
    if(isset($_POST['datecreated'])){
        $data1 = $_POST['datecreated'];
    }
    if(isset($_POST['casenumber'])){    
        $data2 = $_POST['casenumber'];

    }
    if(isset($_POST['attorneyname'])){
        $data3 = $_POST['attorneyname'];
    }
    
    if(strlen($data1) == 0){
        $data1 = NULL;
    }

    if(strlen($data2) == 0){
        $data2 = NULL;
    }

    if(strlen($data3) == 0){
        $data3 = NULL;
    }
    $sql = $conn->prepare('SELECT * FROM file WHERE attorneyname = ? OR datecreated = ? OR casenumber = ?');
    $sql->bind_param("ssi", $data3, $data1, $data2);
    $sql->execute();
    $result = $sql->get_result();
  
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['filename'];
        }
    }else{
        echo "No cases found";
    }
?>