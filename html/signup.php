<?php
    include 'connection.php';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password  = $_POST['password'];


    $sql = $conn->prepare("INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`) VALUES (?, ?, ?, ?);");
    $sql->bind_param("ssss", $firstname, $lastname, $email, $password);
    $sql->execute();
    ?>
    <script type="text/javascript">
        alert("Lets Login now");
        window.location.replace("mainpage.html");
    </script>
    <?php
?>