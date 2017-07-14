<?php if($uri != "/login") : ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Noy's School</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home Page</a></li>
        <li><a href="/admin">Administrator</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/app/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php endif ?>