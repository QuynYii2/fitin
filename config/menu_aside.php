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
            'name' => 'experience',
            'title' => 'Hướng dẫn trải nghiệm',
            'icon' => 'bi bi-grid',
            'route' => 'admin.experience.index',
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
            'name' => 'category',
            'title' => 'Danh mục sản phẩm',
            'icon' => 'bi bi-grid',
            'route' => 'admin.category.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'product',
            'title' => 'Quản lý sản phẩm',
            'icon' => 'bi bi-grid',
            'route' => 'admin.product.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'consulting_design',
            'title' => 'Tư vấn thiết kế nội thất',
            'icon' => 'bi bi-grid',
            'route' => 'admin.consulting_design.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'new',
            'title' => 'Khởi nguồn cảm hứng',
            'icon' => 'bi bi-grid',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Danh mục',
                    'route' => 'admin.category-new.index-cate',
                    'name' => 'category'
                ],
                [
                    'title' => 'Bài viết',
                    'route' => 'admin.new.index',
                    'name' => 'blog'
                ],
            ],
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
