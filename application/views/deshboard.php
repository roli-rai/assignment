<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once 'includes/css_links.php'; ?>
</head>
<body>
<?php require_once 'includes/nav.php'; ?>
 
    <h1><?php echo " Welcome , ";   ?>                 
    
        <span class="text-primary"><?= $user['FirstName']; ?></span>                  
                    </span> 
                    <span class="text-primary"><?= $user['LastName']; ?></span>                  
                    </span>
                </H1>
               
    <?php require_once 'includes/js_links.php'; ?>
 
<?php require_once 'includes/js_links.php'; ?>
</body>
</html>