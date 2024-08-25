<?php

include('security.php');
//add register
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email',md5('$password'),'$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['success'] = "Admin Profile Not Added";
               
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            
            header('Location: register.php');  
        }
    }

}

//update register
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE register set username='$username', email='$email', password='$password', usertype='$usertypeupdate' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: register.php');
    }
}


//delete register
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Deleted";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Deleted";
        header('Location: register.php');
    }
}

//add phil
if(isset($_POST['addphil']))
{
    $name = $_POST['name'];
    $text = $_POST['text'];
    $image = $_FILES['image']['name'];

    $validate_img_extention = $_FILES['image']['type']== "image/jpg" ||
    $_FILES['image']['type']== "image/png" ||
    $_FILES['image']['type']== "image/jpeg";

    if($validate_img_extention)
    {

    if(file_exists("upload/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location : home.php');
    }
    else
    {
    $query = "INSERT INTO philantrophist (name,text,image) VALUES ('$name','$text','$image')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Philantropist Added";
                
                header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Philantropist NOT Added";       
        header('Location: home.php');
    }
    }
    }
    else
    {
        $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed";       
        header('Location: home.php');
    }
    
}


//update phil
if(isset($_POST['updatephil']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $text = $_POST['edit_text'];
    $image =  $_FILES['edit_image']['name'];

    $validate_img_extention = $_FILES['edit_image']['type']== "image/jpg" ||
    $_FILES['edit_image']['type']== "image/png" ||
    $_FILES['edit_image']['type']== "image/jpeg";

    
    
    $home_query = "SELECT * FROM philantrophist WHERE id='$id' ";
    $home_query_run=mysqli_query($connection,$home_query);
    foreach ($home_query_run as $home_row)
    {
        if($image == NULL)
        {
            
            $image_data = $home_row['image'];
        }
        else
        {
            //update new image and delete exsiting image
            if($img_path = "upload/".$home_row['image'])
            {
                unlink($img_path);
                $image_data = $image;
            }

        }
    }

    $query = "UPDATE philantrophist set name='$name', text='$text', image='$image_data' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        if($image == NULL)
        {
            $_SESSION['success'] = "Your data is Updated";
             header('Location: home.php');
        }
        else if($validate_img_extention)
        {
            //update new image and delete exsiting image
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
            $_SESSION['success'] = "Your data is Updated";
            header('Location: home.php');
        }
        else
        {
            $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed. Update again";       
            header('Location: home.php');
        }
       
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: home.php');
    }
    
    
}


//delete phil
if(isset($_POST['delete_phil']))
{
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM philantrophist WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Philantrophist is Deleted";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Philantrophist is NOT Deleted";
        header('Location: home.php');
    }
}


//add gallery
if(isset($_POST['addimage']))
{
    
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];

    $validate_img_extention = $_FILES['image']['type']== "image/jpg" ||
    $_FILES['image']['type']== "image/png" ||
    $_FILES['image']['type']== "image/jpeg";

    if($validate_img_extention)
    {

    if(file_exists("upload/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location : home.php');
    }
    else
    {
    $query = "INSERT INTO gallery (name,image) VALUES ('$name','$image')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Image Added";
                
                header('Location: gallery.php');
    }
    else
    {
        $_SESSION['status'] = "Image NOT Added";       
        header('Location: gallery.php');
    }
    }
    }
    else
    {
        $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed";       
        header('Location: gallery.php');
    }
    
}

//update gallery
if(isset($_POST['updateimage']))
{
    $name = $_POST['name'];
    $image =  $_FILES['edit_image']['name'];

    $validate_img_extention = $_FILES['edit_image']['type']== "image/jpg" ||
    $_FILES['edit_image']['type']== "image/png" ||
    $_FILES['edit_image']['type']== "image/jpeg";

    
    
    $home_query = "SELECT * FROM gallery WHERE id='$id' ";
    $home_query_run=mysqli_query($connection,$home_query);
    foreach ($home_query_run as $home_row)
    {
        if($image == NULL)
        {
            
            $image_data = $home_row['image'];
        }
        else
        {
            //update new image and delete exsiting image
            if($img_path = "upload/".$home_row['image'])
            {
                unlink($img_path);
                $image_data = $image;
            }

        }
    }

    $query = "UPDATE gallery set name='$name',image='$image_data' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        if($image == NULL)
        {
            $_SESSION['success'] = "Your data is Updated";
             header('Location: gallery.php');
        }
        else if($validate_img_extention)
        {
            //update new image and delete exsiting image
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
            $_SESSION['success'] = "Your data is Updated";
            header('Location: gallery.php');
        }
        else
        {
            $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed. Update again";       
            header('Location: gallery.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: gallery.php');
    }
    
    
}


