<!DOCTYPE html>
<html lang="en">  
<head>
<title><?php echo $signin;?></title>
</head>
<body>
<div>
    <h2>Sign In</h2>
    <?php
    if(!empty($success_msg)){
        echo '<p>'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p>'.$error_msg.'</p>';
    }
    ?>
    <form action="" method="post">
            <input type="email" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span>','</span>'); ?></br></br>
          <input type="password" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span>','</span>'); ?></br></br>
            <input type="submit" name="loginSubmit" value="Submit"/>
    </form>

    <p>Sign via <a href="<?php echo $this->facebook->login_url();?>">facebook</a></p>

    <p><a href="<?php echo base_url(); ?>users/registration">Sign Up</a></p>
</div>
</body>
</html>
