<h1>新增家事表單</h1>

<form method="POST" action="/task">
	{{ csrf_field() }}

	<h4>名稱：</h4>
	<input type="text" name="name">

	<h4>敘述：</h4>
	<input type="text" name="description">

	<br>
	<br>
	<input type="submit" value="送出">
</form>
