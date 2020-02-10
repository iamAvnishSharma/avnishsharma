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

    {{-- <form method="post" action="{{url('store')}}"> --}}
        
    <form method="post" action="javascript:void(0)">
        @csrf
        <div class="row">
            <div class="col-md-2"><label for="Headline">Enter the Headline:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" id="headline">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="Twoliner">Enter the Two-liner:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" id="twoliner">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="News">Enter the News:</label></div>
            <div class="form-group col-md-8">
            <textarea type="text" class="form-control" id="news"> </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="Source">Enter the Source:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" id="source">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="Link">Enter the Link:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" id="link">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <button id="next" class="btn btn-success">Next</button>
            </div>
          </div>

        {{-- <div class="row">
            <div class="col-md-2"><label for="Link">Enter the Link:</label></div>
            <div class="form-group col-md-8">
            <input type="text" class="form-control" id="link">
            </div>
        </div> --}}

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button id="download" class="btn btn-success">Process</button>
          </div>
        </div>
      </form>
      <form method="post" action="{{url('download')}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Download</button>
          </div>
        </div>
      </form>
   </div>
</body>
<script>
  $(document).ready(function(){
    var headline  = []
    var twoliner = []
    var news = []
    var source = []
    var link = []

    $("#next").click(function(){
      alert("This was clicked.");
      headline.push(document.getElementById("headline").value);
      document.getElementById("headline").value = "";
      twoliner.push(document.getElementById("twoliner").value);
      document.getElementById("twoliner").value = "";
      news.push(document.getElementById("news").value);
      document.getElementById("news").value = "";
      source.push(document.getElementById("source").value);
      document.getElementById("source").value = "";
      link.push(document.getElementById("link").value);
      document.getElementById("link").value = "";
    });


    $("#download").click(function(){
      $.post("{{url('store2')}}",
      {
        "_token": "{{ csrf_token() }}",
        "headline": headline,
        "twoliner": twoliner,
        "news": news,
        "source": source,
        "link": link
      },
      function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
      });
    });
  });
  </script>
</html>