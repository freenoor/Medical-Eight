<!--
    Template Name: contact
    -->

    <?php get_header();?>

<div class="contact-welcome" style="background-image: url(<?php the_field('banner-contact');?>)">
<div class="container-fluid pini"> 
    <div class="contact-banner-content">
        <div class="contact-us animated fadeInDown">
            <p><?php the_field('banner_content');?></p>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid  pini">
    
            <div class="contact-div">
                    <div class="contact-title">
                        <?php the_field('contact_form_title');?>
                    </div>
                    <div class="container-fluid pini1">
                    <div class="contact-form">
                        <?php dynamic_sidebar('contact-form');?>
                    </div>                                                        
            </div>  
     </div>

</div>


<div class="map1">

<div id="map" id="overlaymap"></div>
</div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVu3FMyk485eNAMGE6uc5ttRxS1PYDFJE"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType": 'water',"elementType": 'labels.text.fill',"stylers": [{"color": '#686868'}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                map: map,
                
            });                       

            // var customMarker = '<?php the_field('address_icon');?>';
            // var marker = new google.maps.Marker({
            //     position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
            //     map: map,
            //     icon: customMarker

            // });
        }
    </script>
    </div>
</div>
<?php get_footer();?>