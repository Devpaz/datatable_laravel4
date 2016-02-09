<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datatable</title>


    {{HTML::style('/css/bootstrap.css')}}
    {{HTML::script('/js/jquery.min.js')}}
    {{HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}

    <!--{{HTML::script('/js/jquery.dataTables.min.js')}}-->
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
      $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page=$(this).attr('href').split('page=')[1];

        getProductos(page);
      });

      function getProductos(page){
        $.ajax({
          url:'/ajax/producto?page='+ page
        }).done(function(data){

          $('.content').html(data);

          location.hash=page;

        });

      };
    </script>

  </body>
</html>
