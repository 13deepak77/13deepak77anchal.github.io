<html>
<head>
<title> user login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6" "login-left">
<h2> CHECK APPOINTMENT </h2>

<form action="validation.php" method="post">
<div class="form-group">
<label>User-id</label>
<input type="text" name="user" class="form-control" required>
</div>

<div  class="form-group">
<label> Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div  class="form-group">
<label> Select date</label>
<input type="date" name="date" value="" required name="date"></input>
</div>
<button type="submit" class="btn btn-primary">CHECK</button>
</form>
</div>
<div class="col-md-6" "login-right">
<h2>BOOK APPOINTMENT </h2>

<form action="regi.php" method="post">
<div class="form-group">
<label>User-id</label>
<input type="text" name="user" class="form-control" required>
</div>
<div  class="form-group">
<label> Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<div  class="form-group">
<label> Select date</label>
<input type="date" name="date" value="" required name="date"></input>
</div>
<button type="submit" class="btn btn-primary">BOOK NOW</button>
</form>
</div>
</body>


</html>
