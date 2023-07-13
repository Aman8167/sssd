<html>
    <head>
        <title>pro</title>
    </head>
    <body>
        <h1>Thank you for success</h1>
        <?php
        $name=$_POST['Name'];
        print "<p>Congralations $name</p>";
        $email=$_POST['email'];
        print "<p>Congralations $email</p>";
        $subject=$_POST['subject'];
        print "<p>Congralations $subject</p>";
        $message=$_POST['message'];
        print "<p>Congralations $message</p>";
        ?>
</body>
    </html>