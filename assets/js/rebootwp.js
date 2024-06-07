jQuery(document).ready( function($) {
    /**
     * Throw errors, for "unsafe" actions, and bad code
     */
    "use strict";
    /**
     * Control the GDPR compliance patterns
     */
    // set cookie name
    var remember = $.cookie( "cookie-consent" );
              
    // check if the user has already dismissed notice and the cookie is set  
    if ( remember === 'hide' ) {
        $( ".gdpr" ).remove();
    }
    // show the notice if the user hasn't dismissed or the cookie has expired
    else 
    {
        setTimeout(
            function() {
                $( ".gdpr" ).show();
            }, 
        5000 );
    }
    // set the click action of the dismiss button to hide the notice and set the cookie
    $( ".dismiss-gdpr" ).on( "click", function() {
        $( ".gdpr" ).fadeOut(500);    
        $.cookie( "cookie-consent", "hide", { expires : 14, path: "/" });

        return false;
    });
});