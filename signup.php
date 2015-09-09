<?php
$page_title = 'Sign Up';
include 'includes/header.php';
?>

<div class="row">
    <div class="col-md-3">
        
    </div>
    
    <div class="col-md-6">
        
        <h2>Signup</h2>
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
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            
            <div class="form-group">
                <label for="agree">I agree with the <a href="#">terms of usage </a>:</label>
                <input type="checkbox" name="agree" reguired>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sign Up">
            </div>
        </form>
    </div>
    
    <div class="col-md-3">
        
    </div>
</div>

<?php
include 'includes/footer.php';
?>