<?php
    echo 'test';
    var_dump($_POST);

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="Shift_JIS">
        <title>Booking Page</title>
    </head>
    <?php
        //name
        $name =htmlspecialchars($_POST['name']);
        //mail address
        $email =htmlspecialchars($_POST['email']);
        //phone number
        $phoneNumber =htmlspecialchars($_POST['phoneNumber']);
        //people
        $people =htmlspecialchars($_POST['people']);
        //time
        $time =htmlspecialchars($_POST['time']);
        //date
        $date =htmlspecialchars($_POST['date']);
            list($month,$day,$year) = explode('/',$date);

            $input_date = $day."/".$month."/".$year;
        //topping
        $selected =htmlspecialchars($_POST['toppings']);
        //message
        $message =htmlspecialchars($_POST['message']);
       
        
    ?>
    <body>
        Please ensure reservation information
        <br>
        <br>
        Your name
        <br>
        <?php echo $name;?>
        <br>
        <br>
        Your email address
        <br>
        <?php echo $email;?>
        <br>
        <br>
        Your phone number
        <br>
        <br>
        <?php echo $phoneNumber;?>
        <br>
        <br>
        The number of people
        <br>
        <br>
        <?php echo $people;?>
        <br>
        <br>
        Reservation time
        <br>
        <?php echo $time;?>
        <br>
        <br>
        Reservation date
        <br>
        <?php echo $input_date;?>
        <br>
        <br>
        Your chosen topping
        <br>
        <?php //echo $selected;
        foreach($_POST['toppings'] as $selected) {
                echo "<p>".$selected ."</p>";
                }
        
        ?>
        <br>
        <br>
        Message
        <br>
        <?php echo $message;?>
        

        <br><br>
        <form action="write_reservation.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="phoneNumber" value="<?php echo $phoneNumber;?>">
        <input type="hidden" name="people" value="<?php echo $people;?>">
        <input type="hidden" name="time" value="<?php echo $time;?>">
        <input type="hidden" name="date" value="<?php echo $input_date;?>">

        <?php 
                foreach($_POST['toppings'] as $selected) {
        ?>

                <input type="hidden" name="toppings[]" value="<?php echo $selected; ?>">
        <?php        }
        ?>
        <input type="hidden" name="message" value="<?php echo $message;?>">
       
        <input type="submit" value="Submit">
        </form>

    </body>
</html>
