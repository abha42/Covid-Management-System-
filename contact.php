<?php require_once 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "header.php" ?>
<h3>Contact Our Doctors</h3>
<div class="container">
<form action="" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email Address..">

        <label for="subject">Symptoms</label>
        <input type="text" id="subject" name="subject" placeholder="Symptoms..">

        <label for="message">Any Other Queries</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>

</div>

</body>
</html>

<?php
if (!empty($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_inquiry (fname, lname, email, subject, message) 
            values ('$fname', '$lname', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)){
        echo "We will connect to you soon!!!";
    }else{
        echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}


?>























<?php include "footer.php"; ?>
</body>
</html>