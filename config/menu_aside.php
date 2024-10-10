<?php

return [
    'admin' => [
        [
            'name' => 'dashboard',
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid',
            'route' => 'admin.index',
            'submenu' => [],
            'number' => 1
        ],
        [
            'name' => 'statistical',
            'title' => 'Thống kê lượt truy cập',
            'icon' => 'bi bi-grid',
            'route' => 'admin.statistical',
            'submenu' => [],
            'number' => 1
        ],
        [
            'name' => 'banner',
            'title' => 'Quản lý banner',
            'icon' => 'bi bi-grid',
            'route' => 'admin.banner.index',
            'submenu' => [],
            'number' => 1
        ],
        [
            'name' => 'trademark',
            'title' => 'Thương hiệu',
            'icon' => 'bi bi-grid',
            'route' => 'admin.trademark.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'post',
            'title' => 'Bài viết footer',
            'icon' => 'bi bi-grid',
            'route' => 'admin.post.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'setting',
            'title' => 'Cài đặt',
            'icon' => 'bi bi-grid',
            'route' => 'admin.setting.index',
            'submenu' => [],
            'number' => 2
        ],
]
];
