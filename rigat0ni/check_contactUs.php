<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="Shift_JIS">
        <title>Contact US</title> 
    </head>
    <?php
          $name =htmlspecialchars($_POST['name']);
          $email =htmlspecialchars($_POST['email']);
          $subject =htmlspecialchars($_POST['subject']);
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
        Subject
        <br>
        <?php echo $subject;?>
        <br>
        <br>
        Message
        <br>
        <?php echo $message;?>
        <br>
        

        <br><br>
        <form action="write_contactUs.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="subject" value="<?php echo $subject;?>">
        <input type="hidden" name="message" value="<?php echo $message;?>">
        

        <input type="submit" value="Submit">
        </form>

    </body>
 
</html>