//delete gallery
if(isset($_POST['delete_image']))
{
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM gallery WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Image is Deleted";
        header('Location: gallery.php');
    }
    else
    {
        $_SESSION['status'] = "Image is NOT Deleted";
        header('Location: gallery.php');
    }
}




//add proj
if(isset($_POST['addproj']))
{
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_FILES['image']['name'];

    $validate_img_extention = $_FILES['image']['type']== "image/jpg" ||
    $_FILES['image']['type']== "image/png" ||
    $_FILES['image']['type']== "image/jpeg";

    if($validate_img_extention)
    {

    if(file_exists("upload/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location : projects.php');
    }
    else
    {
    $query = "INSERT INTO projects (title,text,image) VALUES ('$title','$text','$image')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Project Added";
                
                header('Location: projects.php');
    }
    else
    {
        $_SESSION['status'] = "Project NOT Added";       
        header('Location: projects.php');
    }
    }
    }
    else
    {
        $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed";       
        header('Location: projects.php');
    }
    
}


//update proj
if(isset($_POST['updateproj']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $text = $_POST['edit_text'];
    $image =  $_FILES['edit_image']['name'];

    $validate_img_extention = $_FILES['edit_image']['type']== "image/jpg" ||
    $_FILES['edit_image']['type']== "image/png" ||
    $_FILES['edit_image']['type']== "image/jpeg";

    
    $home_query = "SELECT * FROM projects WHERE id='$id' ";
    $home_query_run=mysqli_query($connection,$home_query);
    foreach ($home_query_run as $home_row)
    {
        if($image == NULL)
        {
            
            $image_data = $home_row['image'];
        }
        else
        {
            //update new image and delete exsiting image
            if($img_path = "upload/".$home_row['image'] )
            {
                unlink($img_path);
                $image_data = $image;
            }
           
        }
    }
    
    $query = "UPDATE projects set title='$title', text='$text', image='$image_data' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        if($image == NULL)
        {
            $_SESSION['success'] = "Your data is Updated";
             header('Location: projects.php');
        }
        else if($validate_img_extention)
        {
            //update new image and delete exsiting image
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
            $_SESSION['success'] = "Your data is Updated";
            header('Location: projects.php');
        }
       
        else
        {
            $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed. Update again";       
            header('Location: projects.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: projects.php');

    }
    
    
}


//delete proj
if(isset($_POST['delete_proj']))
{
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM projects WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Project is Deleted";
        header('Location: projects.php');
    }
    else
    {
        $_SESSION['status'] = "Project is NOT Deleted";
        header('Location: projects.php');
    }
}

// check box
// if(isset($_POST['search_data']))
// {
//     $id = $_POST['id'];
//     $visible = $_POST['visible'];

//     $query = "UPDATE gallery SET visible='$visible' WHERE id='$id' ";
//     $query_run = mysqli_query($connection,$query);
// }


// if(isset($_POST['delete_data']))
// {
//     $id = "1";
//     $query= "DELETE FROM gallery WHERE visible='$id' ";
//     $query_run = mysqli_query($connection,$query);

//     if($query_run)
//     {
//         $_SESSION['success'] = "Your DATA is Deleted";
//         header('Location: gallery.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Your DATA is NOT Deleted";
//         header('Location: gallery.php');
//     }
    
// }



//add leader
if(isset($_POST['addleader']))
{
    $name = $_POST['name'];
    $position = $_POST['position'];
    $text = $_POST['text'];
    $image = $_FILES['image']['name'];

    $validate_img_extention = $_FILES['image']['type']== "image/jpg" ||
    $_FILES['image']['type']== "image/png" ||
    $_FILES['image']['type']== "image/jpeg";

    if($validate_img_extention)
    {

    if(file_exists("upload/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location : about.php');
    }
    else
    {
    $query = "INSERT INTO leadership (name,position,text,image) VALUES ('$name','$position','$text','$image')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Leadership Added";
                
                header('Location: about.php');
    }
    else
    {
        $_SESSION['status'] = "Leadership NOT Added";       
        header('Location: about.php');
    }
    }
    }
    else
    {
        $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed";       
        header('Location: about.php');
    }
    
}


