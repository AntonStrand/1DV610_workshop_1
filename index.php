<!DOCTYPE html>
	<html>
	<head>
	  <title>Upload your files</title>
	</head>
	<body>
	  <form enctype="multipart/form-data" action="index.php" method="POST">
	    <p>Upload your file</p>
	    <input type="file" name="uploaded_file"></input><br />
	    <input type="submit" value="Upload"></input>
	  </form>
	</body>
	</html>
	<?PHP require_once('Metrics.php');
	  if(!empty($_FILES['uploaded_file']))
	  {
          // change name of path to something less generic
          $path = "_temp/uploaded.php";
	    if (!move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
	        echo "There was an error uploading the file, please try again!";
        }
        $file = file($path);
        $metrics = new Metrics("Hello");

	  }
	?>