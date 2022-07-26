<?php


namespace App\Service\Site;


class MenuService
{

    public function getMenu(): array
    {
        return [
            [
                'title' => 'Tech',
                'url' => 'tech',
                'submenu' => [
                    [
                        'title' => 'Amazon',
                        'url' => 'amazon',
                    ],
                    [
                        'title' => 'Apple',
                        'url' => 'Apple',
                    ],
                    [
                        'title' => 'Google',
                        'url' => 'google',
                    ],
                    [
                        'title' => 'Facebook',
                        'url' => 'facebook',
                    ],
                    [
                        'title' => 'Microsoft',
                        'url' => 'microsoft',
                    ],
                    [
                        'title' => 'AI',
                        'url' => 'ai',
                    ],
                    [
                        'title' => 'Tesla',
                        'url' => 'Tesla',
                    ],
                    [
                        'title' => 'Cybersecurity',
                        'url' => 'cybersecurity',
                    ],
                    [
                        'title' => 'Crypto Currency',
                        'url' => 'cryptocurrency',
                    ],
                    [
                        'title' => 'Cars',
                        'url' => 'cars',
                    ],
                    [
                        'title' => 'Mobile',
                        'url' => 'mobile',
                    ],

                ]
            ],
            [
                'title' => 'Reviews',
                'url' => 'reviews',
                'submenu' => [
                    [
                        'title' => 'Laptops',
                        'url' => 'laptops',
                    ],
                    [
                        'title' => 'Phones',
                        'url' => 'phones',
                    ],
                    [
                        'title' => 'Headphones',
                        'url' => 'headphones',
                    ],
                    [
                        'title' => 'Camera',
                        'url' => 'camera',
                    ],
                    [
                        'title' => 'Tablets',
                        'url' => 'tablets',
                    ],
                    [
                        'title' => 'Smartwatches',
                        'url' => 'smartwatches',
                    ],
                    [
                        'title' => 'Speakers',
                        'url' => 'Speakers',
                    ],
                    [
                        'title' => 'Drones',
                        'url' => 'drones',
                    ],
                    [
                        'title' => 'Accessories',
                        'url' => 'accessories',
                    ],
                    [
                        'title' => 'Buying Guide',
                        'url' => 'buying-guide',
                    ],
                    [
                        'title' => 'How To',
                        'url' => 'how-to',
                    ],
                ]
            ],
            [
                'title' => 'Science',
                'url' => 'science',
                'submenu' => [
                    [
                        'title' => 'NASA',
                        'url' => 'nasa',
                    ],
                    [
                        'title' => 'Space',
                        'url' => 'space',
                    ],
                    [
                        'title' => 'Energy',
                        'url' => 'energy',
                    ]
                    ,
                    [
                        'title' => 'Health',
                        'url' => 'health',
                    ]
                ]
            ],
            [
                'title' => 'Entertainment',
                'url' => 'entertainment',
                'submenu' => [
                    [
                        'title' => 'Film',
                        'url' => 'film',
                    ],
                    [
                        'title' => 'TV',
                        'url' => 'tv',
                    ],
                    [
                        'title' => 'Book',
                        'url' => 'book',
                    ]
                    ,
                    [
                        'title' => 'Game',
                        'url' => 'game',
                    ],
                    [
                        'title' => 'Music',
                        'url' => 'music',
                    ]
                ]
            ],
            [
                'title' => 'Finance',
                'url' => 'finance',
                'submenu' => [
                    [
                        'title' => 'Stock',
                        'url' => 'stock',
                    ],
                    [
                        'title' => 'Cryptocurrency',
                        'url' => 'Cryptocurrency',
                    ],
                    [
                        'title' => 'Personal Finance',
                        'url' => 'personal-finance',
                    ]
                ]
            ],
        ];
    }

}
