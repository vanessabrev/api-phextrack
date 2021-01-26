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

    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Route;

    class NewEndpoint
    {
      public $method, $url,  $action, $middleware;
    }

    $routes = array();
    foreach (Route::getRoutes() as $route) {
      if (str_contains(json_encode($route->action['middleware']), 'api') !== false) {
        $routes[] = $route;
      }
    }

    ?>
    <table id="routes-table" class="table table-bordered table-responsive">
      <thead>
        <tr>
          <th>Url</th>
          <th>Method</th>
          <th>Middleware</th>
          <th>Function for API</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($routes as $route) {
            echo '<tr>' .
              '<th>' . '/' . str_replace('"', '', json_encode($route->uri)) . '</th>' .
              '<th>' .  str_replace('"', '',  str_replace('[', '',  str_replace(']', '', json_encode($route->methods)))) . '</th>' .
              '<th>' . str_replace('"', '', str_replace('[', '',  str_replace(']', '',json_encode($route->action['middleware'])))) . '</th>' .
               '<th>' . str_replace('"', '',json_encode($route->getActionMethod())) . '</th>' .
              '</tr>';
          } ?>
        </tr>
      </tbody>
    </table>



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