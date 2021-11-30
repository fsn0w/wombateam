jQuery( document ).ready(function($) {

    if ($( document ).width() < 640) {
        $('#hole3').html('<div class="wombat w-full obj-show"><a href="#meet" class="body0"></a></div>');
        $('#hole2>div').removeClass( 'sign-animation' );
    }
    
    var n = Math.floor(Math.random() * 6)+1,
        x = n;
    $('#wombat_sign').addClass( 'obj-show' ).removeClass( 'obj-hide' );
    
    setTimeout(startDelay,4000);
    
    $('#wombat_sign').one('mouseover', function(){
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
    
    function startDelay() {
        $('#wombat_sign').addClass( 'obj-hide' ).removeClass( 'obj-show' );
        setTimeout(wombatPlay,1500,n);
    }
    
    function wombatPlay(n) {
        var n,
            body = Math.floor(Math.random() * 2);
        setTimeout(function() {
            $('#hole'+n).html('<div class="wombat w-full obj-hide"><a href="#meet" class="body'+body+'"></a></div>');
            $('#hole'+n+' .wombat').addClass( 'obj-show' ).removeClass( 'obj-hide' );
        }, 500);
    }
    
    });