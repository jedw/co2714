<!DOCTYPE html>
    <html>
    <head>
    	<meta charset=utf-8 />
    	<title></title>
    	<style>
			#login{
				width:33%;
				margin:auto;
				background-color:#ddd;
				padding:1em;
			}
    	</style>
    </head>
    <body>
		<div id="login">
     <h1>Welcome, please login</h1>
     <?php echo form_open('login_controller/checklogin');?>
		 <label for="Username">Username: </label>
		 <br/>
		 <input type="text" name="Username" id="Username"/>
		 <br/>
		 <label for="Password">Password: </label>
		 <br/>
		 <input type="password" name="Password" id="Password"/>
		 <br/>
		 <input type="submit" value="login"/>
	 <?php echo form_close();?>
	 <?php if (isset ($loginMsg)) {echo "<p>".$loginMsg."</p>";}?>
     </div>
    </body>
    </html>