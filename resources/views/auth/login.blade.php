<html>
  <head>
    @include('partial.head')
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">會員登入</div>
        <div class="col-md-4"></div>
      </div>

      <form method="POST" action="/login">
        Email:
        <input class="form-control" type="text" name="email">

        Password:
        <input class="form-control" type="password" name="password">

        <input type="submit" class="btn btn-primary" value="登入">
        <div class="text-center">還不是會員嗎？<a href="/register">點此註冊</a>

        {{ csrf_field() }}
      </form>

    </div>

    @include('partial.script')

  </body>
</html>
