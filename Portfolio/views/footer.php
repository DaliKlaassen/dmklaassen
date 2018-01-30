<footer>
  <div id="footer">
    <div id="contact-intro"></div>
    <h1>Contact</h1>
    <div id="contact-form">
    <?php
    $action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="footer.php" method="POST">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
  </div>
    <?php
    }
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("dalimklaassen7@gmail.com", $subject, $message, $from);
    echo'<form  action="" method="POST">';
    echo'<input type="hidden" name="action" value="submit">';
    echo'Your name:<br>';
    echo'<input name="name" type="text" value="" size="30"/><br>';
    echo'Your email:<br>';
    echo'<input name="email" type="text" value="" size="30"/><br>';
    echo'Your message:<br>';
    echo'<textarea name="message" rows="7" cols="30"></textarea><br>';
    echo'<input type="submit" value="Send email"/>';
    echo'</form>';
    }
?>
</div>
  <div id="map"></div>
  <script>
    function initMap() {
      var uluru = {lat: 52.434374, lng: 4.776309};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl8UPgjD6RbFFLFquLmWWAP8ftdoQKn6Y&callback=initMap">
  </script>
  <script src="script/main.js"></script>
</div>
</footer>
</body>
