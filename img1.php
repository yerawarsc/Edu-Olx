
<form action="placead.php" method="post" enctype="multipart/form-data">
<label>Category:</label>
 <select name="category">
  <option value="1st yr books">1st yr books</option>
  <option value="2nd yr books">2nd yr books</option>
  <option value="3rd yr books">3rd yr books</option>
  <option value="4th yr books">4th yr books</option>
</select><br><br>
 Select image to upload:
 <input type="file" name= "img" ><br><br><br>
<label>Ad Title:</label><input type="text" name="title" required/><br><br>

<label>Item Price:</label><input type="text" name="price" required/><br><br><br>
<label>Ad Description:</label> <textarea name="ad_details" rows="5" cols="40" ></textarea> <br><br>
<input type="submit"  name="submit" value="submit"/>