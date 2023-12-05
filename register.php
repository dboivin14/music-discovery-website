<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/jpeg" href="/FirstWebpage/favicon.jpeg">
        <?php include 'header.php'; ?>
    </head>
    
    <section>
        <h2>Create an Account</h2>
        
        <form class ="form" action="/registerAction.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="dob">Date of Birth:</label><br>
            <input type="text" id="dob" name="dob"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br>
            <label for="confirm">Confirm password:</label><br>
            <input type="password" id="confirm" name="confirm"><br>
            <label for="preference">What is your favorite decade?</label><br>
            <input type="radio" id="seventies" name="preference" value="70's">
            <label for="seventies">70's</label><br>
            <input type="radio" id="eighties" name="preference" value="80's">
            <label for="eighties">80's</label><br>
            <input type="radio" id="nineties" name="preference" value="90's">
            <label for="nineties">90's</label><br>
            <input type="submit" value="Submit">
        </form>
        <br>
        
        
        <div class ="form">
            <label for="login">Already have an account? <a href="login.php">Log in here</a></label>
        </div><br>
  </section>
    
    <p><?php include 'footer.php'; ?></p>
    
</html>
