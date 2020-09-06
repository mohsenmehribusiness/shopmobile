<html>
<head>
    <title>صفحه اصلی سایت</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body >
	<div class="row">
		<div class="col-lg-12" style="padding: 50px;">
			@foreach($tests as $test)
				<h3>
					@can('view',$test)
						<span style="color:green;">&#10004;</span>
					@endcan
					@cannot('view',$test)
						<span style="color:red;">&#10006;</span>
					@endcannot
					<a href="/test/{{$test->id}}">{{$test->title}}</a>
				</h3>
				<p>
					{{$test->body}}
				</p>
				<hr>
			@endforeach
		</div>
	</div>
</body>
</html>