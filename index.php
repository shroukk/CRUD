

<?php

?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Task</title>
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
        <script src="assets/bootstrap-4.3.1-dist/jquery-3.4.1.min.js"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/style.css"/>
    </head>
    <body>

        <?php require_once 'select.php' ?>
        <?php require_once 'update.php' ?>

        <div class=" main container">
        <form   <?php if($update == false):?>action="create.php" <?php  else:?> 
                action="update.php"<?php endif;?>
                method="POST">
                <div class="row form-style">

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="<?php echo $firstname; ?>" name="firstname" placeholder="First name">
    
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="<?php echo $lastname; ?>" placeholder="Last name" name="lastname">
    
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="<?php echo $username; ?>"  placeholder="Username" name="username">
    
                    </div>
                    <div class="col-md-3">
                    <?php if($update == true){?>

                        <button type="submit" class="btn btn-dark"  name="update">update</button>
                    <?php }else{ ?>
                    <button type="submit" class="btn btn-dark"  name="save">Save</button>
                    <?php }; ?>

                    </div>
                
                </div>
            </form>




      

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($q)):?>
                           
                           <tr>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td>
                                <a href="index.php?edit=<?php echo $row['id'];?>" class="btn btn-dark">Edit</a>
                                <a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-dark">Delete</a>

                            </td>

                           </tr>
                           
                    <?php endwhile; ?>

                    
                </tbody>
              </table>
              
             

        </div>

        


    </body>
</html>