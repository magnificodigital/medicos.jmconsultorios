<footer id="block-footer-site">
	<div class="container">
		<div class="row">			
			<div class="col-lg-2 col-md-12 col-sm-12 block-logo">
				<a href="<?php bloginfo('url') ?>" class="logo-footer" title="<?php echo get_bloginfo('name') ?>"></a>
			</div>				
			<div class="col-lg-2 col-md-12 col-sm-12">
				<div class="icones">
					<a href="https://www.facebook.com/jmconsultorios" target="_blank" class="social-link face" title="Facebook"></a>
					<a href="https://www.instagram.com/jmconsultorios/" target="_blank" class="social-link insta" title="Instagram"></a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12 infos">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<p class="bloco-endereco">Av. João Manoel 600 - 9º Andar<br />Torre B - Centro - Arujá</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<p class="bloco-telefone pointer">Clique aqui para<br/>exibir o telefone</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<p class="bloco-horario">Seg - Sexta 8h até as 20h<br />aos Sábados 8h às 12h</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
</footer>
<div class="sub-footer">
	<div class="container">
		<p>© 2017 - <?php bloginfo('name') ?> | <a href="http://jmconsultorios.com.br/politica-de-privacidade/">Política de Privacidade</a></p>
		<!--
		<center>
			<a href="http://magnificodigital.com" target="_blank" class="createdmagnifico white"></a>
		</center>-->
	</div>
</div>

<div id="boxcontato">
	<h2>Entre em contato conosco!</h2>
	<div id="jm-consultorios-formulario-de-contato-6fcbe42c67f8ac283d2f"></div>
</div>

<?php wp_footer(); ?>

<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<?php $prefix_dir = 'http://localhost/projetos/jmconsultorios/wp-content/themes/jmconsultorios'; ?>

<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/swiper.jquery.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/swiper.js"></script>
<script type="text/javascript" src="<?php echo $prefix_dir; ?>/js/main.js"></script> 

<?php else: ?>
<script type="text/javascript" src="https://jmconsultorios.com.br/wp-content/themes/jmconsultorios/assets/scripts.min.js"></script>
<?php endif; ?>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
	new RDStationForms('persona-1-planos-03849db228c01e4c9727-html', 'UA-100622361-1').createForm();
	new RDStationForms('persona-1-newsletter-blog-5e841b78815315144e5d-html', 'UA-100622361-1').createForm();
	new RDStationForms('persona-1-contato-2219c8ed1ef25003e533-html', 'UA-100622361-1').createForm();
</script>

