<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BLOG Post</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<?php include_once("/home/nrisite/blogsadmin.nrisite.com/blogs_header.php") ?>

<div class="alert alert-primary" role="alert">
 <div class="container">
  Post BLOG
 </div>
</div>
<hr>
<div class="container mb-5">
<div class="row">
<div class="col-md-12">
<form name="contact-form" action="post_blog.php" method="post" id="contact-form">
<div class="form-group">
<label for="USER Name">USER Name</label>
<input type="text" class="form-control" name="user_name" placeholder="USER Name" required>
</div>
<div class="form-group">
<label for="BLOG Title">BLOG Title</label>
<input type="text" class="form-control" name="blog_title" placeholder="BLOG Title" required>
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">POST BLOG</button>
</form>
</div>
</div>
</div>
<?php include_once("/home/nrisite/blogsadmin.nrisite.com/blogs_footer.php") ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="validate_blogs.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>