<!--				of hanabib and syntex				-->

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Dod.png"><link/>
		<title> DoD </title>
		<link rel="stylesheet" href="database.php"><link/>
		<link rel="stylesheet" href="script.js" ></link>
		<link rel="stylesheet" href="style.css"></link>
	</head>
	<style>

	.message{

		text-align: center;
	}

	.WindowPopupConnectionBrokenRefreshButton{

		text-align: center;
		background-color: gray;
	}

	#WindowPopup{

		text-align: center;
	}

	.Footer{

		text-align: center;
	}

	.container_mid{

		text-align: center;
	}
		
	html, body {
		background-color: black;
	    	font-family: arial, helvetica, sans-serif;
	    	color: green;
	    	text-align: center;
	    	margin: 0;
	    	padding: 0;
	}
	.container {
		margin: 0px auto;
		padding: 30px 0;
		text-align: center;
	}
	
</style>

<script>

	$(document).ready(function() {
        $('#WindowPopupConnectionBroken').click(Utils.stopPropagation);
        
        $('#WindowPopupConnectionBrokenRefreshButton').click(function()
       	{
            window.location.reload();
        });
        
        $('#logout-button').on('click', function()
	   		{
	        	$.ajax(
	   			{
	        		url: '*',
	        		method: 'POST',
	        		success: function()
	        		{
			            window.location.href = '*';
	        		},
	        		error: function()
	        		{
        			alert('Something has gone wrong with your request.');
	        		}
	        	});
	        })
	    });
    
	function(e) {
	  if (e) {
	    if (e.stopPropagation) {
	      e.stopPropagation();
	    }
	  }
	}
	
	function openPanel() {
	  $panel.css('display', 'block');
	}
	
	function(e) {
	Utils.stopPropagation(e);

	AccountPopup.open(
	$('#RelativeWrapper'),
	AccountController.getId());}	
		
	
	
	function(u){
		return J.call(D.src, D.listener,u)
	}

	function hideForms() {
	 	 $formTitleGuest
	    .add($formTitleLogin)
	    .add($formTitleRegister)

	  .add($guestFormSwitch)
	    .add($loginFormSwitch)
	    .add($registerFormSwitch)

	  .add($formWrapPass)
	    .add($formWrapPass2)

	  .add($rememberAccountLabel)

	  .add($guestSubmit)
	    .add($loginSubmit)
	    .add($registerSubmit)
	    .addClass('display-none');

	  $formWrapPass
	    .add($formWrapPass2)
	    .find('input').val('');

	  $formSubmitResult.val('');
	  $rememberBox.prop('checked', false);
	}

	function showLoginForm() {
		$formTitleLogin
		.add($guestFormSwitch)
		.add($registerFormSwitch)
		.add($formWrapPass)
		.add($rememberAccountLabel)
		.add($loginSubmit)
		.removeClass('display-none');
	}
</script>


	<body>
		<div id = "HeaderRelativeWrapper">
			<div id = "HeaderUserArea">
				<img id = "HeaderUserAvatar" src="user.png">
				<div id = "HeaderUserUsername"> Hanabib</div>
			</div>
		</div>
		<div id = "HeaderMessageNotificationArea" style="display: block;">
			<img id = "HeaderMessageNotificationicon" src="icon_messege.png">
			<div id = "HeaderMessageNotificationCounter" style="display: block;"> 7 </div>
		</div>


		<div id="Footer">
		    <a href="*">
		        Find chatrooms
		    </a>
		    <a href="*" target="_blank">
		        Create new chatroom
		    </a>    
		    <a href="*" target="_blank">
		        Add chatroom to your website
		    </a>
		    <a href="*" target="_blank">
		        Contact us
		    </a>
		    <a href="*" target="_blank">
		        E-Chat Project
		    </a>
		</div>

				<!-- -->
		
			<div id="WindowPopupConnectionBroken" class="WindowPopup">
			    <div class="WindowPopupRelative">
			        <div class="WindowPopupBackground">
			        </div>
			        
			        <div class="WindowPopupInner">
			            <div class="WindowPopupRelative">
			                <div class="WindowPopupTitle">
			                    Connection with the server has been broken. Reconnecting...
			                </div>
			                                
			                <button id="WindowPopupConnectionBrokenRefreshButton" class="WindowPopupButton"> Refresh</button>
			                
			                <a id="logout-button" class="UndecoratedLink">
			                    <button class="LinkButton">Log out</button>
			                </a>
			            </div>
			        </div>
			    </div>
			</div>

				<!-- -->

		<div class = "message"> 
			<img id = "main-logo" src = "DoD.png" alt="Chat DoD"/>
			<h3> Welcome, this is DoD +_+ </h3>
		</div>

		<div class = "container_mid">
			<span class = "form-title guest">Guest</span>
			<span class="form-title login display-none">Log in</span>
			<span class="form-title register display-none">Registred</span>
			<span class="form-switch register">Sign up</span>
			<span class="form-switch login">Log in</span>
			<span class="form-switch guest display-none">Guest</span>
		</div>

		<div id = "wrap-username" class="row">
			<input type="text" name="*" id="*" placeholder ="Username">
			<button id= "Enter">Enter</button>
		</div>

		<textarea id = "InputTextArea" ></textarea>

		<!--<div class="chat">
		     <div id="chatplace></div>

		        <input type="text" name="name" id="name" placeholder="Choose a name"
		        maxlength=15 />
		        <input type="text" name="message" id="message" placeholder = "Enter message"
		        maxlength= 15 />
		        <button id="send-message">Send</button>
		  </div>
		</div>-->

		<div class="t-align-center">
			<div class="i-block">
				<div class="g-recaptcha" data-sitekey="6LdXMD0UAAAAAMM7emkkmZI2tQApco5pd9LTYM5E">
					<div style="width: 304px; height: 78px;">
						<div>
							<iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdXMD0UAAAAAMM7emkkmZI2tQApco5pd9LTYM5E&amp;co=aHR0cDovL3d3dy5lLWNoYXQuY286ODA.&amp;hl=en&amp;v=OOKISvkNnVD_m_9dreR_1S0n&amp;size=normal&amp;cb=j5uegz3ghwuw" role="presentation" name="a-jxgwhb5hi4dx" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="304" height="78" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<!--Web socket https://localhost-->