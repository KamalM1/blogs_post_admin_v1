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
         $blogTitlelowercase = strtolower("$blogTitle");
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
         
         //file preparation
         $placeholders = array(' ', '?', '!', "'", '"', ',', '-');
         $filevalues = array('_', '', '', '', '', '', '_');
         $blogfilename = str_replace($placeholders, $filevalues, $blogTitlelowercase);
//
         
         $php_output .= '<?php include("/home/nrisite/public_html/beta/blog_prefix_head_one.php") ?>';
         
         $php_output .= "\n";
         $php_output .= '<title>';
         $php_output .= $blogTitle;
         $php_output .= "</title>";
         $php_output .= "\n";
         $php_output .= '<meta name="description" content="';
         $php_output .= $blogDescription;
         $php_output .= '">';
         $php_output .= "\n";
         $php_output .= '<meta name="keywords" content="';
         $php_output .= $blogKeywords;
         $php_output .= '">';
         $php_output .= "\n";
         $php_output .= '<?php include("/home/nrisite/public_html/beta/blog_prefix_head_two.php") ?>';
         $php_output .= "\n";
         $php_output .= '<?php include("/home/nrisite/public_html/beta/blog_prefix_body_one.php") ?>';
         $php_output .= "\n";
         $php_output .= '<h1>';
         $php_output .= $blogTitle;
         $php_output .= '</h1>';
         $php_output .= "\n";
         $php_output .= '<p><a href="#" class="post-author">';
         $php_output .= $userName;
         $php_output .= ' on </a><a href="#" class="post-date text-right">';
         $php_output .= $blogCreatedTime;
         $php_output .= '</a></p>';
         $php_output .= "\n";
         $php_output .= $blogContent;
         $php_output .= "\n";
         $php_output .= '<?php include("/home/nrisite/public_html/beta/blog_prefix_body_two.php") ?>';
         $php_output .= "\n";

     }
//   
    $filenamepath .= '/home/nrisite/public_html/beta/' . $blogfilename . '.php';
    $filename .= $blogfilename . '.php';    
    $fp = fopen($filenamepath,'w'); 
    $write = fwrite($fp,$php_output);
    unset($filenamepath);   
    unset($php_output);   
    echo " BLOG HAS BEEN POSTED IN BETA SITE - CLICK THE FOLLOWING LINK TO VALIDATE" ;
    echo "\n" ;
    echo "<br><br>" ;
    echo "\n" ;
    echo '<a href="';
    echo "https://nrisite.com/beta/" . $filename;
    echo '" target="_blank">';
    echo "https://nrisite.com/beta/" . $filename ;
    echo "</a>";
    echo "\n" ;
     
    }
    require_once("blogsupdate_footer.php");
    require_once("blogs_footer.php");
?> 