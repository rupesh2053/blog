<?php 
  include 'header.php';
  $active = "Videos";
  include 'navbar.php';
?>
<br>
<div class="container">
<div class="row">
  <div class="col l3 m4 s12" id = "video-cata">
    <h4>Video catagories</h4><hr>
    <h6 class = "active">Games</h6>
    <h6>Mobiles</h6>
    <h6>Laptops</h6>
    <h6>Movies</h6>
    <h6>PC</h6>
  </div>
  <div class="col l9 m8 s12" id = "video">
    <img src="Images/video2.jpg" height = "400px" width = "100%">
    <br><br>

    <h4>Related topics</h4><hr>
      <div class = "row" id="related-videos">
      <div class="col l3 m5 s12">
      <img src="Images/video2.jpg" height = "200px" width = "100%">
      </div>
      <div class="col l9 m7 s12" id = "related-videos-desc">
      <h6>I am happiest when I’m right next to you.</h6>
      <input type="text" name="comment" placeholder="comment"><span><button>Post</button></span><br> 
      <a href="#"><button><i class = "fa fa-thumbs-up"></i></button></a>
      <a href="#"><button><i class = "fa fa-thumbs-down"></i></button></a>
      <a href="#"><button><i class = "fa fa-eye"></i></button></a>
      </div>
      </div><br>

      <div class = "row" id="related-videos">
      <div class="col l3 m5 s12">
      <img src="Images/profile.jpg" height = "200px" width = "100%">
      </div>
      <div class="col l9 m7 s12" id = "related-videos-desc">
      <h6>I am happiest when I’m right next to you.</h6>
      <input type="text" name="comment" placeholder="comment"><span><button>Post</button></span><br>
      <a href="#"><button><i class = "fa fa-thumbs-up"></i></button></a>
      <a href="#"><button><i class = "fa fa-thumbs-down"></i></button></a>
      <a href="#"><button><i class = "fa fa-eye"></i></button></a>
      </div>
      </div><br>

      <div class = "row" id="related-videos">
      <div class="col l3 m5 s12">
      <img src="Images/red.jpg" height = "200px" width = "100%">
      </div>
      <div class="col l9 m7 s12" id = "related-videos-desc">
      <h6>I am happiest when I’m right next to you.</h6>
      <input type="text" name="comment" placeholder="comment"><span><button>Post</button></span><br>
      <a href="#"><button><i class = "fa fa-thumbs-up"></i></button></a>
      <a href="#"><button><i class = "fa fa-thumbs-down"></i></button></a>
      <a href="#"><button><i class = "fa fa-eye"></i></button></a>
      </div>
      </div><br>

      <div class = "row" id="related-videos">
      <div class="col l3 m5 s12">
      <img src="Images/cpu1.jpg" height = "200px" width = "100%">
      </div>
      <div class="col l9 m7 s12" id = "related-videos-desc">
      <h6>I am happiest when I’m right next to you.</h6>
      <input type="text" name="comment" placeholder="comment"><span><button>Post</button></span><br>
      <a href="#"><button><i class = "fa fa-thumbs-up"></i></button></a>
      <a href="#"><button><i class = "fa fa-thumbs-down"></i></button></a>
      <a href="#"><button><i class = "fa fa-eye"></i></button></a>
      </div>
      </div><br>
    </div>
  </div>
</div>
<script >
  $(document).on('click','h6', function(){
    $(this).addClass('active').siblings().removeClass('active');
  })
</script>
<br><?php include 'footer.php'; ?>
