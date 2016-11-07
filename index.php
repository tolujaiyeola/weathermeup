<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weather App</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=ucf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
  html,body{
    height: 100%;
  }
  .container{
    /*background-image:url();*/
    padding-top: 150px;
  }

  .center{
    text-align: center;
  }

  p{
    padding-top: 15px;
    padding-bottom: 15px;
  }

  btn{
    margin-top: 20px;
  }
</style>
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
          <h1 class="center">Weather me up</h1>
          <p class="lead center">
            Enter your city below to get a forecast for the weather.
          </p>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Toronto, Regina, Edmonton ...">
            </div>
            <button class="btn btn-success btn-lg">Find my weather</button>
          </form>

        </div>
      </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>


</html>
