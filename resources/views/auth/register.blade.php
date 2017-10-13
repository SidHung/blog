<html>
  <head>
    @include('partial.head')
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">會員註冊</div>
        <div class="col-md-4"></div>
      </div>

      <form method="POST" action="/register">
        Email:
        <input class="form-control" type="text" name="email">

        Password:
        <input class="form-control" type="password" name="password">

        <input type="submit" class="btn btn-primary" value="註冊">

        {{ csrf_field() }}
      </form>

    </div>

    @include('partial.script')

  </body>
</html>
