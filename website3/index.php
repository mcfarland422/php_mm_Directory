<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">My Website</a>

        </div>
      </div>
    </nav>
    <div class="container">
      <form action="index.html" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" value="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </body>
</html>
