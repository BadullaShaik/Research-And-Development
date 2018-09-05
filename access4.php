<html>
<head>
<style>
    body 
    {
    width:300px;font-family:Times New Roman;
    background-color:skyblue;
    text-size:100px;
}
 
.demo-table td {
    padding: 15px 0px;
     text-indent: 100px;
}
.demoInputBox {
    padding: 15px;
    border: #a9a9a9 1px solid;
    border-radius: 10px;
    width:100%;
}
.btnSubmit {
    padding: 10px 30px;
    background-color: #00FFFF;
    border: 0;
    color: #FFF;
    cursor: pointer;
    border-radius: 10px;
    width:40px;
}
b{
    word-spacing: 10px;
    letter-spacing: 3px;
}
</style>
</head>
<body>
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user4.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <h1>Welcome <?php echo $userData['StudentName']; ?>!</h1>
    <a href="userAccount4.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><h2>Student Name: </b><?php echo $userData['StudentName']; ?></h2></p>
        <p><h2>Class: <?php echo $userData['Class']; ?></h2></p>
        <p><h2>Email: <?php echo $userData['email']; ?></h2></p>
        <p><h2>Rollno: <?php echo $userData['Rollno']; ?></h2></p>
    </div>
    <?php }else{ ?>
    <h2 align="center">Login to Student Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm" align="center">
        <form action="userAccount4.php" method="post">
        <tr>
        <td><b>Email</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <td><input type="email" class="demoInputBox" name="email" placeholder="EMAIL" required="">
            </td><br><br>
            <td><b>Password</b></td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <td><input type="password" class="demoInputBox" name="password" placeholder="PASSWORD" required="">
            </td><br><br>
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form><br><br>
       <!-- <p>Don't have an account? <a href="registration2.php">Register</a></p>-->




        <li align="left"><a href="home.php">Home</a></li>
    </div>
    <?php } ?>
