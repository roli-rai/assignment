<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <?php require_once 'includes/css_links.php'; ?>
</head>
<body>
    <?php require_once 'includes/nav.php'; ?>
    <h1><?php //$msg; ?></h1>

    <div class="container my-3 p-3">
        <div class="row justify-content-center ">
            <div class="col-5 border border-dard shadow p-4">
                <div>
                    
                 
                <div>
                    <strong>Email </strong>: 

                    <span class="text-primary"><?= $user['Email']; ?></span>
                </div>
                <div>
                    <strong>Roll</strong>: 
                    <span class="text-primary">
                        <?php 
                            if($user['Rol_id']==1){
                                echo "Superadmin";
                            }
                            elseif($user['Rol_id']==2){
                                echo "Admin";

                            }
                            else{
                               echo "User";
                            }
                        ?>
                    </span>
                    <!--superadmin=1 , admin=2, user=3 -->
                </div>
                </div> 
              </div>
               </div>
               </div>
    
    <?php // require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/js_links.php'; ?>
</body>
</html>