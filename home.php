<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Anonymous MSg 🤨</title>
  <style>
    .custombtn {
      margin: 10px;
      background: none;
    }

    .msggot {
      display: flex;
      padding: 5px;
      margin: 10px;
    }

    .card {
      margin: 5px;
      border: 1px solid #33ccff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Anonymous Msg 🤨</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">



        </ul>
        <?php
        session_start();
        if (isset($_SESSION['isLoggedIn'])) {
        ?>
          <form class="d-flex">
            <a class="nav-link" href="">
              <!-- <h1><?php echo $_SESSION['uname'] ?></h1> -->
            </a>
            <a class="nav-link" href="logout.php">logout</a>
          </form>
        <?php }
        ?>

      </div>
    </div>

  </nav>
  <div style="" class="container">

    <!-- <button style="width: 400px;" class="btn custombtn btn-outline-info"><a href="#viewmsg"></a>Setting</button>
    <button style="width: 400px;" class="btn custombtn btn-outline-danger"><a href="#viewmsg"></a>Delete Account</button> -->
    <?php
    if (isset($_SESSION['isLoggedIn'])) {
    } else {
    ?>
      <form action="includes/msgController.php" method="post">
        <div class="mb-3">


          <label for="exampleFormControlInput1" class="form-label">Enter your name</label>
          <input type="text" class="form-control" name="msg" id="exampleFormControlInput1" placeholder="SRK">

          <input class="btn btn-primary mt-3" type="submit" name="submit" value="Send">
        </div>

      </form>
    <?php }
    ?>



    <?php if (isset($_SESSION['isLoggedIn'])) {
    ?>
      <div class="mb-3">


        <label for="exampleFormControlInput1" class="form-label">Enter your name</label>
        <input type="text" style="width: 600px;" class="form-control" value="<?php if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                                                                                $link = "https";
                                                                              else  $link = "http";

                                                                              // Here append the common URL characters.
                                                                              $link .= "://";

                                                                              // Append the host(domain name, ip) to the URL.
                                                                              $link .= $_SERVER['HTTP_HOST'];

                                                                              // Append the requested resource location to the URL
                                                                              echo   $link .= "/secretmsg/msg.php" . "?id=" . $_SESSION['uname']; ?>" name="msg" id="exampleFormControlInput1" placeholder="SRK">

        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Copy">
      </div>
      <h1>INBOX</h1>
      <div class="msggot">

        <?php include 'includes/server.php';

        $username = $_SESSION['uname'];
        $sql = "SELECT msgs.username,msgs.msg,user.username,user.password FROM msgs   INNER JOIN user ON msgs.username = user.username  WHERE user.username = {$username}";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        while ($row = mysqli_fetch_assoc($query)) {
          $msg = $row['msg'];

        ?>

          <div id="seemsg" class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text"><?php echo $msg; ?></p>

              <a href="#" class=" btn btn-outline-danger card-link">Delete</a>
            </div>
          </div>

      <?php     }
      }
      ?>
      </div>
  </div>







  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>