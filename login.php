<?php
$page_title = 'Login';
include 'includes/header.php';
?>

<div class="row">
    <div class="col-md-3">
        
    </div>
    
    <div class="col-md-6">
        
        <h2>Login</h2>
        <form method="post" action="signup.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            
            <div class="form-group">
                <label for="passoword">Passowrd:</label>
                <input type="password" class="form-control" name="passoword" placeholder="Passoword" required>
            </div>
                       
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
    
    <div class="col-md-3">
        
    </div>
</div>

<?php
include 'includes/footer.php';
?>