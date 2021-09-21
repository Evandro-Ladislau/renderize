<?php
if(!isset($seguranca)){
    exit;
}
?>

<!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo pg; ?>/assets/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  <!--ANIMAÇÃO JS E JQUERY-->

  <script src= "js/jquery-3.5.1.slim.min.js"></script>
		<script src= "<?php echo pg; ?>/assets/js/popper.min.js"></script> 
		<script src= "<?php echo pg; ?>/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo pg; ?>/assets/js/scrollreveal.min.js"></script> 
		<script>
			window.sr = ScrollReveal({reset:true});
			sr.reveal('.card-about', {
				duration: 2500,
				origin: 'bottom',
				distance: '100px' 
			});

			sr.reveal('.port-left', {
				duration: 1000,
				origin: 'left',
				distance: '100px' 
			});

			sr.reveal('.port-bottom', {
				duration: 1000,
				origin: 'bottom',
				distance: '100px' 
			});

			sr.reveal('.port-right', {
				duration: 1000,
				origin: 'right',
				distance: '100px' 
			});

			sr.reveal('.div-missao', {
				duration: 2500,
				origin: 'left',
				distance: '100px' 
			});

			sr.reveal('.div-valores', {
				duration: 2500,
				origin: 'right',
				distance: '100px' 
			});

		</script>	  