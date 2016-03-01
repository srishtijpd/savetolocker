var attchment_id = '';

$('.locker-saver').append('<span class="dropin-btn-status"><img src="image/locker.png"></span>Save to Locker<label class="shared_link"></label>');
$(".locker-saver").click(function () {
	attchment_id = $(this).attr('id');
	console.log(attchment_id);
			alert("Save to Digilocker");
  
			   // var file = this.value;
				
				 var file = this.href;
    var url = "http://digiservices.local.com/index.php/apps/files/?id=" + "&file=" + file;

    window.open(url, "PartySearch", "height=550,width=670");
    return false;
});
function receiveMessage(event) {
	console.log(event.data);
	
	if(event.data==true)
	{
		
	$('#'+attchment_id).parent().append('<span class="dropin-btn-status"><img src="image/solved.png"></span>');
	}
	else
	{
		$('#'+attchment_id).parent().append('<span class="dropin-btn-status"><img src="image/error.png"></span>');
	}
	
}
window.addEventListener("message", receiveMessage, false);	
		