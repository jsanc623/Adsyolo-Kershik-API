<? header("Location: /jarvis/"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ohcastra</title>
	<link rel="stylesheet" href="/css/dev.css">
	<script type="text/javascript" language="javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript">
	//<[CDATA[
		function page_move(page_id)
		{
			$('#page-frame').attr("src","/include/"+page_id+".html");
		}

		function template(page_id)
		{
			$('#page-frame').attr("src","/"+page_id);
		}
	//]]>
	</script>
</head>
<body>
<div id="wrapper">
	<div id="page-list">
		<h2>Template</h2>
		<ul>
			<li><a href="javascript:template('javis')">javis</a></li>
			<li><a href="javascript:template('madmin')">madmin</a></li>
			<li><a href="javascript:page_move('icon')">madmin-icon</a></li>
			<li><a href="javascript:template('stilearn')">stilearn</a></li>
		</ul>

		<h2>Page</h2>
		<ul>
			<li><a href="javascript:page_move('main')">main</a></li>
			<li><a href="javascript:page_move('create_meeting')">create_meeting</a></li>
			<li><a href="javascript:page_move('progress_meeting')">progress_meeting</a></li>
		</ul>
	</div>
	<iframe id="page-frame"></iframe>
</div>
</body>
</html>