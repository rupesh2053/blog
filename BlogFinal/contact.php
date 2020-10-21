<?php 
  include 'header.php';
  $active = "Contact";
  include 'navbar.php';
?>

<br>
<div class="container">
<div class="row">
  <h4>Stay updated</h4><hr>
  <div class="col l3 m4 s12">
    <?php include 'side-cata-nav.php'; ?>
  </div>
  <div class="col l9 m8 s12" id = "contact-form">
    <div class="row">
      <div class="col l1"></div>

      <div class="col l4 m4 s6">
        <img src="Images/contact.jpg">
      </div>
      <div class="col l6 m8 s12">
        <form>
          <h6 class = "form-message"></h6>
          <input id = "name" type="text" name="name" class = "input-success" placeholder="Name">
          <input id = "email" type="text" name="email" class = "input-success" placeholder="Email">
          <input id = "subject" type="text" name="subject" class = "input-success" placeholder="Subject">
          <input id = "message" type="text" name="message" class = "input-success" placeholder="Message">
          <button id = "msg-submit" type = "submit" name = "submit">Send message
            <i class = "fa fa-arrow-right"></i>
          </button>
        </form>
    </div>
    <div class="col l1"></div>
    </div>
  </div>
</div>
</div>
<br>
<?php include 'footer.php'; ?>

<script>
  $(document).ready(function(){
    $("form").submit(function(event){
      event.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var message = $("#message").val();
      var submit = $("#msg-submit").val();
      $('.form-message').load("contact-db.php", {
        name: name,
        email: email,
        subject: subject,
        message: message,
        submit: submit
      });
    });
  });
</script>
