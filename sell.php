<?php
include('config/setup.php');

if(empty($_POST) == FALSE)
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	if (empty($title) == true || empty($author) == true || empty($description) == true || empty($price)) 
	{
		$errors[] = 'You must fill out all the required fields!';
	}
	else 
	{
		$sell_data = array(
			'title' 		=> $_POST['title'],
			'author' 		=> $_POST['author'],
			'description' 	=> $_POST['description'],
			'price' 		=> $_POST['price']
		);
		addBook($dbConnection, $sell_data);	
		if(isset($_FILES['bookImage']) == true)
		{
			$targetDirectory = "images/";
			$targetFile = $targetDirectory . basename($_FILES["bookImage"]["name"]);
			$imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
			$uploadOk = 1;
    		$check = getimagesize($_FILES["bookImage"]["tmp_name"]);
    		if($check !== false) 
    		{
        		$uploadOk = 1;
    		} 
    		else 
    		{
        		echo "File is not an image.";
        		$uploadOk = 0;
    		}
			if ($_FILES["bookImage"]["size"] > 500000) 
			{
    			echo "Sorry, your file is too large.";
    			$uploadOk = 0;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) 
			{
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			if ($uploadOk == 0) 
			{
   				echo "Sorry, your file was not uploaded.";
			} 
			else 
			{
    			if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $targetFile)) 
    			{
       				echo "The file ". basename( $_FILES["bookImage"]["name"]). " has been uploaded.";
    			} 
    			else 
    			{
        			echo "Sorry, there was an error uploading your file.";
    			}
			}		
		}
	}
}

if (empty($errors) === false) 
{
?>
	<h2>We tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
?>

<?php 
include('template/overall/header.php');
include('template/sellForm.php');
include('template/overall/footer.php'); 
?>