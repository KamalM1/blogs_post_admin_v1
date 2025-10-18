<?php 
    
    require_once("blogsupdate_header.php");

    require_once("konnect.php");
    if((isset($_POST['blog_id'])&& $_POST['blog_id'] !='') && 
       (isset($_POST['user_name'])&& $_POST['user_name'] !='') && 
       (isset($_POST['blog_title'])&& $_POST['blog_title'] !='') && 
       (isset($_POST['blog_description'])&& $_POST['blog_description'] !='') && 
       (isset($_POST['blog_keywords'])&& $_POST['blog_keywords'] !='') && 
       (isset($_POST['blog_content'])&& $_POST['blog_content'] !='')
       )
    {
     $blogID = $conn->real_escape_string($_POST['blog_id']);
     $userName = $conn->real_escape_string($_POST['user_name']);
     $blogTitle = $conn->real_escape_string($_POST['blog_title']);
     $blogDescription = $conn->real_escape_string($_POST['blog_description']);
     $blogKeywords = $conn->real_escape_string($_POST['blog_keywords']);
     $blogContent = $conn->real_escape_string($_POST['blog_content']);
     $blogPriority = $conn->real_escape_string($_POST['blog_priority']);
     $blogHomepageFlag = $conn->real_escape_string($_POST['blog_homepage_flag']);
     $blogCreatedTime = $conn->real_escape_string($_POST['blog_created_time']);
     $blogUpdatedTime = $conn->real_escape_string($_POST['blog_updated_time']);
     $blogsRelated = $conn->real_escape_string($_POST['blogs_related']);
     $generalComments = $conn->real_escape_string($_POST['general_comments']);
     $col12 = $conn->real_escape_string($_POST['col12']);
     $col13 = $conn->real_escape_string($_POST['col13']);
     $col14 = $conn->real_escape_string($_POST['col14']);
     $col15 = $conn->real_escape_string($_POST['col15']);
     
     $sql=("UPDATE $table 
     SET blog_id =  '$blogID',
     user_name =  '$userName', 
     blog_title = '$blogTitle',
     blog_description = '$blogDescription',
     blog_keywords = '$blogKeywords',
     blog_content = '$blogContent',
     blog_priority = '$blogPriority',
     blog_homepage_flag = '$blogHomepageFlag',
     blog_created_time = '$blogCreatedTime',
     blog_updated_time = '$blogUpdatedTime',
     blogs_related = '$blogsRelated',
     general_comments = '$generalComments',
     col12 = '$col12',
     col13 = '$col13',
     col14 = '$col14',
     col15 = '$col15'
     WHERE
     blog_id = '$blogID' AND
     user_name = '$userName'AND
     blog_title = '$blogTitle'");
     if(!$result = $conn->query($sql)){
     die('There was an error running the query [' . $conn->error . ']');
     }
     else
     {
     echo "The BLOG has been UPDATED in the DATABASE";
     }
     }
     else
     {
     echo "Please FILL the REQUIRED information";
     }
     
     require_once("blogsupdate_footer.php");
?>