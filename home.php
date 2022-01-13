<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="includes/css/theme.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
  <!-- NAV BAR -->
  <div class="nav">
  
    <div class="logo">
      Anonymous MSG 🤨
    </div>
    <nav>
      <ul>
      <li> <button clas id="myBtn">Open Modal</button></li>

        <li><a class="last" href="">HOME</a></li>
        <li><a class="last" href="">ABOUT</a></li>
        <li><a class="last" href="">BUG</a></li>
        <li><a class="last" href="">SETTING </a></li>
        <li><a class="last" href="">PROFILE</a></li>
        <li><a class="last" href="">LOGOUT</a></li>
      </ul>
    </nav>
  </div>
  <!-- NAV BAR ENDS -->
  <div class="main">
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
       <form class="name_form" action="includes/msgController.php" method="post">
      <input type="text" name="" placeholder="NAME" id="">

      <input class="btn" type="submit" value="SEND">
    </form>
       
      </div>

    </div>
    <!-- MAIN CONTENT STARTS -->
    <!-- <form class="name_form" action="includes/msgController.php" method="post">
      <input type="text" name="" placeholder="NAME" id="">

      <input class="btn" type="submit" value="SEND">
    </form> -->
    <!-- MAIN CONTENT ENDS -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>

    </div>
    <h1>[ {<?php echo $_SESSION['name'] = 'PRINCE' ?>}]</h1>

    <div class="box-model">
      <div class="box">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, commodi perspiciatis sunt culpa eligendi expedita repellendus corporis nobis itaque architecto!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, commodi perspiciatis sunt culpa eligendi expedita repellendus corporis nobis itaque architecto!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
      <div class="box">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum quae nihil distinctio quibusdam nemo maiores consequuntur maxime rem, unde fugiat, perspiciatis aliquam, doloremque debitis! Modi fugiat dolorem doloribus maxime, quaerat quisquam libero esse sapiente similique reiciendis, eveniet eligendi ducimus odit adipisci? Facilis soluta sed saepe nobis architecto dolor aperiam!
      </div>
    </div>

  </div>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>