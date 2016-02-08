<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datatable</title>

    {{HTML::style('/css/jquery.dataTables.css')}}
    {{HTML::style('/css/bootstrap.css')}}
    {{HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}
    {{HTML::script('//code.jquery.com/jquery-1.12.0.min.js')}}
    {{HTML::script('/js/jquery.dataTables.min.js')}}
  </head>
  <body>
    <div class="container">
      <div class="content">
        @foreach($products as $product)
          <h3>{{$product->title}}</h3>
        @endforeach
        {{$products->links()}}
        {{ Datatable::table()
          ->addColumn('id','title',"Acción")
          ->setUrl(route('api.producto'))
          ->render();

        }}
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
