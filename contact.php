<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/jpeg" href="/FirstWebpage/favicon.jpeg">
        <?php include 'header.php'; ?>
    </head>

    <div>
        <body style = "text-align: center;">
            <h2>Send a message:</h2>
            <form action="/contact.php>
                <div style="text-align: left; padding: 20px; font">
                    <div class="row">
                        <div class="col">
                            <label for ="fname" class="form-label"><strong>First Name</strong></label>
                            <input type ="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname">
                            <label for ="lname" class="form-label"><strong>Last Name</strong></label>
                            <input type ="lname" class="form-control" id="lname" placeholder="Enter last name" name="lname">
                            <label for ="email" class="form-label"><strong>E-mail</strong></label>
                            <input type ="email" class="form-control" id="email" placeholder="Enter e-mail" name="email">
                            <label for="Comment"><strong>Comments:</strong></label>
                            <textarea class="form-control" row="4" id="comment" name="text"></textarea>
                        </div>
                    </div>    
                </div>
                <button type="submit" class="btn btn-primary">Send message</button>
            </form>
        </body>
    </div>
        
    <p><?php include 'footer.php'; ?></p>
    
</html>