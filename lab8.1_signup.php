<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="lab8.2_validate.php" method="post">
        Full Name: <input type="text" name="fullname"><br><br>
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        
        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other <br><br>
        
        Subject:
        <select name="subject">
            <option value="">--Select--</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="IPE">IPE</option>
            <option value="CoE">CoE</option>
            <option value="ME">ME</option>
        </select><br><br>
    
        <input type="submit" value="Signup">
    </form>
</body>
</html>
