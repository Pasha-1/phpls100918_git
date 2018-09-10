<?php
require_once 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
$image = Image::make('acc.jpg')->widen(300);
$image->rotate(45);
$image->save('img/ar.jpg', 60);