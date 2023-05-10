jQuery('#frmRegister').on('submit',function(e){
	jQuery('.error_field').html('');
	jQuery.ajax({
		url:'login_register_submit.php',
		type:'post',
		data:jQuery('#frmRegister').serialize(),
		success:function(result){
			var data=jQuery.parseJSON(result);
			if(data.status=='error'){
				jQuery('#'+data.field).html(data.msg);
			}
			if(data.status=='success'){
				jQuery('#'+data.field).html(data.msg);
				jQuery('#frmRegister')[0].reset();
			}
		}
		
	});
	e.preventDefault();
});	