<?php

require 'vendor/autoload.php';

use JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceKitten;
use JMOlivas\ImagePlaceHolder\PlaceHolder\BaconMockup;
use JMOlivas\ImagePlaceHolder\PlaceHolder\LoremPixel;
use JMOlivas\ImagePlaceHolder\PlaceHolder\FakeImg;

use JMOlivas\ImagePlaceHolder\PlaceHolderizer;

/* @var PlaceKitten $placeKitten */
$placeKitten = new PlaceKitten(320, 240);
echo $placeKitten->getPlaceHolder() . "\r\n";

/* @var BaconMockup $baconMockup */
$baconMockup = new BaconMockup();
echo $baconMockup->getPlaceHolder() . "\r\n";

/* @var LoremPixel $loremPixel */
$loremPixel = new LoremPixel(640, 480);
echo $loremPixel->getPlaceHolder() . "\r\n";

/* @var FakeImg fakeImg */
$fakeImg = new FakeImg();
echo $fakeImg->getPlaceHolder() . "\r\n";

echo '************************************' . "\r\n";

/* @var PlaceHolderizer placeHolderizer */
$placeHolderizer = new PlaceHolderizer();
$images = $placeHolderizer->generateImages();

foreach( $images as $image ) {
    echo $image->getUrl() . "\r\n";
}
