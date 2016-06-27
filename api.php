<?php $root_path = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include_once($root_path."/includes/functions.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>API JSON</title>

	<!-- Style CSS -->
	<link href="<?php $root_path ?>/css/jordan.css" rel="stylesheet">
	<!-- Google Fonts -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	<script src="<?php $root_path ?>/js/jquery.validate.js"></script>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="/images/favicon.png" />	

</head>

<body>
<header class="header">
	
</header>
<script>
var root = 'http://jsonplaceholder.typicode.com';

$.ajax({
  url: root + '/comments?postId=1',
  method: 'GET'
}).then(function(data) {
  console.log(data);
});

</script>
<div style="text-align:center; width 100%;">
	<h1>API JSON</h1>
</div>
