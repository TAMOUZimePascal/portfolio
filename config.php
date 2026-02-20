<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Zimé Pascal TAMOU | Portfolio',
    'description' => 'Portfolio de développeur Fullstack Laravel & Data BI',
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'sort' => '-date',
        ],
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
        ],
    ],
];
