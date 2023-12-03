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

   <h1>NEW ACCOUNT</h1>
   <div class="con">
     <table align="center" cellpadding = "10">
       <tr>
         <td>Name</td>
         <td><input type="text" name="name" id="name"></td>
    </tr>
       <tr>
         <td>Mobile</td>
         <td><input type="text" name="mobile" id="mobile"></td>
    </tr>
       <tr>
         <td>Email</td>
         <td><input type="text" name="email" id="email"></td>
    </tr>
       <tr>
         <td>DOB</td>
         <td><input type="text" name="dob" id="dob"></td>
    </tr>
    
    <tr>
      <td>Age</td>
      <td><input name="age" id="age" type="text" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><select name="gender" id="gender">
        <option>Male</option>
        <option>Female</option>
      </select></td>
      
    </tr>
    
    <tr>
      <td>Adharcard</td>
      <td><input name="adharno" id="adharno" type="text" /></td>
      
    </tr>
    <tr>
      <td>Pancard</td>
      <td><input name="panno" id="panno" type="text" /></td>
      
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="4"><textarea name="address" id="address" cols="53" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" id="city" type="text" /></td>
      <td>State</td>
      <td><input name="state" id="state" type="text" /></td>
    </tr>
    <tr>
      <td>Cuntry</td>
      <td><input name="cuntry" id="cuntry" type="text" /></td>
      <td>Pin</td>
      <td><input name="pin" id="pin" type="text" /></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="4"><input type="submit" name="newaccount" class="submit"></td>
      
    </tr>
    
  </table>
</div>
</form>
</body>
</html>