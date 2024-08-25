<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit Blog info</h5>
</div>
        <div class="card-body">
            <?php 
             $connection = mysqli_connect("localhost","root","","charityorganization");

            if(isset($_POST['edit_blog']))
            {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM blog WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row){
            ?>
         
        <form action="code.php" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="edit_id" value="<?php echo $row['id']?>" >
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="edit_title" value="<?php echo $row['title']?>" class="form-control" placeholder="Enter Project Title">
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea type="text" name="edit_text" class="form-control" rows="5" required><?php echo $row['text']?></textarea>
            </div>
            <div class="form-group">
                <label>Crated Time</label>
                <input type="text" name="edit_date" value="<?php echo $row['created_time']?>" class="form-control" >
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" name="edit_year" value="<?php echo $row['year']?>" class="form-control" placeholder="Enter The Year of the Blog">
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="customFileLang">Update Blog Image</label>
                <input type="file" name="edit_image" value="<?php echo $row['image']?>" id="image" class="custom-file-input">
            </div>
            <br><br>


            <a href="blog.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name ="updateblog" class="btn btn-primary">Update</button>
            </form>
            <?php
                }
            }
            
            ?>

        </div>
    </div>
</div>
</div>


<?php
include('includes/scripts.php');
?>