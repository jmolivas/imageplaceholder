<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\LoremPixel;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class LoremPixel
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class LoremPixel extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://lorempixel.com/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'lorempixel';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Lorem Pixel';
    }
}
