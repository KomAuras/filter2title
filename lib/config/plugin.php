<?php

return array(
    'name' => 'Filter to Title',
    'description' => /*_wp*/('Selected filter values in the title of the page'),
    'version'=>'1.0.0',
    'vendor' => 1010465,
    'img'=>'img/filter2title.png',
    'shop_settings' => true,
    'handlers' => array(
        'frontend_category' => 'titleCategory',
    )
);