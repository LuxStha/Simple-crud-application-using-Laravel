<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
    <div class="container">
      @yield('content')
    </div>
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('.delete_form').on('submit',function()
          {
            if(confirm("Are you sure you want to delete?"))
            {
              return true;
            }
            else
            {
              return false;
            }
          });
      });
    </script>
  </body>
</html>
