<div class="row">
    <div class="col-md-3"></div>
    
    <div class="col-md-6">
        <?php
        if(@$output)
        {
            foreach($output as $keys=>$output_message)
            {
                if($keys == 'alert_type')
                {
                    continue;
                }
                echo '<div class="alert alert-'.$output['alert_type'].'">
                    <strong>'.$keys.' </strong> '.$output_message.'
                </div>';
            }
        }
    ?>
        
        <form method="post" action="reservation.php">
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
    </div>
    
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
    </div>    
    
    <div class="form-group">
        <label for="phone_number">Phone number:</label>
        <input type="number" class="form-control" name="phone_number" placeholder="Phone number" required minlength="9" maxlength="11">
    </div>
    
    <div class="form-group">
        <label for="last_name">Type of room:</label>
        <select name="type_of_room" class="form-control">
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="fanily">Family room</option>
            <option value="appartment">Apartment</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="agree">I agree with the <a href="#">terms of usage </a>:</label>
        <input type="checkbox" name="agree" reguired>
    </div>
            
    <div class="form-group">
        <label for="view">Type of view: </label><br>
        <input type="radio" name="view" value="east"> East /
        <input type="radio" name="view" value="north"> North /
        <input type="radio" name="view" value="south"> South /
        <input type="radio" name="view" value="west"> West
        
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-warning" value="Register">
    </div>
</form>

    
    </div>
    <div class="col-md-3"></div>
</div>

