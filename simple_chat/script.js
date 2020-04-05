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

	unction showLoginForm() {
		$formTitleLogin
		.add($guestFormSwitch)
		.add($registerFormSwitch)
		.add($formWrapPass)
		.add($rememberAccountLabel)
		.add($loginSubmit)
		.removeClass('display-none');
	}
</script>
