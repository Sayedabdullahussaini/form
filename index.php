<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="form-style-6">
<form action="insert.php" method="post">
	<p>
    	<label for="Name"> Name:</label>
        <input type="text" name="name" id="name" required>
    </p>
    <p>
    	<label for="fav_color">fav_color:</label>
        <select name="fav_color" required>
 <option>---Select Color--</option>
 <option value="Black">Black</option>
 <option value="White">White</option>
 <option value="Blue">Blue</option>
 <option value="Red">Red</option>
 <option value="Orange">Orange</option>
 
 </select>
    </p>
    <p>
    	<label for="pets">pets:</label>
        <input type="radio" name="pets" value="Cat"/>Cat 
		<input type="radio" name="pets" value="Dog"/>Dog
    </p>
    <input type="submit" value="Add Records">
</form>
</div>
</body>
</html>