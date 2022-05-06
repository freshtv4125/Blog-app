<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="bootstrapcss/bootstrap.css">
    <link rel="stylesheet" href="bootstrapicon/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <header>
  <nav class="navbar navbar-expand-light navbar-dark nar">
 <div class="container-fluid">
    <h3 class="navbar-brand">BLOG</h3>
    <i class="bi bi-facebook facebookIcon"></i>
    <i class="bi bi-whatsapp whatsappIcon"></i>
    <i class="bi bi-twitter twitterIcon"></i>
    <i class="bi bi-instagram instagramIcon"></i>
    <i class="bi bi-envelope envelopeIcon"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TrendingBlog.html">Trending</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="entertainment.html">Entertainment</a></li>
            <li><a class="dropdown-item" href="tech.html">Tech</a></li>
            <li><a class="dropdown-item" href="education.html">Education</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="gossip.html">Gossips</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php" tabindex="-1"
            aria-disabled="true"
          >Admin</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
      </div>
    </nav>
  </header>
  <body class="login-body">
    <div class="container-md border">
      <div class="row">
        <div class="col co log">
          <h2 class="headingLogin">Login to continue</h2>
          <div class="row">
            <div class="col co">
              <ul>
                <li>This page is for the Blog owner.</li>
                <li>If you're not permitted to use kindly go back.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<form action="admin.php" method="post" class="form" autocomplete="off">
  <label class="label">
    <h5>USERNAME:</h5>
<input type="text" name="name" class="form-control me-2 name" placeholder="User-name"> 
</label>
<label class="label">
  <h5>PASSWORD:</h5>
<input type="password" name="password" placeholder="Password" class="form-control me-2 password">
</label>
<label>
<input type="submit" class="btn-outline-success btn btn-light button" value="LOGIN"> 
</label>
<div class="left"> 
<i class="bi bi-cloud-upload-fill"></i> 
<h4>Powered by: Fresh Tv<i class="bi bi-tv-fill"></i></h4>
</div>
</form>

<script src="js/index.js"></script>
<script src="bootstrapjs/bootstrap.js"></script>
</body>
</html>
