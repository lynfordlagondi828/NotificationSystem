<?php
  require_once 'inc/DbFunctions.php';
  $database = new DbFunctions();

  $result = $database->get_all_notification();
?>

<html>
<head>
  <title>Notification System</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">NORSU SYSTEM Notification System in PHP and MySql</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="icons/notification.png" width="25" height="25">
                  <?php if (count($result)>0): ?>
                    <span class="badge badge-danger"><?php echo count($result); ?></span>
                  <?php endif; ?>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <?php if(count($result)>0): ?>
                  <?php foreach($result as $data): ?>
                    <a class="dropdown-item" href="view.php?=<?php echo $data["so_num"]; ?>">
                        <p>
                            <strong>Special Occasion:</strong> <?php echo $data["so_name"]; ?><br>
                            <small><i>Date Start: <?php echo date('F j, Y, g:i a',strtotime($data['so_date_start'])) ?></i></small>
                        </p>
                    </a>  <div class="dropdown-divider"></div>
                  <?php endforeach ?>
                <?php else: ?>
                  <p>No records</p>
                <?php endif; ?>
            </div>

          </li>
        </ul>
      </div>
    </nav>
  <br>  <br>
    <main role="main" class="container">
      <br>
      <div class="starter-template">
        <h1>NORSU NOTIFICATION SYSTEM</h1>
        <p class="lead">Employee NOTIFICATION</p>
      </div>

    </main><!-- /.container -->

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
