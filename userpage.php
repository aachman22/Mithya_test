<html>
<head>
	<link rel="stylesheet" type="text/css" href="userdesign.css">
<title></title>
<meta charset="utf-8" /> 
<style></style>
</head>
<body>
	<div id="toppanel">	</div>
	<div id="username"></div>
	<div id="rating">Your average rating</div>
	<div id="hotels">
		<form>
			<button id='1' onclick="return hotelpage(id)"></button>
			<button id='2' onclick="return hotelpage(id)"></button>
			<button id='3' onclick="return hotelpage(id)"></button>
			<button id='4' onclick="return hotelpage(id)"></button>
			<button id='5' onclick="return hotelpage(id)"></button>
			<button id='6' onclick="return hotelpage(id)"></button>
			<button id='7' onclick="return hotelpage(id)"></button>
			<button id='8' onclick="return hotelpage(id)"></button>
		</form>
	</div>

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">
		
		var username = localStorage.username;
		document.getElementById("username").innerHTML = "Welcome, "+username;

		$.getJSON("users.json", function (json) {
   			// var len = Object.keys(json.name).length
   			// name = document.getElementById('username').value;
    		//password = document.getElementById('password').value;
   			// for(var i=0; i<len-2;i++){
   				//console.log(json.name[i]);

   				document.getElementById('rating').innerHTML = json.star[i];
   				//alert(document.getElementById(String(i+1)).value);	
   			
		});


		$.getJSON("hotels.json", function (json) {
   			var len = Object.keys(json.name).length
   			name = document.getElementById('username').value;
    		//password = document.getElementById('password').value;
   			for(var i=0; i<len-2;i++){
   				//console.log(json.name[i]);
   				document.getElementById(String(i+1)).innerHTML = json.name[i];
   				//alert(document.getElementById(String(i+1)).value);	
   			}
		});

		function hotelpage(id){
			
			var index = localStorage.index;
			var star;
			alert("To AJAX: the winnerid is: "+star);

			$.getJSON("hotels.json", function (json) {
				 star = json.star[id-1];

		        $.ajax
		        ({
		                type: "POST",
		                url: "test.php",
		                data: {"star" : star, "index" : index}, 
		                
		        });
			});
				
	   			
		

			localStorage.setItem("hotelid", id);
			// var u = localStorage.hotelid;
			// alert(u);
			// window.location = "hotelpage.php";
			return false;
		}

	</script>

	

  </body>
</html>