//update leader
if(isset($_POST['updateleader']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $position = $_POST['edit_position'];
    $text = $_POST['edit_text'];
    $image =  $_FILES['edit_image']['name'];

    $validate_img_extention = $_FILES['edit_image']['type']== "image/jpg" ||
    $_FILES['edit_image']['type']== "image/png" ||
    $_FILES['edit_image']['type']== "image/jpeg";

    
    $home_query = "SELECT * FROM leadership WHERE id='$id' ";
    $home_query_run=mysqli_query($connection,$home_query);
    foreach ($home_query_run as $home_row)
    {
        if($image == NULL)
        {
            
            $image_data = $home_row['image'];
        }
        else
        {
            //update new image and delete exsiting image
            if($img_path = "upload/".$home_row['image'] )
            {
                unlink($img_path);
                $image_data = $image;
            }
           
        }
    }
    
    $query = "UPDATE leadership set name='$name',position='$position', text='$text', image='$image_data' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        if($image == NULL)
        {
            $_SESSION['success'] = "Your data is Updated";
             header('Location: about.php');
        }
        else if($validate_img_extention)
        {
            //update new image and delete exsiting image
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
            $_SESSION['success'] = "Your data is Updated";
            header('Location: about.php');
        }
       
        else
        {
            $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed. Update again";       
            header('Location: about.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: about.php');

    }
    
    
}


//delete leader
if(isset($_POST['delete_leader']))
{
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM leadership WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Leadership is Deleted";
        header('Location: about.php');
    }
    else
    {
        $_SESSION['status'] = "Leadership is NOT Deleted";
        header('Location: about.php');
    }
}

//add blog
if(isset($_POST['addblog']))
{
    $title = $_POST['title'];
    $text = $_POST['text'];
    $created_time = $_POST['created_time'];
    $year = $_POST['year'];
    $image = $_FILES['image']['name'];

    $validate_img_extention = $_FILES['image']['type']== "image/jpg" ||
    $_FILES['image']['type']== "image/png" ||
    $_FILES['image']['type']== "image/jpeg";

    if($validate_img_extention)
    {

    if(file_exists("upload/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location : blog.php');
    }
    else
    {
    $query = "INSERT INTO blog (title,text,created_time,year,image) VALUES ('$title','$text','$created_time','$year','$image')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Blog Added";
                
                header('Location: blog.php');
    }
    else
    {
        $_SESSION['status'] = "Blog NOT Added";       
        header('Location: blog.php');
    }
    }
    }
    else
    {
        $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed";       
        header('Location: blog.php');
    }
    
}


//update blog
if(isset($_POST['updateblog']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $text = $_POST['edit_text'];
    $created_time = $_POST['edit_date'];
    $year = $_POST['edit_year'];
    $image =  $_FILES['edit_image']['name'];

    $validate_img_extention = $_FILES['edit_image']['type']== "image/jpg" ||
    $_FILES['edit_image']['type']== "image/png" ||
    $_FILES['edit_image']['type']== "image/jpeg";

    
    $home_query = "SELECT * FROM blog WHERE id='$id' ";
    $home_query_run=mysqli_query($connection,$home_query);
    foreach ($home_query_run as $home_row)
    {
        if($image == NULL)
        {
            
            $image_data = $home_row['image'];
        }
        else
        {
            //update new image and delete exsiting image
            if($img_path = "upload/".$home_row['image'] )
            {
                unlink($img_path);
                $image_data = $image;
            }
           
        }
    }
    
    $query = "UPDATE blog set title='$title', text='$text',created_time='$created_time',year='$year', image='$image_data' 
    WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        if($image == NULL)
        {
            $_SESSION['success'] = "Your data is Updated";
             header('Location: blog.php');
        }
        else if($validate_img_extention)
        {
            //update new image and delete exsiting image
            move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
            $_SESSION['success'] = "Your data is Updated";
            header('Location: blog.php');
        }
       
        else
        {
            $_SESSION['status'] = "Only JPG,PNG, and JPEG are allowed. Update again";       
            header('Location: blog.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Your data is NOT Updated";
        header('Location: blog.php');

    }
    
    
}


//delete blog
if(isset($_POST['delete_blog']))
{
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM blog WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Blog is Deleted";
        header('Location: blog.php');
    }
    else
    {
        $_SESSION['status'] = "Blog is NOT Deleted";
        header('Location: blog.php');
    }
}

?>