<h1>新增文章頁面</h1>

<form method="POST" action="/articles">
	{{ csrf_field() }}

	<h4>文章序號：</h4>
	<input type="text" name="id">

	<h4>內容：</h4>
	<input type="text" name="content">

	<br>
	<br>
	<input type="submit" value="送出">
</form>