<?php

return [
    '/' => ['AppController', 'index'],
    '/about' => ['AppController', 'about'],
    '/contact' => ['AppController', 'contact'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/products/new' => ['ProductController', 'addNewProduct'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2'],
];
