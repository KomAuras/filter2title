<?php

return array(
    'name' => 'Filter to Title',
    'description' => 'Фильтр в тайтл категории',
    'version'=>'1.0.0',
    'vendor' => 999,
    'img'=>'img/filter2title.png',
    'shop_settings' => true,
    'handlers' => array(
        'frontend_category' => 'titleCategory',
    )
);