<?php

$Name = $_REQUEST['name'];
$Phone = $_REQUEST['phone'];
$Message = $_REQUEST['message'];
$header = $Email;
if(empty($Name) && empty($Email) && empty($Subject) && empty($Message)){
    echo ('Please fill all the fields');
}
else{
    mail("webtriggers11@gmail.com", "Message From webTriggers.com - ".$Subject,"Name: ".$Name."Phone: " .$Phone." Message: " .$Message, $header);
    echo "<script type='text/javascript'> alert('Your Message sent successfully');
            window.history.log(-1);
          </script>";
}

?>