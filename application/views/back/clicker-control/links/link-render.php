<!DOCTYPE html>
<html>
<head>
         <script src="<?php echo  base_url(); ?>assets/back/js/vendor/jquery-1.12.4.min.js"></script>

</head>

<body>


<iframe src="http://<?php echo $link; ?>" width=400 id='ffff' style="width: 1000px;height: 1000px"></iframe>

<?php echo $this->session->userdata("user_id") ?>

<script type="text/javascript">
	let base_url ="<?php echo base_url(); ?>";
	  link = "<?php echo $link ?>";
	  id = "<?php echo $id ?>";

function iframeLoaded() {
	 alert("frame loaded! you earned your money, you can close this now");
	}


window.onload = function() {
    parent.iframeLoaded();
		    openURL(link,id);
}

function openURL(link,id){



$.ajax({

    url:"<?php echo base_url(); ?>"+"user/links/APIclickLink",
    type:"POST",
    data:{id:id},
     success:function(data){
alert("success")
   // $(".row_link_"+id).remove();

    }
 
});
}
// $( document ).ready( () => {

// $("#ffff").on('ready',()=>{
// 		alert('asdas')

// })

// });
</script>
</body>
</html>