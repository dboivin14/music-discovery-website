<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/jpeg" href="/FirstWebpage/favicon.jpeg">
        <?php include 'header.php'; ?>
    </head>
    
  <section>
    <h2 style="padding:10px;">Sign in to your account</h2>
    
    <form class="form" action="/registerAction.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br>
        <input type ="checkbox" id="remember" name="Remember" value ="yes">
        <label for ="remember">Remember my username</label><br>
        <input type="submit" value="submit">
    </form>
    
    <div class="form">
        <label for="forgot"><a href="resetpwd.php">Forgot your password?</a></label><br>
        <label for="new"><a href="register.php">Don't have an account?</a></label>
    </div>
  </section>
    
    <p><?php include 'footer.php'; ?></p>
    
</html>

