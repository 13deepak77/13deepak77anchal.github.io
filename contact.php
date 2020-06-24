<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body  {
  background-image: url("img/pic.jpg");
  background-color: #cccccc;
}
</style>

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  width: 35%;
  padding: 20px;
  height: 300px; /* Should be removed. Only for demonstration */
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #d5fa05;
   color: white;
   text-align: center;

   
 
}
</style>
</head>
<body>


<div class="row">
  <div class="column" style="background-color:#d5fa05;">
   <h1>Hospital Address  :</h1>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>India</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>codeprojectsorg@gmail.com</span></p>
					
						</div>


						

<div class="footer">
  <h1>KASA CLINIC</h1>
  	<a class="float-left" href="index.php"><h2> back to home </h2></button> </a>	
</div>

</body>
</html> 
