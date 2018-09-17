<!DOCTYPE html>
<html lang="en">  
<head>
    <title><?php echo $user['signup'];?></title>
</head>
<body>
<div>
    <h2>Sign Up</h2>
    <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span>','</span>'); ?></br></br>
            <input type="email" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span>','</span>'); ?></br></br>
          <input type="password" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span>','</span>'); ?></br></br>
          <input type="password" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span>','</span>'); ?></br></br>
          <input type="submit" name="regisSubmit" value="Submit"/>
    </form>
    <p><a href="<?php echo base_url(); ?>users/login">Sign In</a> into existing account</p>              
</div>
</body>
</html>