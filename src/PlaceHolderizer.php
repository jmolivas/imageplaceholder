<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolderizer;
 */

namespace JMOlivas\ImagePlaceHolder;

/**
 * Class PlaceHolderizer
 * @package JMOlivas\ImagePlaceHolder
 */
class PlaceHolderizer
{

    /**
     * @var array
     */
    protected $placeHolders = [
        'BaconMockup',
        'FakeImg',
        'LoremPixel',
        'PlaceKitten',
        'BeerHold',
        'PlaceHoff',
        'PlaceSheen',
        'PlaceImg'
    ];

    /**
     * @param int   $width
     * @param int   $height
     * @param array $options
     * @param int   $quantity
     * @return array
     */
    public function generateImages($width=null, $height=null, $options =[], $quantity=25)
    {
        for ($i=0; $i <$quantity; $i++) {
            $placeHolder = $this->placeHolders[array_rand($this->placeHolders)];
            $class = new \ReflectionClass('JMOlivas\\ImagePlaceHolder\\PlaceHolder\\'.$placeHolder);
            $images[] = $class->newInstanceArgs();
        }

        return $images;
    }
}
