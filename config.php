<?php

return [
    'name' => 'Argon',
    'description' => 'V2board-Argon主题，作者:@Bobs9',
    'version' => '1.6.0',
    'images' => 'https://images.unsplash.com/photo-1654886848152-93c1baed9e14?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1975&q=80',
    'configs' => [
        [
            'label' => 'SSR',                               // 标签
            'placeholder' => 'SSR订阅开启/关闭',                   // 描述
            'field_name' => 'client_ssr',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ],[
            'label' => 'Clash',                               // 标签
            'placeholder' => 'Clash订阅开启/关闭',                   // 描述
            'field_name' => 'client_clash',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ],[
            'label' => 'Shadowrocket',                               // 标签
            'placeholder' => 'Shadowrocket订阅开启/关闭',                   // 描述
            'field_name' => 'client_shadowrocket',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ],[
            'label' => 'Surge',                               // 标签
            'placeholder' => 'Surge订阅开启/关闭',                   // 描述
            'field_name' => 'client_surge',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ],[
            'label' => 'V2Ray',                               // 标签
            'placeholder' => 'V2Ray订阅开启/关闭',                   // 描述
            'field_name' => 'client_v2ray',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ],[
            'label' => 'Surfboard',                               // 标签
            'placeholder' => 'Surfboard订阅',                   // 描述
            'field_name' => 'client_surfboard',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'true' => '开启',
                'false' => '关闭',
            ],
            'default_value' => 'true'                       // 字段默认值，将会在首次进行初始化
        ], [
            'label' => '自定义页脚HTML',
            'placeholder' => '可以实现客服JS代码的加入等',
            'field_name' => 'custom_html',
            'field_type' => 'textarea'
        ]
    ]
];
