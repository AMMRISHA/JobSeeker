<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">JOB-SEEKER</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
             
            <?php
         
          if (isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] == true) { ?>

            <li class="nav-item cta mr-md-2"><a href="view-profile.php"
                class="nav-link bg-success"><?php echo $_SESSION['emailaddress']; ?></a></li>

            <li class="nav-item cta mr-md-2"><a href="logout.php" class="nav-link">logout</a></li>
            <?php
          } else {
            ?>
            <li class="nav-item cta mr-md-2 cta-colored"><a href="job-post.php" class="nav-link">login</a></li>
            <?php
          }
          ?>
	        </ul>
	      </div>
	    </div>
	  </nav>