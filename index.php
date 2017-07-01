<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue Tutorial</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      
      <div class="post">
        <h1>This is first post</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, delectus, vero! 
          Aut adipisci fuga, dolorem optio sunt mollitia, debitis eius magni totam sint harum provident ipsa, 
          corporis eligendi dolorum hic!
        </p>
        <hr>
        <div class="vue-commenting"></div>
        <hr>
      </div>
    </div>

    <?php require_once( './view/comment-view.html' ) ?>

    <script src="https://unpkg.com/vue"></script>
    <script src="./scripts.js"></script>

  </body>
</html>