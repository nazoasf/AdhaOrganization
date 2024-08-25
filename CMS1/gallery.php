<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Image</h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        
            <div class="custom-file">
                <label class="custom-file-label" for="customFileLang">Upload JPG,PNG, or JPEG file</label>
                <input type="file" name="image"  id="image" class="custom-file-input" required>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addimage" class="btn btn-primary">Save</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
  <div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Gallery Page<br><br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add New Image
      </button>
    </h5><br>
    <form action="code.php" method="post" align="right">
        <button type="submit" class="btn btn-danger btn-sm ">Delete Selected Data</button>
      </form>
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
      $query = "SELECT * FROM gallery";
      $query_run = mysqli_query($connection, $query);
    ?>
    
  <table class="table table-bordered" id="dataTable" width="50%;" >
      <thead>
        <tr>
          <th>Id</th>
          <th>Select row</th>
          <th>Image</th>
          <th>Edit / Delete</th>
          
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
          <td ><?php  echo $row['id']; ?></td>
          <td>
            <input type="checkbox" onclick="toggleCkeckbox(this)" value="<?php  echo $row['id']; ?>">
          </td> 
          <td align="center"><?php  echo '<img src="upload/'.$row['image'].'" width="150px;" height="100px;" alt="image">' ?></td>

          <td>
            <form action="gallery_edit.php" method="post">
              <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="edit_image" class="btn btn-success"> EDIT</button>
              </form>
            <form action="code.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_image" class="btn btn-danger"> DELETE</button>
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
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
     function togglecheckbox(box)
	 {
		 var id = $(box).attr("value");
		 if($(box).prop("checked") == true)
		 {
			 var visible = 1;
		 }
		 else
		 {
		 var visible = 0;	 
		 }
		 var  data = {
			 "search_data": 1,
			 "id": id,
			 "visible": visible
		 };

		 $.ajax({
			 type: "post",
			 url: "code.php",
			 data: data,
			 success: function(data) {
				  alert('data checked');
			 }
		 });
	 }


</script> -->