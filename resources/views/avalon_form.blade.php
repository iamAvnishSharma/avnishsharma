<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AGR</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>AGR </h2><br/>
      <form method="post" action="{{url('store')}}">
        @csrf
        <div class="row">
            <div class="col-md-2"><label for="Headline">Enter the Headline:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" name="headline">
        </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="Twoliner">Enter the Two-liner:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" name="twoliner">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="News">Enter the News:</label></div>
            <div class="form-group col-md-8">
            <textarea type="text" class="form-control" name="news"> </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="Source">Enter the Source:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" name="source">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-2"><label for="Link">Enter the Link:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" name="link">
            </div>
        </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Download</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>