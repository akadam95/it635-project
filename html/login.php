<?php 
    include 'connection.php';
    $email = $_POST['loginid'];
    $password = $_POST['password'];
    $sql = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password);
    $sql->execute();
    $result = $sql->get_result();
    if($result->num_rows > 0){
        ?>
        <script type="text/javascript">
            alert("Login successful");
            window.location.replace("main.php");
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Login unsuccessful!");
            window.location.replace("mainpage.html");
        </script>
        <?php
    }
?>