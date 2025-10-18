<?php 
    require_once("blogsupdate_header.php");
    
    require_once("konnect.php");
    if((isset($_POST['user_name'])&& $_POST['user_name'] !='') && 
       (isset($_POST['blog_title'])&& $_POST['blog_title'] !='') && 
       (isset($_POST['blog_description'])&& $_POST['blog_description'] !='') && 
       (isset($_POST['blog_keywords'])&& $_POST['blog_keywords'] !='') && 
       (isset($_POST['blog_content'])&& $_POST['blog_content'] !='')
       )
    {
     $userName = $conn->real_escape_string($_POST['user_name']);
     $blogTitle = $conn->real_escape_string($_POST['blog_title']);
     $blogDescription = $conn->real_escape_string($_POST['blog_description']);
     $blogKeywords = $conn->real_escape_string($_POST['blog_keywords']);
     $blogContent = $conn->real_escape_string($_POST['blog_content']);
     $sql="INSERT INTO blogs_master (user_name, blog_title, blog_description, blog_keywords, blog_content) 
           VALUES ('".$userName."','".$blogTitle."', '".$blogDescription."', '".$blogKeywords."', '".$blogContent."')";
     if(!$result = $conn->query($sql)){
     die('There was an error running the query [' . $conn->error . ']');
     }
     else
     {
     echo "The BLOG has been CREATED in the DATABASE";
     }
     }
     else
     {
     echo "Please FILL the REQUIRED information";
     }
     
     require_once("blogsupdate_footer.php");
?>