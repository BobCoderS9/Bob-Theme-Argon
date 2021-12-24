# Bob-Theme-Argon
适配v2board v1.5.1以上版本的前端主题

本主题由@BobS9开发并维护。

### 安装
下载到`theme`目录过后要修改当前文件夹名为`Bob-Theme-Argon`，然后在后台选择主题 【Bob-Theme-Argon】 就行了

### 配置
修改目录下的 `dashboard.blade.php` 文件
```
<script>
    // 首页订阅客户端显示
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
    }
</script>
```


![](https://shige.group/such/pic.php/forum/pic/item/cb8065380cd79123d9a3a4ccba345982b3b780c2/mlike.jpg)
![](https://shige.group/such/pic.php/forum/pic/item/060828381f30e924a46941875b086e061c95f7b3/mlike.jpg)

![](https://shige.group/such/pic.php/forum/pic/item/4a36acaf2edda3cc0528659616e93901203f92bc/mlike.jpg)

![](https://shige.group/such/pic.php/forum/pic/item/b999a9014c086e063d67e2fd15087bf40bd1cbbd/mlike.jpg)

![](https://shige.group/such/pic.php/forum/pic/item/c8177f3e6709c93dcf3cd341883df8dcd00054be/mlike.jpg)

![](https://shige.group/such/pic.php/forum/pic/item/8435e5dde71190effd324f69d91b9d16fcfa60bf/mlike.jpg)

