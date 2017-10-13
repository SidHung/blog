<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Stream Workshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/task">家事管理 <span class="sr-only">(current)</span></a></li>
        <li><a href="/articles">文章管理</a></li>
        <li><a href="/category">分類管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="https://scontent.ftpe8-3.fna.fbcdn.net/v/t1.0-9/14055159_1236147206418167_1925319583161016240_n.jpg?oh=556b59189bffd7283f0fc49e1ccbbeb0&oe=5A2898D1" style="height: 20px" class="img-circle"> {{ auth()->user()->email }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout">登出</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
