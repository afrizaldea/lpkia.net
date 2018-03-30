<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/css/normalize.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/public/dist/semantic.min.js"></script>

</head>
<body>
<!-- navbar start -->

<div class="ui attached stackable menu">
  	<div class="ui container">
    	<a class="item">
     		<i class="home icon"></i> Home
    	</a>
    	<a class="item">
      		<i class="code icon"></i> Forum
    	</a>
    	<a class="item">
      		<i class="shop icon"></i> BeliJual
    	</a>
    	<a class="item">
      		<i class="grid layout icon"></i> Kegiatan
    	</a>
    	<a class="item">
      		<i class="calendar outline icon"></i> Jadwal
    	</a>
    <div class="ui simple dropdown item" id='h'>
      	User
      	<i class="dropdown icon"></i>
      	<div class="menu">
        	<a class="item" href="login.php"><i class="edit icon"></i> Login</a>
        	<a class="item" href="register.php"><i class="globe icon"></i> Register</a>
      	</div>
    </div>
    
    <div class="right item">
      	<div class="ui input"><input type="text" placeholder="Search..."></div>
    </div>
  	
  	</div>
</div>
<!-- navbar end -->

<div class="separator" style="height:50px;"></div>


<!-- content head -->
<div class="ui four column doubling stackable grid container" style="text-align: center">
  	<div class="column">
  		<!-- card start -->
    	<div class="ui card">
  			<div class="ui slide masked reveal image">
				<img src="<?php echo base_url();?>/public/img/test1.png" class="visible content">
    			<img src="<?php echo base_url();?>/public/img/test2.jpg" class="hidden content">
  			</div>
  			<div class="content">
    			<a class="header">Android Developer</a>
    			<div class="meta">
      				<span class="date">Forum khusus para pecinta android</span>
    			</div>
  			</div>
  			<div class="extra content">
    			<a>
      			<i class="write icon"></i>
      			<!-- tampilkan jumlah total postingan di forum ini-->
      			5 post
    			</a>
  			</div>
		</div>
		<!-- card end -->
  	</div>

  	<div class="column">
    		<!-- card start -->
    	<div class="ui card">
  			<div class="ui slide masked reveal image">
    			<img src="<?php echo base_url();?>/public/img/test1.png" class="visible content">
    			<img src="<?php echo base_url();?>/public/img/test2.jpg" class="hidden content">
  			</div>
  			<div class="content">
    			<a class="header">Web Developer</a>
    			<div class="meta">
      				<span class="date">Forum khusus pengembang website</span>
    			</div>
  			</div>
  			<div class="extra content">
    			<a>
      			<i class="write icon"></i>
      			<!-- tampilkan jumlah total postingan di forum ini-->
      			18 post
    			</a>
  			</div>
		</div>
  	</div>
  	<div class="column">
   			<!-- card start -->
    	<div class="ui card">
  			<div class="ui slide masked reveal image">
    			<img src="<?php echo base_url();?>/public/img/test1.png" class="visible content">
    			<img src="<?php echo base_url();?>/public/img/test2.jpg" class="hidden content">
    		</div>
  			<div class="content">
    			<a class="header">Kritik &amp; Saran</a>
    			<div class="meta">
      				<span class="date">Forum untuk curhatan mahasiswa/i </span>
    			</div>
  			</div>
  	<div class="extra content">
    			<a>
      			<i class="write icon"></i>
      			<!-- tampilkan jumlah total postingan di forum ini-->
      			536 post
    			</a>
  			</div>
		</div>
  	</div>
  	<div class="column">
   			<!-- card start -->
    	<div class="ui card">
  			<div class="ui slide masked reveal image">
    			<img src="<?php echo base_url();?>/public/img/test1.png" class="visible content">
    			<img src="<?php echo base_url();?>/public/img/test2.jpg" class="hidden content">
    		</div>
  			<div class="content">
    			<a class="header">Enterpreneur</a>
    			<div class="meta">
      				<span class="date">Forum yang membahas dunia bisnis</span>
    			</div>
  			</div>
  			<div class="extra content">
    			<a>
      			<i class="write icon"></i>
      			<!-- tampilkan jumlah total postingan di forum ini-->
      			340 post
    			</a>
  			</div>
		</div>
  	</div>
  	
</div>
<!-- content head end --> 


<div class="ui very relaxed items">
  <div class="item">
    <div class="image">
      <img src="/images/wireframe/image.png">
    </div>
    <div class="content">
      <a class="ui header" href="#link">Link Header</a>
      <div class="description">
        <p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="image">
      <img src="/images/wireframe/image.png">
    </div>
    <div class="content">
      <a class="ui header" href="#link">Link Header</a>
      <div class="description">
        <p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
	$('#h')
  .dropdown({
    on: 'hover'
  })
;</script>
</body>
</html>