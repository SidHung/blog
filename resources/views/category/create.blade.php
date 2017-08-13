<h1>新增分類表單</h1>

<form method="POST" action="/category">
	{{ csrf_field() }}

	<h4>id </h4>
	<input type="text" name="id">


	<h4>標籤名稱：</h4>
	<input type="text" name="heading">

	<h4>排序：</h4>
	<input type="text" name="queue">

	<br>
	<br>
	<input type="submit" value="送出">
</form>