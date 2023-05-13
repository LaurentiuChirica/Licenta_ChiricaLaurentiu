<link rel="stylesheet" href="sidenavbar.css" type="text/css">

<nav class="navigation">
    <ul class="mainmenu">
        <?php
        $menu_items = [
            [
                'label' => 'Home',
                'url' => 'tut_PHP.php'
            ], 
            [
                'label' => 'Introducere',
                'url' => 'introducere.php'
            ],
            [
                'label' => 'Products',     
                'url' => '#',
                'sub_menu' => [
                    [
                        'label' => 'Product 1',
                        'url' => '#'
                    ],
                    [
                        'label' => 'Product 2',
                        'url' => '#'
                    ],
                    [
                        'label' => 'Product 3',
                        'url' => '#'
                    ]
                ]
            ],
            [
                'label' => 'Services',
                'url' => '#',
                'sub_menu' => [
                    [
                        'label' => 'Service 1',
                        'url' => '#'
                    ],
                    [
                        'label' => 'Service 2',
                        'url' => '#'
                    ],
                    [
                        'label' => 'Service 3',
                        'url' => '#'
                    ]
                ]
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
            [
                'label' => 'Contact',
                'url' => '/contact'
            ],
        ];

        foreach ($menu_items as $item) {
            echo '<li>';
            echo '<a class href="' . $item['url'] . '">' . $item['label'] . '</a>';
            if (isset($item['sub_menu'])) {
                echo '<ul class="submenu">';
                foreach ($item['sub_menu'] as $sub_item) {
                    echo '<li><a "href="' . $sub_item['url'] . '">' . $sub_item['label'] . '</a></li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</nav>
