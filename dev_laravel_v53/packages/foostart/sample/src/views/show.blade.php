<!DOCTYPE html>
<html>
<head>
	<title> Show Data</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
		@foreach($data as $value)
			<tr>
				<th> {{ $value['sample_id'] }} </th>
				<th> {{ $value['sample_name'] }} </th>
			</tr>
		@endforeach
	</table>
</body>
</html>