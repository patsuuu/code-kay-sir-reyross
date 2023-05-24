<!DOCTYPE html>
<a href="view.php">View</a>
<html>
<head>
    
	<title>Image Upload Using PHP</title>
	<style>
  
		body {
			background-image: url('https://cdn.discordapp.com/attachments/1028865757444055092/1110890032274878515/canva-rainbow-gradient-pink-and-purple-virtual-background-_Tcjok-d9b4.png');
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}

	</style>
</head>

<body>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>"WELCOME"</h1>
    <a href="logout.php">Logout</a>
  </body>
</html>