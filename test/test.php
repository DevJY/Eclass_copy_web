<!DOCTYPE html>
<html>
<head>
	<title>testing_insert_page</title>
</head>
<body>
	
	<form action="testing_insert_page.php">
		<input type="text" name="user" placeholder="생성유저 : "> <br>
		<input type="text" name="user_type" placeholder="유저유형 : "> <br>
		<input type="text" name="FAQ_type" placeholder="FAQ유형 : "> <br>
		<input type="text" name="post_title" placeholder="post_title : "> <br>
		<input type="text" name="FAQ_content" placeholder="content : " value="미정"> <br>
		<button type="submit" >입력</button> 
	</form>

	<?php  
	$_query = 'INSERT INTO FAQ_content (created, cre_user, post_title, FAQ_type, user_type, content) VALUES (now(), \''.$_POST[user].'\'
  , \''.$_POST[post_title].'\' , \''.$_POST[FAQ_title].'\', \''.$_POST[content].'\'));'
  echo $_query;
    ?>
</body>
</html>