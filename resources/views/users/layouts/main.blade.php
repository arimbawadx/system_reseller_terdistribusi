<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- <link rel="manifest" href="{{asset('manifest/manifest.json')}}"> -->
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- Navbar -->
    @include('/users/layouts/header')
    <!-- /.navbar -->
    <div id="preloader"></div>
    @yield('content')
    <!-- Main Footer -->
    @include('/users/layouts/footer')


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        index();
        $('#add-user').on('submit', function (e) {
          e.preventDefault();
          $('#close-tambah').click();

          $.ajax({
            type: "post",
            url: "{{url('/user/store')}}",
            data: $('#add-user').serialize(),
            success: function(response){
              console.log(response)
              index();
            },
            error: function (error) {
              console.log(error)
              alert('Data Not Saved');
            }
          });
        });
      });

      function index() {
       $.get("{{ url('/users/read') }}", {}, function (data, status) {
        $("#read").html(data)
      })
     }
   </script>
 </body>
 </html>