<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datatable</title>
    {{HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}
    {{HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}
    {{HTML::script('//code.jquery.com/jquery-1.12.0.min.js')}}

  </head>

  <body>
    <div class="container">
      <div class="content">

        @foreach($products as $product)
          <h3>{{$product->title}}</h3>
        @endforeach

        {{$products->links()}}

      </div>
    </div>
    <script>
      $(document).on('click','pagination a' , function(e){
        e.preventDefault();

        console.log($(this).attr('href'));
      });
    </script>

  </body>
</html>
