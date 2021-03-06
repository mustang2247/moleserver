<?php
return [
    [
        //父菜单ID，NULL或者不写系统默认，0为顶级菜单
        "parentid" => 0,
        //地址，[模块/]控制器/方法
        "route" => "gameserver/gameserver/index1",
        //类型，1：权限认证+菜单，0：只作为菜单
        "type" => 0,
        //状态，1是显示，0不显示（需要参数的，建议不显示，例如编辑,删除等操作）
        "status" => 1,
        //名称
        "name" => "游戏服务器",
        //图标
        "icon" => "icon-people",
        //备注
        "remark" => "",
        //排序
        "listorder" => 4,
        //子菜单列表
        "child" => [
            [
                "route" => "gameserver/gameserver/index",
                "type" => 1,
                "status" => 1,
                "name" => "游戏服务器管理",
                "icon" => "icon-people",
                "child" => [
                    [
                        "route" => "gameserver/gameserver/manage",
                        "type" => 1,
                        "status" => 1,
                        "name" => "服务器列表",
                        "icon" => "icon-huiyuan",
                    ],
                ],
            ],
            [
                "route" => "gameserver/accountserver/index",
                "type" => 1,
                "status" => 1,
                "name" => "账号服务器管理",
                "icon" => "icon-people",
                "child" => [
                    [
                        "route" => "gameserver/accountserver/manage",
                        "type" => 1,
                        "status" => 1,
                        "name" => "服务器列表",
                        "icon" => "icon-huiyuan",
                    ],
                ],
            ],
            [
                "route" => "gameserver/recordmanage/index",
                "type" => 1,
                "status" => 1,
                "name" => "游戏记录管理",
                "icon" => "icon-huiyuan2",
                "child" => [
                    [
                        "route" => "gameserver/gamerecord/manage",
                        "type" => 1,
                        "status" => 1,
                        "name" => "游戏记录",
                        "icon" => "icon-huiyuan",
                    ],
                    [
                        "route" => "gameserver/transferrecord/manage",
                        "type" => 1,
                        "status" => 1,
                        "name" => "转账记录",
                        "icon" => "icon-huiyuan",
                    ],
                ],
            ],
        ],
    ],
];
