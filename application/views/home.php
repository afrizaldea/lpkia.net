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
	      	<i class="id badge icon"></i>User
	      	<i class="dropdown icon"></i>
	      	<div class="menu">
	        	<a class="item" href="login.php"><i class="chevron circle right icon"></i> Login</a>
	        	<a class="item" href="register.php"><i class="address card outline icon"></i> Register</a>
	      	</div>
	    </div>
	    
	    <div class="right item">
	      	<div class="ui input"><input type="text" placeholder="Search..."></div>
	    </div>
	  	
	  	</div>
	</div>
	<!-- navbar end -->


	<!-- pemisah -->
	<div class="separator" style="height:50px;"></div>
	<!-- pemisah end -->

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

	<div class="ui center aligned basic segment">
	  	<div class="ui blue labeled icon button">
	    	Semua Kategori
	    	<i class="toggle off icon"></i>
	  	</div>
	</div>

	<!-- title content -->
	<h3 class="ui horizontal divider header">
	  	<span style="color:#398BFA"><i class="quote left icon"></i></span>
	  	LPKIA.NET LIMITLESS CAMPUS &nbsp; &nbsp; 
	  	<span style="color:#398BFA"><i class="quote right icon"></i></span>
	</h3>
	<!-- title content end -->


	<!-- tentang kita -->
	<div class="ui very relaxed items">
	  	<div class="item">
	    	<div class="image">
	      		<img src="<?php echo base_url();?>/public/img/test1.png">
	    	</div>
	    <div class="content">
	      	<a class="ui header" href="#link">Reputasi &amp; Badge</a>
	     		<div class="description">
	        		<p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
	      		</div>
	    </div>
	  	</div>
	  		<div class="item">
	    		<div class="image">
	      			<img src="<?php echo base_url();?>/public/img/test1.png">
	    		</div>
			    <div class="content">
			      	<a class="ui header" href="#link">Dapatkan Uang Jajan</a>
			      		<div class="description">
			        		<p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
			      		</div>
			    </div>
	  		</div>
	  		<div class="item">
	    		<div class="image">
	      			<img src="<?php echo base_url();?>/public/img/test1.png">
	    		</div>
			    <div class="content">
			      	<a class="ui header" href="#link">Fitur Beli Jual</a>
			      		<div class="description">
			        		<p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
			      		</div>
			    </div>
	  		</div>
	  		<div class="item">
	    		<div class="image">
	      			<img src="<?php echo base_url();?>/public/img/test1.png">
	    		</div>
			    <div class="content">
			      	<a class="ui header" href="#link">Cek Jadwal Kuliah</a>
			      		<div class="description">
			        		<p>Ut imperdiet dignissim feugiat. Phasellus tristique odio eu justo dapibus, nec rutrum ipsum luctus. Ut posuere nec tortor eu ullamcorper. <a href="#link">Etiam pellentesque</a> tincidunt tortor, non sagittis nibh pretium sit amet. Sed neque dolor, blandit eu ornare vel, lacinia porttitor nisi. Vestibulum sit amet diam rhoncus, consectetur enim sit amet, interdum mauris. Praesent feugiat finibus quam, porttitor varius est egestas id.</p>
			      		</div>
			    </div>
	  		</div>
	</div>
	<!-- end of tentang kita-->
</div>

	<!-- script js -->
	<script type="text/javascript">
		$('#h')
	  .dropdown({
	    on: 'hover'
	  })
	;</script>
	<!-- script js end -->	
	</body>
</html>