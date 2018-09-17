<!DOCTYPE html>
<html lang="en">  
<head>
<title><?php echo $user['name'];?></title>
</head>
<body>
<div>
    <?php
    if(!empty($success_msg)){
        echo '<p>'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p>'.$error_msg.'</p>';
    }
    ?> 
        <h2><?php echo $user['email']; ?></h2>

    	<p><a href="https://aqueous-fjord-92620.herokuapp.com/index.php/users/logout">Logout</a></p>
</div>
</body>
</html>
