
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Github  Finder</title>
    <!-- Bootstrap core CSS -->
    <link href="https://bootswatch.com/simplex/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Github Finder</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Github Finder</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        
      </ul>
      
      
    </div>
  </div>
</nav>

    <div class="container">

      <div class="searchContainer">
        <h1>Search Github Users</h1>
        <p class="lead">Enter a username to fetch a user's profile info and repos</p>
        <input type="text" id="searchUser" class="form-control" placeholder="Github username">
        <br/>
        <div id="profile"></div>
      </div>

    </div><!-- /.container -->
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
