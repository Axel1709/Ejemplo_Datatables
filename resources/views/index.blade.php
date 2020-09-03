<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- links para uso de  datatables -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

      <title>Ejemplo de DataTable</title>
    </head>
      <body>
        <div class="container">
          <table id="users" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
              </tr>
            </thead>
          </table>
        </div>


      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function() {
          $('#users').DataTable({
          "serverSide": true,
          "ajax": "{{ url('api/users')}}",
          "columns": [
            {data: 'id'},
            {data: 'name'},
            {data: 'email'},
          ]
        });
      });
      </script>

    </body>
  </html>
