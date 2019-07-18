<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="Shift_JIS">
        <title>Booking Page</title>
    </head>
    <?php
        //name
        $name=htmlspecialchars($_POST['name'],ENT_QUOTES);
        //email
        $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
        //subject
        $subject=htmlspecialchars($_POST['subject'],ENT_QUOTES);
        //message
        $message=htmlspecialchars($_POST['message'],ENT_QUOTES);
       

        //Save data
        $data=array($name,$email,$subject,$message);

        // save file name
        $filename ='uploads/contactUs.csv';

        //open by append mode
        $handle = fopen($filename,'a');

        //lock
        flock($handle, LOCK_EX);

        //fill in csv
        fputcsv($handle,$data);

        //close
        fclose($handle);
    ?>
    <body>
    Your reservation form has been sent successfully
    <br>
    <br>
    <a href="uploads/contactUs.csv">Download reservation form</a>

    <?php
    
        //name
        $name=htmlspecialchars($_POST['name'],ENT_QUOTES);
        //email
        $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
        //subject
        $subject=htmlspecialchars($_POST['subject'],ENT_QUOTES);
        //message
        $message=htmlspecialchars($_POST['message'],ENT_QUOTES);
        
        //connect to mySQL
        $conn = mysqli_connect('localhost:8889','root','6109137');
        
        if (!$conn){
            echo 'cannot connect';
        }

        if($conn){

            //select database server
            mysqli_select_db($conn,'Rigatoni');

            // insert sql codes to database
            $sql='INSERT INTO `contactUs`
            (`contactName`,
            `mailAddress`,
            `subject`,
            `message`)
            VALUES("'.$name.'",
            "'.$email.'",
            "'.$subject.'",
            "'.$message.'")';

            
            //implement sql code
            $query=mysqli_query($conn,$sql,MYSQLI_USE_RESULT);
           

        }
    ?>
    </body>
</html>


