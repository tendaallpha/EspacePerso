<html>
<head>
	<title>Images de Gauche</title>
	<style type="text/css">
		#espace #photo{
			float: left;
			width:33%;
			height:50%;
			background-color: black;
			padding: 1%;
		}
		#titre{
				background-color:skyblue;
		}
		.tx{
			font-size: 25px;
			color: black;
			font-weight: bold;
			font-family: arial black;
			border-bottom: 1% dotted #000000;
		}
		.tx2{
			padding: 0% 0% 5% 0%;

		}
		#espace1{
			background-color: #68b604;
			padding-top: 5%;
		}
		.texteCompte{
			background: #000000 url(images/background.png) top center no-repeat;
			float: left;
			font-size: 25px;
			color: black;
			font-weight: bold;
			font-family: arial black;
			border-bottom: 1% dotted #000000;
		}
		.texteLogin{
			background: #000000 url(images/background.png) top center no-repeat;
			float: right;		
			font-size: 25px;
			color: black;
			font-weight: bold;
			font-family: arial black;
			border-bottom: 1% dotted #000000;
		}
		#espace2{ background-color: skyblue;}	
		.inscription{
			float: left;}
		.login{
			float: right;
			border-bottom: 1% dotted #000000;
			padding-right: 1%;
				
		}
		table{
			background-color: skyblue;
		}

	button,html
	input[type="reset"],
	input[type="submit"] {
  -webkit-appearance: button;
  	cursor: pointer;
 	border: 1px solid #767676;
	background: #434343;
	color: #ffffff;
	font-size: 15px;
	font-variant: normal;
	height: 30px;
	line-height: normal;
	padding: 4px;
	text-align: left;
	background: #000000 url(images/rightClick.png) top center no-repeat;
}	
html input[type="text"],
	 input[type="password"] {
  -webkit-appearance: button;
 	border: 1px solid #767676;
	background: #434343;
	color: #ffffff;
	font-size: 15px;
	font-variant: normal;
	height: 30px;
	line-height: normal;
	padding: 4px;
	text-align: left;
	background: #000000 url(images/background.png) top center no-repeat;
}
		 		
	</style>
</head>
<body bgcolor="white">
	<div id="espace">
		<div id="photo">
			<img src="images/MAXCOMERCIALE.jpg" height="100%">
		</div>
		<div id="titre">
			<div class="tx">
			<h1>Profitez de Tous les Avantages de L'espace Perso</h1>
		    </div>
			<div class="tx2">
				&nbsp &nbsp <b>Ouvert à tous L'espace Perso vous permet:</b> <br/> <br>
				
				&nbsp &nbsp <img src="images/rightClick.png"> <b> D'acèder facilement à vos magazins et vos cathalogues</b> <br/>
				&nbsp &nbsp <img src="images/rightClick.png"> <b>D'imprimer des coupons de Réducton pour vos prochaines courses!</b>
		    </div> 
		</div>
	</div>
	<div id="espace1">
			<div class="texteCompte">
				PAS ENCORE D'ESPACE PERSO? <br/>
				<b style="
				font-size:20px;
				font-family:verdana;
				"> Créez en quelques Click! </b>	 
			</div>
			<div class="texteLogin">
				SE CONNECTER A VOTRE <br> COMPTE PERSO:
			</div>
	</div>
	<div id="espace2">
		<div class="inscription">
			<b style="font-size:15px;font-family:verdana;"> Commencer l'inscription:</b> <br>
			<form action="contenuDroit.php" method="post">
			
			<table> 
				<tr> 
					<td>	
					<b style="font-size:20px;font-family:verdana;">
						nom
					</b>
					</td>
					<td>
						<input type="text" name="nom" palaceholder="votre nom...">
					 </td>
				</tr>
				<tr> 
					<td>	
						<b style="font-size:20px;font-family:verdana;">prenom</b>
					</td>
					<td>
						<input type="text" name="prenom" palaceholder="votre prenom...">
					</td>
				</tr>
				<tr> 
					<td>	
						<b style="font-size:20px;font-family:verdana;">Email</b>
					</td>
					<td>
						<input type="text" name="Email" palaceholder="votre Email...">
					</td>
				</tr>
				<tr> 
					<td>	
					<b style="font-size:20px;font-family:verdana;">pseudo</b>
					</td>
					<td>
						<input type="text" name="pseudo" palaceholder="votre pseudo...">
					</td>
				</tr>
				<tr> 
					<td>	
						<b style="font-size:20px;font-family:verdana;">code secret</b>
					</td>
					<td>
						<input type="password" name="nom" palaceholder="votre nom...">
					 </td>
				</tr>
				<tr> 
					<td>	
					<b style="font-size:20px;font-family:verdana;">coffirmez</b>
					</td>
					<td>
						<input type="text" name="nom" palaceholder="votre nom...">
					</td>
				</tr>
				<tr><td colospan="2"> <center><input input type="submit" value="S'inscrire"></center></td></tr>
			</table>
			</form>
		</div>

		<div class="login">
			<table> 
				<tr> 
					<td>	
						<b style="font-size:20px;font-family:verdana;">Email</b>
					</td>
					<td>
						<input type="text" name="Email" palaceholder="votre Email...">
					</td>
				</tr>
				<tr> 
					<td>	
						<b style="font-size:20px;font-family:verdana;">mot de passe</b>
					</td>
					<td>
						<input type="password" name="nom" palaceholder="votre nom...">
					 </td>
				</tr>
				<tr><td colospan="2"> <center><input input type="submit" value="Se Connecter"></center></td></tr>
			</table>
			</form>
		</div>		
	</div>


</body>
</html>