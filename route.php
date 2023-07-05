<?php
return [
    '~^$~' => [\Controller\MainController::class,'main'],
    '~^admin$~' => [\Controller\Admin\IndexController::class,'main'],
    "~^admin/(?P<num>\d+)$~" => [\Controller\Admin\ViewController::class,"view"],
    "~^admin/create$~" => [\Controller\Admin\CreateController::class,"create"],
    '~^admin/edit/(?P<num>\d+)$~' => [\Controller\Admin\EditController::class, 'edit'],
    "~^admin/delete/(?P<num>\d+)$~" => [\Controller\Admin\DestroyController::class,"delete"]
];