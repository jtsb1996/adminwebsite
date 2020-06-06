<?php
    // create connection
	$con = mysqli_connect("localhost", "root", "", "tacmportal" )
    or die ("Error, unable to connect to database");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Program Calender</title>
        <link rel = "stylesheet" href = "general.css">
        <script type = "text/javascript" src = "programcalendar.js"></script>
    </head>
    <body>
        <div class = "title">
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
        <div class = "title2">
            Creation of Event Record
        </div>
        <div class = "eventform">
                <form action="programcalendarAddPHP.php" method = "POST">
                    <div class = "eventform-center">
                    Event Name
                    <input type = "text" name = "eventname" id = "eventname" size = "30">
                    </div>
                    <div class = "eventform-center">
                    Event Date
                    <input type = "text" name = "eventdate" id = "eventdate" size = "30">
                    </div>
                    <div class = "eventform-center">
                    Event Start Time
                    <input type = "text" name = "eventstime" id = "eventstime" size = "30">
                    </div>
                    <div class = "eventform-center">
                    Event End Time
                    <input type = "text" name = "eventetime" id = "eventetime" size = "30">
                    </div>
                    <div class = "eventbutton-center">
                        <button name = "addevent" id = "addevent"> Add Event Record</button>
                    </div>
                </form>
        </div>
        <br/><br/>
        <div id = "edition">
            <div id = "title2" class = "title2">
                Current Event Records
            </div>
            <table class = "eventTable" id = "eventTable" >
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Event Start Time</th>
                        <th>Event End Time</th>
                    </tr>
                </thead>
                <tbody text-align = "center">
                    <?php
                        $sql = $con->prepare ("SELECT * FROM eventtable");
                        $result=$sql->execute();
                        $sql->bind_result($eventname, $eventdate, $eventstarttime, $eventendtime);

                        while($sql->fetch()){
                            echo"<tr>";
                            printf("<td><form method = 'GET'><a href = 'programcalendarEditDelete.php?eventname=$eventname'>
                                    %s</td><input type = 'hidden' name = 'eventname' value = $eventname></a></form>",$eventname);
                            printf("<td>%s</td>",$eventdate);
                            printf("<td>%s</td>",$eventstarttime);
                            printf("<td>%s</td>",$eventendtime);
                            echo"</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>