<script type="text/javascript">

	$("[data-fancybox]").fancybox();

	$(document).ready(function(){
		$('.bloco-telefone').click(function(){
			$(this).html('(11) 4858-1081');
			$(this).removeClass('pointer');
		});
	}); 

	<?php if (is_home() || is_front_page()) { ?>

	$(document).ready(function(){
		var tempo = 7000;
		$('#home .owl-carousel').owlCarousel({
			items: 1,
			dots: true,
			autoplay: true,
			dotsSpeed: 1000,
			autoplayTimeout: tempo,
			loop: true,
			responsiveClass:true,
			smartSpeed:800,
			mouseDrag: false,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut'
		});

		$("#vantagens .owl-carousel").owlCarousel({
			items: 1,
			dots: true,
			autoplay: true,
			dotsSpeed: 500,
			autoplayTimeout: 7500,
			loop: true,
			responsiveClass:true,
			smartSpeed:450,
			mouseDrag: false,
		});

	});

	$(document).ready(function(){
		$(".living-blocks .owl-carousel").owlCarousel({
			dots: false,
			nav: false,
			mouseDrag: false,
			margin: 30,
			loop: true,
			responsiveClass:true,
		    responsive:{
		    	0: {
		    		items: 1,
		    		margin: 0,
		    	},
		        480:{
		            items:2,
		            dots: true,
		        },
		        991:{
		            items:3,
		        }
		    }
		});
	});

	/*Menu*/
	$(function(){
		if ($(window).width() > 768) {
			var nav = $('header#block-header-site');
			var navaltura = $(nav).outerHeight();
			var altura = $(window).height();

			altura = altura - navaltura - 2;  /*evita que na seção "vantagens" o menu suma*/

			$(window).scroll(function() { 
				if ($(this).scrollTop() > altura) { 
					nav.addClass("menu-fixed");
				} else { 
					nav.removeClass("menu-fixed");
				}
			});

			if ($(window).scrollTop() > altura) {
				nav.addClass("menu-fixed");
			} else {
				nav.removeClass("menu-fixed");
			}

		}
	});

	/*Box Planos*/
	$(function(){
		var p = $('.1-plano, .3-plano');
		var pactive = $('.2-plano');

		$('.living-blocks').hover(function(){
			$(p).hover(function(){
				$(pactive).removeClass('active');
			});
		},function(){
			$(pactive).addClass('active');
		});
	});
	
	/*Scroll*/
	$(function(){
		var elements = $('#block-header-site a, #benefits, .link-logo');
		elements.click(function(e){
			var offThis = $(this.hash).offset().top;
			var alturaHeader = $('header#block-header-site').outerHeight();
			var menuScroll = offThis - alturaHeader;
			$.scrollTo((menuScroll) || 0, 500);
			e.preventDefault();
		});
	});

	/*vantagens*/
	$(document).ready(function(){
		var botao = $('.abrevantagens');
		$(botao).on('click',function(){
			$('#vantagens2').slideDown(500);
			var top = $('#vantagens2').offset().top;
			var alturaHeader = $('header#block-header-site').outerHeight();
			var rtop =  top - alturaHeader;
			$.scrollTo((rtop) || 0, 500);
		});
	});

	/*planos*/
	$(function(){
		var boxplano = $('#boxplanos');
		var plano = '1';
		while (plano <= 4) {
			$('.plano'+plano+'.plan-block').click(function(){
				$(this).find('.content-livings').slideToggle(500,function(){
					$('.block-link').click(function(){
						boxplano.fadeIn('fast',function(){
							$('.closed, .mask').on('click',function(){
								boxplano.fadeOut('fast');
							});
							document.onkeyup=function(e) {
								if(e.which == 27){
									boxplano.fadeOut('fast');	
					      		}
				    		}
						});
					});
				});
			});
			plano++;
		}
	});

	<?php } ?>

	<?php if (is_page('contato')) : ?>
	$(document).ready(function(){
		$(".owl-carousel").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			smartSpeed: 500
		});
	});
	<?php endif; ?>

</script>

<!--Código de monitoramento-->
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/14d82f2d-4490-478a-a646-9c21887909ef-loader.js" ></script>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100622361-1', 'auto');
  ga('send', 'pageview');
</script>

<?php if (is_page('blog')) : ?>
<style type="text/css">
	#form-container-persona-1-newsletter-blog-5e841b78815315144e5d #conversion-persona-1-newsletter-blog-5e841b78815315144e5d section {
		padding: 0 !important;
	}
	@media (min-width: 990px) {
		#conversion-persona-1-newsletter-blog-5e841b78815315144e5d section div.field,
		#conversion-persona-1-newsletter-blog-5e841b78815315144e5d .modal-content section div.actions, #conversion-persona-1-newsletter-blog-5e841b78815315144e5d section div.actions {
			width: 30% !important;
			float: left !important;
			margin-right: 5px !important;
		}
	}
	#conversion-persona-1-newsletter-blog-5e841b78815315144e5d form input, #conversion-persona-1-newsletter-blog-5e841b78815315144e5d form select, #conversion-persona-1-newsletter-blog-5e841b78815315144e5d form .select2-container, #conversion-persona-1-newsletter-blog-5e841b78815315144e5d form textarea {
		background-color: #EEEEEE !important;
	}
	#conversion-persona-1-newsletter-blog-5e841b78815315144e5d .modal-content section div.actions, #conversion-persona-1-newsletter-blog-5e841b78815315144e5d section div.actions {
		padding: 0 !important;
	}
	#conversion-persona-1-newsletter-blog-5e841b78815315144e5d section div.actions .call_button {
		padding: 4px !important;
	}
</style>
<?php endif; ?>

</body>
</html>
<?php $html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html); ?>

