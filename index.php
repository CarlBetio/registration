<!DOCTYPE html>
<html>
<head>
    
</head>    
<body>

    
 <form class="form-horizontal page-content" form method="POST" action="save.php">
  First name:<br>
  <input type="text" name="firstname" required>
  <br>
  Last name:<br>
  <input type="text" name="lastname" required>
  <br>
     Gender:<br>
     <select name="gender" required>
  <option value="male">Male</option>
           <option value="female">Female</option>
     </select> <br> 
Age:<br>
  <input type="number" name="age" required>
  <br> 
Address:<br>
  <input type="text" name="address" required>
  <br>
Zip:<br>
  <input type="number" name="zip" required>
  <br>
Username:<br>
  <input type="text" name="username" required>
  <br>   
Password:<br>
  <input type="text" name="password" placeholder="************" required>
  <br>       
 <br><br>     
  <input type="submit" value="submit" name="submit">
</form> 

</body>
</html>
