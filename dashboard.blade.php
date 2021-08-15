<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/theme/bob-argon/favicon.ico">
    <title>Bob-Argon</title>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">
    <link href="theme/bob-argon/css/app.a9dc9f17.css" rel="preload" as="style">
    <link href="theme/bob-argon/css/chunk-vendors.4f06f28f.css" rel="preload" as="style">
    <link href="theme/bob-argon/js/app.be63f6da.js" rel="preload" as="script">
    <link href="theme/bob-argon/js/chunk-vendors.144c4ece.js" rel="preload" as="script">
    <link href="theme/bob-argon/css/chunk-vendors.4f06f28f.css" rel="stylesheet">
    <link href="theme/bob-argon/css/app.a9dc9f17.css" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    window.APP_DESCRIPTION = '{{$description}}';
    window.APP_NAME = '{{$title}}';
    const SCRIPT_ID = '{{$crisp_id}}'; // 填写Crisp_id即可开启crisp客服
    if (SCRIPT_ID) {
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = SCRIPT_ID;
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    }</script>
<script src="theme/bob-argon/js/chunk-vendors.144c4ece.js"></script>
<script src="theme/bob-argon/js/app.be63f6da.js"></script>
</body>
</html>
