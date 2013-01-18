        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.lavalamp.min.js"></script>
        
        <script type="text/javascript">
        jQuery.noConflict();
        jQuery(function() {
            jQuery("#2").lavaLamp({
                fx: "backout",
                speed: 700,
                click: function(event, menuItem) {
                    //return false;//
                }
            });
        });
        </script> 