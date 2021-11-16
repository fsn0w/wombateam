
</main>

<?php do_action( 'wombateam_content_end' ); ?>

</div>

<?php do_action( 'wombateam_content_after' ); ?>

<footer id="colophon" class="site-footer py-12 bg-bgfooter" role="contentinfo">
	<?php do_action( 'wombateam_footer' ); ?>

	<div class="container mx-auto text-center text-xs lg:text-3xl">
		<div class="px-8 lg:px-0">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/img/title-logo.svg" class="mx-auto" />
			<div class="flex justify-center gap-10 mt-8 mb-4 lg:mt-12 lg:mb-6"> 
				<a href="#twitter" class="icon-tw w-10 h-10 brightness-125 hover:brightness-100 lg:w-20 lg:h-20"></a>
				<a href="#telegram" class="icon-tg w-10 h-10 brightness-125 hover:brightness-100 lg:w-20 lg:h-20"></a>
				<a href="#discord" class="icon-ds w-10 h-10 brightness-125 hover:brightness-100 lg:w-20 lg:h-20"></a>
			</div>
			@<?php echo date_i18n( 'Y' );?>-All rights reserved to Wombateam
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

<script>
jQuery( document ).ready(function($) {

if ($( document ).width() < 640) {
	$('#hole3').html('<div class="wombat w-full obj-show"><div class="body0"></div></div>');
	$('#hole2>div').removeClass( 'sign-animation' );
}

var n = Math.floor(Math.random() * 6)+1,
	x = n;
$('#wombat_sign').addClass( 'obj-show' ).removeClass( 'obj-hide' );

$('#holes').one('click', function(){
	$('#wombat_sign').addClass( 'obj-hide' ).removeClass( 'obj-show' );
	setTimeout(wombatPlay,1500,n);
});

$( '#holes' ).mousemove( function( event ) {

if ( isNear( $( '.wombat.obj-show' ), 10, event ) ) {
		$('.wombat').addClass( 'obj-hide' ).removeClass( 'obj-show' );
		x = n;
		while(x===n) { // to not repeat the hole
			n = Math.floor(Math.random() * 6)+1;
		}
		wombatPlay(n);
	} 
} );           

function isNear( $element, distance, event ) {
	var left = $element.offset().left - distance,
		top = $element.offset().top - distance,
		right = left + $element.width() + ( 2 * distance ),
		bottom = top + $element.height() + ( 2 * distance ),
		x = event.pageX,
		y = event.pageY; 
	return ( x > left && x < right && y > top && y < bottom );
};

function wombatPlay(n) {
	var n,
		body = Math.floor(Math.random() * 2);
	setTimeout(function() {
		$('#hole'+n).html('<div class="wombat w-full obj-hide"><div class="body'+body+'"></div></div>');
		$('#hole'+n+' .wombat').addClass( 'obj-show' ).removeClass( 'obj-hide' );
	}, 500);
}

});

</script>

</body>
</html>
