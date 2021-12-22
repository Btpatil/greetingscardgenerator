<html>
  <head>
    <style>

body{
	margin: 0;
	padding: 0;
	/* display: flex;
	justify-content: center;
	align-items: center; */
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.form-inline{
            display: flex;
        }
.lgin{
	position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
	margin: auto;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.form {
    width: fit-content;
    height: fit-content;
    border: 1px solid aqua;
    border-radius: 20px;
    padding: 15px;
    background: linear-gradient(133deg, #084298, black);
}
/* .main{
	width: 350px;
	height: 500px; 
	background: red;
	overflow: hidden;
	background: url("images/1.jpg") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
} */
 /*
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
.heading{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 10px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
} */
input{
	width: 88%;
	height: 30px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 5px;
	border: none;
	outline: none;
	border-radius: 5px;
}

.login-button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.login-button:hover{
	background: #6d44b8;
}
/*
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}
*/
.lgin a{
    list-style: none;
    padding: 8px 12px;
    position: relative;
    text-decoration: none;
    margin-bottom: 25px;
    margin-top: 30px;
    color: #dad9d8;
	font-size: small;
   text-align: center;
  }
  </style>
  </head>
</html>