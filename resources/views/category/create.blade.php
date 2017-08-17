<h1>新增分類表單</h1>

<form method="POST" action="/category">
	{{ csrf_field() }}

	<h4>id </h4>
	<input type="text" name="id">

	<h4>分類名稱：</h4>
	<input type="text" name="heading">

	<h4>權重級數：</h4>
	<input type="text" name="queue">

	<h4>分類詳細敘述：</h4>
	<input type="text" name="description">

	<br>
	<br>
	<input type="submit" value="送出">
</form>