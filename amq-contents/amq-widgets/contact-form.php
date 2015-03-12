<div class="done">
	The email has been sent successfully. <b>Thank You!</b>.
</div>
<form id="form-contact" action="contact-form.php" method="post" name="form-contact">
        <div class="submit-btn"><span style="float:left;">Contact</span>
        <div class="loading"></div>
        <input id="submit_btn" type="submit" name="submit" value="Submit" /></div>
        <input id="txt_name" type="text" class="input" name="txt_name" /><br />
        <textarea id="txt_message" class="input" name="txt_message" ></textarea>
</form> 
<script>
	$('#submit_btn').click(function(){
		var name = $('#txt_name').val();
        var message = $('#txt_message').val();
		var errorMessage = '';
		$('#form-contact .input').each(function(){
			var inputClass = $(this).attr('name');
			if($(this).val() == ''){
				if(inputClass == 'txt_name'){
					errorMessage += '* Please enter your name.';
				}
				if(inputClass == 'txt_message'){
					errorMessage += '\n* Please enter your message.';
				}
			}
		});
		if(errorMessage != ''){
			alert(errorMessage);
			return false;
		}
		$('.loading').show();
		 //start the ajax
        $.ajax({
            //this is the php file that processes the data and send mail
            url: "amq-contents/amq-widgets/contact-form-process.php",
            //GET method is used
            type: "GET",
            //pass the data        
            data: "process=true&txtname="+ name +"&txtmessage="+ message,

            //success
            success: function (html) {            
                //if process.php returned 1/true (send mail success)
				$('#form-contact').fadeOut('slow'); 
				//show the success message
				$('.done').fadeIn('slow'); 
            }      
        });
        //cancel the submit button default behaviours
        return false;
	});
</script>


