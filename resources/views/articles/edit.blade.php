<h1>編輯文章頁面</h1>

<form method="POST" action="/articles/{{ $articles->id }}">
	{{ csrf_field() }}

	{{ method_field('put') }}

	<h4>文章序號：</h4>
	<input type="text" name="id" value="{{ $articles->id }}">

	<h4>內容：</h4>
	<input type="text" name="content" value="{{ $articles->content }}">

	<br>
	<br>
	<input type="submit" value="送出">
</form>