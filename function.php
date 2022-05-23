<!doctype>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>calculate number</title>
	</head>
	<style type="text/css">
		

body{
	background-color: #4070f4;;
}

		.mycalc{
			background-color: white;
			margin-top: 5%;
			margin-left:  30%;
			margin-bottom: -10%;
         /*   border: 5px solid black;*/
			height: 80%;
			width: 30%;
			padding-left: 10%;
			padding-top: 5%;
			box-shadow: 2px black;
		}

		input{
			font-size: 20px;
		}
p{
	font-size: 20px;
}

button{
	width: 15%;
	height: 5%;
	border-spacing: 2px;
	cursor: pointer;
	background-color: #4070f4;
	color: white;
	border: none;
	transition: all 0.6s;
}
button:hover{
	background-color: grey;
}

h1{
	color: 	#4070f4;
	font-size: 50px;
	margin-top: -20px;
	padding-right: 50px;
	
}

			</style>
	<body>

<div class="mycalc">
	<h1>Simple Calculator</h1>

	<p>Enter a first number</p> <input id = "a" type="text" name="" value=""><br><br>
	<p>Enter a second number</p> <input id = "b" type="text" name="" value=""><br><br>
	<p>Result</p> <input id = "res" type="text" name="">
<br><br><br><br>
	<button onclick="funexprsum()">
		Add
	</button>
	

	<button onclick="funexprsub()">
		Sub
	</button>

	<button onclick="funexprmul()">
		Mul
	</button>

	<button onclick="funexprdiv()">
		Div
	</button>

</div>



<script>
	var funexprsum = () => { 
		var number1 = parseInt(document.getElementById('a').value);
        var number2 = parseInt(document.getElementById('b').value);
        
        var result = document.getElementById('res').value = `${number1 + number2}`;
    }



    var funexprsub = () => {
    	var number1 = parseInt(document.getElementById('a').value);
    	var number2 = parseInt(document.getElementById('b').value);
    	var result = document.getElementById('res').value = `${number1 - number2}`
    }

    var funexprmul = () =>{
    	var number1 = parseInt(document.getElementById('a').value);
    	var number2 = parseInt(document.getElementById('b').value);
    	var result = document.getElementById('res').value = `${number1 * number2}`
    
    }

    var funexprdiv = () => {
var number1 = parseInt(document.getElementById('a').value);
    	var number2 = parseInt(document.getElementById('b').value);
    	var result = document.getElementById('res').value = `${number1 / number2}`
    
    }



</script>





	</body>
	</html>