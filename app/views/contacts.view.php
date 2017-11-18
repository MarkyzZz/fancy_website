<?php include 'master/header.view.php';?>
<div id="map"></div>
<script>
      function initMap() {
        var uluru = {lat: 35.126589, lng: -106.536798};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIT-tukK12eU9y_8LP0g5Hh4K2U8AByiM&callback=initMap">
    </script>
		
    <div class="contactsinfo">
    
    <h4>Contacts</h4>
    <ul>
    <li>FANCY.com, Customer Care</li>
    <li>3828 Piermont Dr NE, Albuquerque</li> 
    <li>Tel: +1 789-665-4231</li>
    <li>Email: contacts@fancy.com</li>
     </ul>
    </div>

<?php 

include 'master/social.view.php';
include 'master/footer.view.php';

?>