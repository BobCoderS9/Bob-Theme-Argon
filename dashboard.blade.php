<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/theme/bob-argon/favicon.ico">
    <title>Bob-Argon</title>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">
    <link href="/theme/Bob-Theme-Argon/css/app.e0a179ca.css" rel="preload" as="style">
    <link href="/theme/Bob-Theme-Argon/css/chunk-vendors.9f69bc1a.css" rel="preload" as="style">
    <link href="/theme/Bob-Theme-Argon/js/app.0cc1bfa6.js" rel="preload" as="script">
    <link href="/theme/Bob-Theme-Argon/js/chunk-vendors.59acb532.js" rel="preload" as="script">
    <link href="/theme/Bob-Theme-Argon/css/chunk-vendors.9f69bc1a.css" rel="stylesheet">
    <link href="/theme/Bob-Theme-Argon/css/app.e0a179ca.css" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    window.CLIENT = {
        'SSR': true,
        'Clash': false,
        'Shadowrocket': true,
        'Surge': false,
        'V2Ray': false,
        'Surfboard': true,
    };
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
<script src="/theme/Bob-Theme-Argon/js/chunk-vendors.59acb532.js"></script>
<script src="/theme/Bob-Theme-Argon/js/app.0cc1bfa6.js"></script>
</body>
</html>
