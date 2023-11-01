<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    


body{ background:#dee9ff;}
.con{
  width: 600px;
  background:#FFFFFF;
  margin:0 auto;
  padding-top:30px;
  padding-bottom:30px;
}

h1{
    
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 25px;         
  font-style: normal; 
  font-weight: bold; 
  color:#6f6f6f;
  text-align: center; 
  
}

table{
  font-family: Calibri; 
  color:#6f6f6f; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  background-color: #FFFFFF; 
  border-collapse: collapse; 
  border-radius:10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.submit{
    
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
	width:400px;
}

  </style>
</head>
<body>
 <form action="" method="post">

   <h1>REGISTRATION FORM</h1>
   <div class="con">
     <table align="center" cellpadding = "10">
       <tr>
         <td>Name</td>
         <td><input type="text" name="name" id="name"></td>
    </tr>
    
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><select name="gender">
        <option>Male</option>
        <option>Female</option>
      </select></td>
      <td>Mobile No</td>
      <td><input name="mobile" type="text" /></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td colspan="4"><input name="email" type="text" size="62"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="4"><textarea name="address" cols="53" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" /></td>
      <td>State</td>
      <td><input name="state" type="text" /></td>
    </tr>
    <tr>
      <td>Cuntry</td>
      <td><input name="cuntry" type="text" /></td>
      <td>Pin</td>
      <td><input name="pin" type="text" /></td>
    </tr>
    
    <tr>
      <td></td>
      <td colspan="4"><input type="submit" name="register" class="submit"></td>
      
    </tr>
    
  </table>
</div>
</form>
</body>
</html>