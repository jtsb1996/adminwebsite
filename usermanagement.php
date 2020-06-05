<?php
    // create connection
	$con = mysqli_connect("localhost", "root", "", "tacmportal" )
    or die ("Error, unable to connect to database");

?>


<!DOCTYPE html>
<html>
    <head>
        <title>User Management</title>
        <link rel = "stylesheet" href = "programcalendar.css">
        <script type = "text/javascript" src = "usermanagement.js"></script>
       
    </head>

    <body>
        <div id = "title" class = "title">
            Tribe Accelerator Cohort Management Portal
        </div>
        <br/>
        <div class = "tabs">
            <a href = "adminWebpage.php"><div class = "tabs-center">Homepage</div></a>
            <a href = "programcalendar.php"><div class = "tabs-center">Program Calendar</div></a> 
            <a href = "feedback.php"><div class = "tabs-center">Feed Back</div></a> 
            <a href = "usermanagement.php"><div class = "tabs-center">User Management</div></a>
            <div class = "tabs-center">Notification</div>
            <a href = "messages.php"><div class = "tabs-center">Messages</div></a> 
            <a href = "accountmanagement.php"><div class = "tabs-center">Account Management</div></a> 
        </div>
        <br/><br/>
        <div id = "buttons">
            <form action="usermanagementPHP.php" method = "POST">
                UserName
                <input type = "text" name = "newUserId" id = "newUserId" size = "30">
                <br/>
                Password
                <input type = "text" name = "newPassword" id = "newPassword" size = "30">
                <br/>
                <button name = "create" id = "create"> Create New Account </button>
            </form>
            
            <button name = "edit" id = "edit" onclick = "editUser()"> Edit Exisiting Accounts </button>
        </div>
        <div id = "information">

        </div>
    </body>
</html>