?php include 'pure_php.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP demo mcmc</title>
</head>
<body>

    <a href="index.php"> Previous Page</a>
    <a href="example2.php">Example 2</a>

    <h1>
        <label>Username:</label>
        <br>
        <?php echo $username; ?>
        <br>
        <label>User ID:</label>
        <br>
        <?php echo $user_id; ?>
    </h1>

    <h2> Page 2</h2>


    <button type="button" onclick="greetUser()">Greet User</button>
   
<script>
    let username = "<?php echo $username?>";
    let userId = "<?php echo $user_id?>";

    function greetUser() {
        alert("Hello " + username + "! Your user id is: " + userId);
    }
</script>

</body>
</html>