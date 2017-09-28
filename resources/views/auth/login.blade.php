<html>
  <head>
    @include('partial.head')
  </head>
  <body>

    <div class="container">

      <form method="POST" action="/login">
        Email:
        <input class="form-control" type="text" name="email">

        Password:
        <input class="form-control" type="password" name="password">

        <input type="submit" class="btn btn-primary" value="登入">

        {{ csrf_field() }}
      </form>

    </div>

    @include('partial.script')

  </body>
</html>
