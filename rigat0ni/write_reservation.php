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
        //phone number
        $phoneNumber=htmlspecialchars($_POST['phoneNumber'],ENT_QUOTES);
        //number of people
        $people=htmlspecialchars($_POST['people'],ENT_QUOTES);
        // time
        $time=htmlspecialchars($_POST['time'],ENT_QUOTES);
        //date
        $input_date=htmlspecialchars($_POST['date'],ENT_QUOTES);

        //toppings
        $selected=htmlspecialchars($_POST['toppings'],ENT_QUOTES);

        //message
        $message=htmlspecialchars($_POST['message'],ENT_QUOTES);

       //Save data
        $data=array($name,$email,$phoneNumber,$people,$time,$input_date,$selected,$message);
        
        foreach($_POST['toppings'] as $selected) {
        
            array_push($data,$selected);
        }


        // save file name
        $filename ='uploads/reservation.csv';

        //open by append mode
        $handle = fopen($filename,'a');

        //flock
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
    <a href="uploads/reservation.csv">Download reservation form</a>

    
    <?php
    
        //name
        $name=htmlspecialchars($_POST['name'],ENT_QUOTES);
        //email
        $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
        //phone number
        $phoneNumber=htmlspecialchars($_POST['phoneNumber'],ENT_QUOTES);
        //people
        $people=htmlspecialchars($_POST['people'],ENT_QUOTES);
        //time
        $time=htmlspecialchars($_POST['time'],ENT_QUOTES);
        //date
        $input_date=htmlspecialchars($_POST['date'],ENT_QUOTES);
        //topping
        $selected=htmlspecialchars($_POST['toppings'],ENT_QUOTES);
        //massage
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
            $sql='INSERT INTO `Reservation`
            (`reservation_name`,
            `mailAddress`,
            `phoneNumber`,
            `member`,
            `reservation_time`,
            `reservation_date`,
            `toppings`,
            `message`
            )
            VALUES("'.$name.'",
            "'.$email.'",
            "'.$phoneNumber.'",
            "'.$people.'",
            "'.$time.'",
            "'.$input_date.'",
            "'.$selected.'",
            "'.$message.'")';


            //implement sql code
            $query=mysqli_query($conn,$sql,MYSQLI_USE_RESULT);
           

        }
    ?>

</body>

</html>


