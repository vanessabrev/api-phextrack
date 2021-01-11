<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.1/examples/cover/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://img.icons8.com/ios/452/api.png">

  <title>Api Phex Track</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body class="text-center">

  <div class="container">
    <header>
      <h1 class="cover-heading"> Phex Track Api</h1>
      <p class="lead">Esse é um sistema construido para requisições http.</p>
    </header>

    <?php
    class NewEndpoint
    {
      public $method, $url,  $action, $middleware;
    }

    $endpoint_1 = new NewEndpoint();
    $endpoint_1->method = 'GET | HEAD';
    $endpoint_1->url = '/';
    $endpoint_1->action = 'Closure';
    $endpoint_1->middleware = 'web';

    $endpoint_2 = new NewEndpoint();
    $endpoint_2->method = 'POST';
    $endpoint_2->url = 'auth/login';
    $endpoint_2->action = 'App\Http\Controllers\Api\AuthController@login';
    $endpoint_2->middleware = 'api';

    $endpoint_3 = new NewEndpoint();
    $endpoint_3->method = 'POST';
    $endpoint_3->url = 'auth/logout';
    $endpoint_3->action = 'App\Http\Controllers\Api\AuthController@logout';
    $endpoint_3->middleware = 'api apiJwt';

    $endpoint_3 = new NewEndpoint();
    $endpoint_3->method = 'POST';
    $endpoint_3->url = 'auth/refresh';
    $endpoint_3->action = 'App\Http\Controllers\Api\AuthController@refresh';
    $endpoint_3->middleware = 'api apiJwt';

    $endpoint_4 = new NewEndpoint();
    $endpoint_4->method = 'GET | HEAD';
    $endpoint_4->url = 'menus';
    $endpoint_4->action = 'App\Http\Controllers\Api\MenuController@index';
    $endpoint_4->middleware = 'api';

    $endpoint_5 = new NewEndpoint();
    $endpoint_5->method = 'GET | HEAD';
    $endpoint_5->url = 'products';
    $endpoint_5->action = 'App\Http\Controllers\Api\ProductController@index';
    $endpoint_5->middleware = 'api';

    $endpoint_6 = new NewEndpoint();
    $endpoint_6->method = 'GET | HEAD';
    $endpoint_6->url = 'user';
    $endpoint_6->action = 'App\Http\Controllers\Api\UserController@index';
    $endpoint_6->middleware = 'api apiJwt';

    $endpoinst = array($endpoint_1, $endpoint_2, $endpoint_3, $endpoint_4,  $endpoint_5,  $endpoint_6);


    ?>

    <main role="main">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Method</th>
            <th scope="col">URL</th>
            <th scope="col">Action</th>
            <th scope="col">Middleware</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($endpoinst as $item) {
            echo '<tr>' .
              '<th>' . htmlentities($item->method) . '</th>' .
              '<th>' . htmlentities($item->url) . '</th>' .
              '<th>' . htmlentities($item->action) . '</th>' .
              '<th>' . htmlentities($item->middleware) . '</th>' .
              '</tr>';
          } ?>
        </tbody>
      </table>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Developed by <a href="https://josielfaria.com/">Devjo Tecnologia</a>, 2021.
      </div>
    </footer>
  </div>




</body>

<style>
  body {
    display: flex;
    background-color: #333;
    color: white;
  }

  .container {
    width: 45vw;
    height: 100vh;
    display: grid;
  }

  .table {
    border-radius: 5px;
    background-color: #212529;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  }

  .text-center,
  th {
    text-align: center;
  }

  .table>tbody>tr>td,
  .table>tbody>tr>th,
  .table>tfoot>tr>td,
  .table>tfoot>tr>th,
  .table>thead>tr>td,
  .table>thead>tr>th {
    padding: 20px;

  }
</style>

</html>