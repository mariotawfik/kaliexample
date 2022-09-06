<?php
switch ($_POST['vote']) {
 case 'Candidate 1':
 case 'Candidate 2':
 case 'Candidate 3':
 echo "<h1>Thank you for voting!<br/>
 You voted for: ".$_POST['vote']. ".</h1>";
 break;
 default:
 echo "<h1><span style=\"color: red;\">WARNING:</span><br/>
 Invalid input value specified.</h1>";
 break;
}
?>