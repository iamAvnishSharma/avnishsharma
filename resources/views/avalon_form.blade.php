<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AGR</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    
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
        {{-- <div class="row">
            <div class="col-md-2"><label for="Link">Enter the Link:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" name="link">
            </div>
        </div> --}}

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
      </form>
   </div>
<script>



</script>
</body>
    
</html>