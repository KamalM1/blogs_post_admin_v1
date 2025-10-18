<?php 
    
    require_once("blogsupdate_header.php");

    
    require_once("konnect.php");
    if((isset($_POST['user_name'])&& $_POST['user_name'] !='') && 
       (isset($_POST['blog_title'])&& $_POST['blog_title'] !='') 
       )
    {
     $userName = $conn->real_escape_string($_POST['user_name']);
     $blogTitle = $conn->real_escape_string($_POST['blog_title']);
     
     //echo $userName;
     //echo $blogTitle;

     $sql="SELECT * FROM $table WHERE user_name = '$userName' AND blog_title = '$blogTitle' ORDER BY blog_created_time DESC LIMIT 1";
 
     $result=mysqli_query($conn, $sql);
     $num_rows=mysqli_num_rows($result);
       
     
    for ($i = 0; $i < $num_rows; $i++) {
        $row = mysqli_fetch_assoc($result);
        $userName = $row["user_name"];
        $blogTitle = $row["blog_title"];
        
         $blogID= $row["blog_id"];
         $userName= $row["user_name"];
         $blogTitle= $row["blog_title"];
         $blogDescription= $row["blog_description"];
         $blogKeywords= $row["blog_keywords"];
         $blogContent= $row["blog_content"];
         $blogPriority= $row["blog_priority"];
         $blogHomepageFlag= $row["blog_homepage_flag"];
         $blogCreatedTime= $row["blog_created_time"];
         $blogUpdatedTime= $row["blog_updated_time"];
         $blogsRelated= $row["blogs_related"];
         $generalComments= $row["general_comments"];
         $col12= $row["col12"];
         $col13= $row["col13"];
         $col14= $row["col14"];
         $col15= $row["col15"];
         
         
         echo '<div class="row">';
         echo '<div class="col-md-12">';
         echo '<form name="contact-form" action="update_blog.php" method="post" id="contact-form">';
         echo '<div class="form-group">';
         echo '<label for="Blog ID">Blog ID</label>';
         echo '<input type="text" class="form-control" name="blog_id" value="', $blogID, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="USER Name">USER Name</label>';
         echo '<input type="text" class="form-control" name="user_name" value="', $userName, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog Title">Blog Title</label>';
         echo '<input type="text" class="form-control" name="blog_title" value="', $blogTitle, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog Description">Blog Description</label>';
         echo '<input type="text" class="form-control" name="blog_description" value="', $blogDescription, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog Keywords">Blog Keywords</label>';
         echo '<input type="text" class="form-control" name="blog_keywords" value="', $blogKeywords, '">';
         echo '</div>';
         echo '<div class="form-group" contenteditable="true">';
         echo '<label for="comments">Blog Content</label>';
         //echo '<textarea name="blog_content" class="form-control" cols="28" rows="10" placeholder="', $blogContent, '"></textarea>';
         echo '<textarea name="blog_content" class="form-control" cols="28" rows="10" value= > "', $blogContent, '" </textarea>';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog Priority">Blog Priority</label>';
         echo '<input type="text" class="form-control" name="blog_priority" value="', $blogPriority, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog HomepageFlag">Blog HomepageFlag</label>';
         echo '<input type="text" class="form-control" name="blog_homepage_flag" value="', $blogHomepageFlag, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog CreatedTime">Blog CreatedTime</label>';
         echo '<input type="text" class="form-control" name="blog_created_time" value="', $blogCreatedTime, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog UpdatedTime">Blog UpdatedTime</label>';
         echo '<input type="text" class="form-control" name="blog_updated_time" value="', $blogUpdatedTime, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="Blog Related">Blog Related</label>';
         echo '<input type="text" class="form-control" name="blogs_related" value="', $blogsRelated, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="General Comments">General Comments</label>';
         echo '<input type="text" class="form-control" name="general_comments" value="', $generalComments, '">';
         echo '</div>';
         echo '<div class="form-group">';
         echo '<label for="col12">col12</label>';
         echo '<input type="text" class="form-control" name="col12" value="', $col12, '">';
         echo '</div>';        
         echo '<div class="form-group">';
         echo '<label for="col13">col12</label>';
         echo '<input type="text" class="form-control" name="col13" value="', $col13, '">';
         echo '</div>';   
         echo '<div class="form-group">';
         echo '<label for="col14">col14</label>';
         echo '<input type="text" class="form-control" name="col14" value="', $col14, '">';
         echo '</div>';   
         echo '<div class="form-group">';
         echo '<label for="col15">col15</label>';
         echo '<input type="text" class="form-control" name="col15" value="', $col15, '">';
         echo '</div>';   
         
     }
     if(!$result = $conn->query($sql)){
     die('There was an error running the query [' . $conn->error . ']');
     }
     else
     {
     echo '<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">UPDATE BLOG</button>';
     echo '</form>';
     $conn->close(); 
     }
     }
     else
     {
     echo "Please FILL the REQUIRED information";
     }
     
     require_once("blogsupdate_footer.php");
     require_once("blogs_footer.php");
?>