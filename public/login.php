<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>StartUp-StartUp</title>
    </head>
    <body>

        <p><?php echo file_get_contents('version'); ?></p>

        <div>
            <h1>Dev Confidence StartUp-StartUp</h1>
            <a href="/index.php">Home</a>
            <form action="users.php">
                <input id="username" name="signin[username]" type="text" />
                <input id="password" name="signin[password]" type="password" />
                <input type="submit" value="LOGIN" />
            </form>
        </div>

    </body>
</html>
