<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <div class="reg-container">
    
        <form action="handle-register.php" method="post">
        
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" id="firstname"><br>
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" id="lastname"><br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <button type="submit">Login</button>

        
        </form>
    
    </div>
    
</body>
</html>