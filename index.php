<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php

include_once 'ref_keys.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Save to DigiLocker Demo Application</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/default1.css"/>
		 <link rel="stylesheet" type="text/css" href="js/style.css"/>
    </head>
    <body> 
 <div class="container">
 
			<form action="" class="register">
            <h1>Save to DigiLocker Demo Application</h1>
           
          
            <fieldset class="row3" >
			   
               	<div id="attachment" class="infobox1">
				<legend>Saved Documents </legend>
				<div class="agreement">
				 <div class="col-md-12">
				<div class="col-md-1"><img src="img/image.png"></img></div>
				 <div class="col-md-4">Passport Photograph</div>
                 <div class="col-md-4"><a id="atach2" href="http://putnamprobate.com/img/passport_card_sample.jpg" class="locker-saver"></a>
				 </div>
				 </div>
				</div>
				
				<div class="agreement">
				<div class="col-md-12">
				<div class="col-md-1"><img src="img/image.png"></img></div>
				<div class="col-md-4">PAN Photograph</div>
                <div class="col-md-4"><a id="atach1" href="http://allzhere.in/wp-content/uploads/2013/04/Apply-for-PAN-card.jpg" class="locker-saver"></a></div>
				</div>
				</div>
				<div class="agreement">
				<div class="col-md-12">
				<div class="col-md-1"><img src="img/application-pdf.png"></img></div>
				<div class="col-md-4">Bank Statement</div>
                <div class="col-md-4"><a id="atch" href="https://www08.wellsfargomedia.com/downloads/pdf/biz/online_banking/sample_online_statement.pdf" class="locker-saver"></a></div>
				 </div>
				</div>
				<div class="agreement">
				<div class="col-md-12">
				<div class="col-md-1"><img src="img/application-pdf.png"></img></div>
				<div class="col-md-4">Tax Return</div>
                <div class="col-md-4"><a id="atch3" href="https://117.239.114.217/index.php/s/VspxYxP4bYpDuOj/download" class="locker-saver"></a></div>
				 </div>
				</div>
				<div class="agreement">
				<div class="col-md-12">
				<div class="col-md-1"><img src="img/application-pdf.png"></img></div>
				<div class="col-md-4">Income Certificate</div>
                <div class="col-md-4"><a id="atch4"  href="https://117.239.114.219/assets/img/pic1.jpg" class="locker-saver"></a></div>
				 </div>
				</div>
              	</div>
			  </fieldset>
			  <fieldset class="row3">
            <div class="infobox">
				<legend>Add File URL</legend>
                <input type="text" name="name" id="envalue" style="height: 30px; margin-left: 27px;"></br></br>
				 <div class="col-md-12 text-center"><button type="submit" form="form" value="Submit" style="padding-left: 10px; padding-right: 10px;" class="btn btn-success btn-xs">Add Url</button></div>
   
             </div>
            </fieldset> 
			
		</form>
		</div>
		<script src="js/jquery.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://devservice.local.com/savelocker/api/1/savelocker.js" id="dlshare" data-app-id=<?php echo $requester_id; ?> data-app-hash=<?php echo $hash_key; ?> time-stamp=<?php echo $timstamp; ?>></script>
		
		
		
		


<script>
$( document ).ready(function() {
	
   $("#envalue").val('');
});
$("button").click(function(){
	var t = $("#envalue").val();

	var res = t.split("/"); 
	var url_length = ((res.length)-1);
	var ext = (res[url_length].split("."));
	if(ext[1]=='png'||ext[1]=='jpg'||ext[1]=='jpeg')
	{
		exte = 'image.png';
	}
	else
	{exte = 'application-pdf.png';}
   if(t!='')
   {
		var cnt = 5;
		$('.locker-saver').each(function( index ) {
			cnt = index+1;
		});
			vbut = '<div class="agreement"><div class="col-md-12"><div class="col-md-1"><img src="img/'+exte+'"></img></div><div class="col-md-4">'+res[url_length]+'</div><div class="col-md-4"><a id="atch'+cnt+'" href="'+t+'" class="locker-saver"><span class=" dl_pop dropin-btn-status"><img src="image/locker.png"></span>Save to DigiLocker<label class="shared_link"></label></a></div></div></div>';
			$("#attachment").append(vbut);
			console.log(cnt);
   }
   else
   {
	   alert("Please enter the file url");
   }
}); 

</script>
    </body>
</html>





