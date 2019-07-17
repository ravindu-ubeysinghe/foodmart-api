
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if (!empty($page))
	<title>{{ $page->title }} - {{ setting('site.title') }}</title>
@else
	<title>Untitled Page - {{ setting('site.title') }}</title>
@endif

<meta name="description" content="{{ setting('site.description') }}">
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="icon" href="/img/favicon.png" type="image/png">
<link rel='stylesheet' id='main-css'  href='/css/app.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-css'  href='/css/custom.css' type='text/css' media='all' />
<script type="text/javascript" src="/js/app.js"></script>
<link rel='stylesheet' id='custom-font'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C600italic%7CNoto+Sans%3A400%2C400italic%2C600%2C600italic&#038;subset=latin%2Clatin-ext%2Ccyrillic' type='text/css' media='all' />
<link rel='stylesheet' id='custom-icons'  href='https://mk0athemesdemon3j7s5.kinstacdn.com/wp-content/themes/talon/icons/icons.min.css?ver=1' type='text/css' media='all' />
</head>

<body>
	<header>
		@include('inc.navbar')
	</header>
	<div class="container">
		<div class="row">
			<div class="fc-site-content col-sm-12">
