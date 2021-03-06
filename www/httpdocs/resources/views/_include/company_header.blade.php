<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<head profile="http://purl.org/net/uriprofile/">
<meta http-equiv="Content-Language" content="ja">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="imagetoolbar" content="no">
<meta name="Description" content="">
<meta name="Keywords" content="">
<meta name="Author" content="" lang="ja" xml:lang="ja">
<meta name="Copyright" content="COPYRIGHT(C)">
<title>{{(isset($title)) ? ($title . " | ") : ""}}{{ env('APP_NAME') }}管理画面</title>
<link rel="stylesheet" type="text/css" media="all" href="/common/company/css/screen.css" charset="utf-8">


@if (isset($id) && $id == 'list')
<link rel="stylesheet" href="/css/bootstrap.min.css">
@endif


@if (isset($css))
<link rel="stylesheet" type="text/css" media="all" href="/common/company/css/{{$css}}.css" charset="utf-8">
@endif

@if (isset($js))
<script src="/common/company/js/{{$js}}.js"></script>
@endif

<link rel="index contents" href="/" title="ホーム">

{{--
<link rel="shortcut icon" type="image/x-icon" href="/image/favicon.ico">
--}}

@if (isset($map))

<script src="/js/jquery-1.10.2.js"></script>
<script src="//maps.googleapis.com/maps/api/js"></script>
<script src="/common/js/googlemap.js"></script>
<script src="/js/getAddrFromZip.js"></script>
{{--
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCtjRQJwGxVD9uY_pyxKuvG7ZEl47FOLsE&callback=initMap"></script>
--}}

@endif

</head>
<body>
<div id="container">
<div id="header">
	<a href="/company" title="" id="logo"><img src="/common/image/Logo.png" alt="" width="70px"></a>
	<ul id="headNavigation">
		<li id="headHome"><a href="/company">会社画面</a></li>
		<li id="headUserHome"><a href="/" target="_blank">ユーザー画面</a></li>
	</ul>
</div>
<hr class="separate">
<div id="contents">
	<div id="main">