<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Leadership</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
             <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter the name of the leadership" required>
            </div>
            <div class="form-group">
                <label> Position </label>
                <input type="text" name="position" class="form-control" placeholder="Enter the position of the leadership" required>
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea type="text" name="text" class="form-control checking_email" rows="5" required></textarea>
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="customFileLang">Upload Pic of the Leader</label>
                <input type="file" name="image"  id="image" class="custom-file-input" required>
            </div>
            
            

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addleader" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
  <div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">About Page<br><br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Leadership
      </button>
    </h5>
</div>
<div class="card-body">

    <?php
    if(isset($_SESSION['success']) &&  $_SESSION['success'] != '')
    {
      echo '<h4 class="text-success">'.$_SESSION['success']. '</h4>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) &&  $_SESSION['status'] != '')
    {
      echo '<h4 class="text-danger">'.$_SESSION['status']. '</h4>';
      unset($_SESSION['status']);
    }

    ?>

<div class="table-responsive">
    <?php
    $connection = mysqli_connect("localhost","root","","charityorganization");
      $query = "SELECT * FROM leadership";
      $query_run = mysqli_query($connection, $query);
    ?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Position</th>
          <th>Text</th>
          <th>Image</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
           if(mysqli_num_rows($query_run) > 0)        
           {
            while($row = mysqli_fetch_assoc($query_run))
              {
        ?>
        <tr>
          <td><?php  echo $row['id']; ?></td>
          <td><?php  echo $row['name']; ?></td>
          <td><?php  echo $row['position']; ?></td>
          <td><?php  echo $row['text']; ?></td>
          <td><?php  echo '<img src="upload/'.$row['image'].'" width="150px;" height="100px;" alt="image">' ?></td>
          
          
          
          <td>
            <form action="about_edit.php" method="post">
              <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="edit_leader" class="btn btn-success"> EDIT</button>
            </form>
          </td>
          <td>
            <form action="code.php" method="post">
              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="delete_leader" class="btn btn-danger"> DELETE</button>
            </form>
          </td>
          </tr>
          <?php
          } 
        }
         else {
             echo "No Record Found";
              }
          ?>
      </tbody>
    </table>
    
    </div>
  </div>
  </div>

</div>
  <?php
  include('includes/scripts.php');
  ?>
              