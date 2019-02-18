</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<div class="site-info">
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
		<?php endif; ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
			?>
		</a>
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

	<?php
		$stopTime = new DateTime("2019-02-14T19:00:00");
		$now = new DateTime();

		if ( $now <= $stopTime ) {
	?>

	<style media="screen">

		#footer-webinar {
			position: fixed;
			bottom: 0;
			width: 100%;
			padding: 20px 20px 50px 20px;
			z-index: 100;
			color: #0b4962;
			background-color: #000;
			opacity: 0.85;
			display: none;
		}
		.footer-webinar-wrapper {
			max-width: 900px;
			margin: 0 auto;
		}
		.footer-webinar-wrapper-right {
			width: 320px;
			display: inline-block;
			vertical-align: middle;
			text-align: center;
		}
		.footer-webinar-wrapper-left {
			width: calc(97% - 320px);
			padding: 1%;
			display: inline-block;
			vertical-align: middle;
		}
		.footer-webinar-wrapper-right img {
			width: 90%;
		}
		.footer-webinar h2.webinar-header1 {
			color: #fb8503;
			font-size: 30px;
			font-weight: 700;
		}
		.footer-webinar h2.webinar-header2 {
			color: #fff;
			font-size: 25px;
			font-weight: 700;
			text-transform: unset;
			font-style: italic;
		}
		.footer-webinar p {
			color: #01f1f9;
		}
		.footer-webinar-wrapper h3 {
			margin: 20px auto 0;
			text-align: center;
			display: inline-block;
		}
		.footer-webinar-wrapper h3 a {
			display: inline-block;
			color: #fff;
			background-color: #ee661f;
			font-weight: 700;
			padding: 10px 40px;
		}
		.footerpop-close {
			text-align: right;
			padding-bottom: 0;
		}
		.footerpop-close span {
	    display: inline-block;
	    cursor: pointer;
	    font-size: 40px;
	    font-family: roboto;
	    color: #fff;
		}
		form button {
    	font-size: 25px;
    	padding-top: 10px;
    	padding-bottom: 10px;
		}
		.lightbox-pop {
			max-width: 900px;
			margin: 0 auto;
			display: none;
		}
		.footer-webinar .lightbox-pop p {
			padding: 0;
		}
		body[data-form-style="minimal"] .form-form .minimal-form-input {
	    padding-top: 10px;
		}
		@media only screen and (max-width: 768px) {
			.footer-webinar-wrapper {
				text-align: center;
			}
			.footer-webinar-wrapper-left,
			.footer-webinar-wrapper-right {
				display: block;
				width: 100%;
			}
			.footer-webinar-wrapper-right .iframe-embed {
				max-width: 500px;
				margin: 0 auto;
			}
			.footer-webinar-wrapper-right img {
				width: 200px;
			}
			.form-form button[type="submit"],
			.form-form input[type="button"] {
		    background-color: red;
		    padding: 10px 20px;
			}
			.footer-webinar-wrapper-right img {
				display: none;
			}
		}
		@media only screen and (max-width: 414px) {
			#footer-webinar {
				padding: 20px 20px 30px 20px;
			}
			.footer-webinar h2.webinar-header1,
			.footer-webinar h2.webinar-header2,
			.footer-webinar p {
				font-size: 20px;
				line-height: 100%;
				margin-bottom: 7px;
				padding-bottom: 0;
			}
			.footer-webinar-wrapper h3 {
				margin: 10px auto 0;
			}
			.footer-webinar-wrapper h3 a {
				padding: 5px 10px;
				font-size: 14px;
			}
		}

	</style>

	<div id="footer-webinar" class="footer-webinar">

		<p class="footerpop-close"><span>x</span></p>

		<div class="footer-webinar-wrapper">
			<div class="footer-webinar-wrapper-left">
				<h2 class="webinar-header1">FREE Webinar</h2>
				<h2 class="webinar-header2">Join Me on February 13th</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus tincidunt blandit. Nunc et congue purus, id iaculis erat. Fusce ultrices pellentesque dolor, congue congue lectus ultricies vitae.</p>
			</div>
			<div class="footer-webinar-wrapper-right">
				<?php if (is_page(6481)) { /* if its page 6481, display this video */ ?>
					<iframe src="https://player.vimeo.com/video/314624657?autoplay=1&title=0&byline=0&portrait=0" width="320" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } else { /* display this image for any other pages */ ?>
					<img src="https://jenniferwelsh.com/wp-content/themes/jennifer-ch/images/jennifer-webinar-bg.png">
				<?php } ?>
			</div>
			<h3 class="webinar-link"><a href="https://events.genndi.com/register/169105139238455727/6c0b1058b3" target="_blank">Register Now for February 13th!</a></h3>
		</div>

		<div class="lightbox-pop">

			<h2 class="turnpike size-32">Register Now</h2>
			<p class="headline size-25">Sign-up below to register for the
			FREE webinar on February 13th</p>

			<form accept-charset="UTF-8" action="*" class="form-form" method="POST">
			    <div class="form-field">
			        <label for="form_field_FirstName">First Name *</label>
			        <input class="form-field-input" id="form_field_FirstName" name="form_field_FirstName" placeholder="First Name *" type="text" />
			    </div>
			    <div class="form-field">
			        <label for="form_field_LastName">Last Name *</label>
			        <input class="form-field-input" id="form_field_LastName" name="form_field_LastName" placeholder="Last Name *" type="text" />
			    </div>
			    <div class="form-field">
			        <label for="form_field_Email">Email *</label>
			        <input class="form-field-input" id="form_field_Email" name="form_field_Email" placeholder="Email *" type="text" />
			    </div>
			    <div class="form-submit">
			        <button class="form-recaptcha" type="submit">REGISTER FOR WEBINAR!</button>
			    </div>
			</form>

		</div>

	</div>

	<script>

		jQuery(document).ready(function() {

			if( (getCookie('stopFooterPop')!=1) && (window.location.href.indexOf("attraction")<0) ) {

				jQuery('#footer-webinar').delay(5000).fadeIn(3000);

				jQuery('.footerpop-close span').on('click', function() {
					jQuery('#footer-webinar').slideUp('slow');
					setCookie('stopFooterPop',1,2);
				});

				jQuery('.webinar-link').on('click', function() {
					jQuery('.lightbox-pop').fadeIn();
					jQuery('.footer-webinar-wrapper').remove();
					jQuery('.footer-webinar-wrapper').remove();
				});

			}

			function setCookie(cname, cvalue, exhours) {
				var d = new Date();
				d.setTime(d.getTime() + (exhours*60*60*1000));
				var expires = "expires="+d.toGMTString();
				document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/ ";
			}

			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i=0; i<ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1);
					if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
				}
				return "";
			}

			function delCookie( cname ) {
				document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
			}

		});

	</script>

	<?php } ?>

</html>
