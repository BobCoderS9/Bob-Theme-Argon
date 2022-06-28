<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/theme/Bob-Theme-Argon/favicon.ico">
    <title>Bob-Argon</title>
    <link rel="stylesheet" href="//unpkg.com/element-plus/dist/index.css">
    <link href="/theme/Bob-Theme-Argon/css/app.547f87bb.css" rel="preload" as="style">
    <link href="/theme/Bob-Theme-Argon/css/chunk-vendors.9f69bc1a.css" rel="preload" as="style">
    <link href="/theme/Bob-Theme-Argon/js/app.ae8c4347.js" rel="preload" as="script">
    <link href="/theme/Bob-Theme-Argon/js/chunk-vendors.82406648.js" rel="preload" as="script">
    <link href="/theme/Bob-Theme-Argon/css/chunk-vendors.9f69bc1a.css" rel="stylesheet">
    <link href="/theme/Bob-Theme-Argon/css/app.547f87bb.css" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    // 首页订阅客户端显示
    window.CLIENT = {
        'SSR':  {{ $theme_config['client_ssr'] }} ,
        'Clash': {{ $theme_config['client_clash'] }},
        'Shadowrocket': {{ $theme_config['client_shadowrocket'] }},
        'Surge': {{ $theme_config['client_surge'] }},
        'V2Ray': {{ $theme_config['client_v2ray'] }},
        'Surfboard': {{ $theme_config['client_surfboard'] }},
    };
    window.APP_DESCRIPTION = '{{$description}}';
    window.APP_NAME = '{{$title}}';
</script>
{!! $theme_config['custom_html'] !!}
<script src="/theme/Bob-Theme-Argon/js/chunk-vendors.82406648.js"></script>
<script src="/theme/Bob-Theme-Argon/js/app.ae8c4347.js"></script>
</body>
</html>
