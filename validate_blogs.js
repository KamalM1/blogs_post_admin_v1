$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='user_name']").val() === '')
{
$("#contact-form [name='user_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='blog_title']").val() === '')
{
$("#contact-form [name='blog_title']").css("border","1px solid red");
}
else if ($("#contact-form [name='blog_description']").val() === '')
{
$("#contact-form [name='blog_description']").css("border","1px solid red");
}
else if ($("#contact-form [name='blog_keywords']").val() === '')
{
$("#contact-form [name='blog_keywords']").css("border","1px solid red");
}
else if ($("#contact-form [name='blog_content']").val() === '')
{
$("#contact-form [name='blog_content']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "create_blogs.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue !== '')
{
$(this).css("border","1px solid #eeeeee");
document.getElementById("myTextarea").readOnly = false;
}
});
});
