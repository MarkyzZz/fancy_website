<?php include 'master/header.view.php';?>

<div class="container">
  <div class="row-fluid">
        <div class="span8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.1364860127082!2d28.823307890584342!3d47.01792588462395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c2d03e2c6b1%3A0xd8e8b74ac8c3ef7b!2z0JzQvtC70LTQsNCy0YHQutC40Lkg0JPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INCj0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sru!2s!4v1511113480084" width="1280" height="720" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      
        <div class="span4">
        <h2>IT creators</h2>
        <address>
          <strong>The masterpiece </strong><br>
          M.Kogalniceanu str.<br>
          Chisinau<br>
          4th block<br>
          <abbr title="Phone">P:</abbr> 01234 567 890
        </address>
      </div>
    </div>
</div>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('.navbar').find('active').removeClass('active');
    $('.contacts').addClass('active');
  });
</script>
<?php 

//include 'master/social.view.php';
include 'master/footer.view.php';

?>