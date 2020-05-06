<?php /**
 * User: Rosalie Bloemers
 * Date: 22-4-2020
 */ ?>
<?php include '../header.php'; ?>
    <body>
    <form action="checklogin.php" method="post">
        <label>Username</label>
        <br>
        <input type="text" name="username">
         <br>
        <label>Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
<br>

    </body>
<?php include '../footer.php'; ?>