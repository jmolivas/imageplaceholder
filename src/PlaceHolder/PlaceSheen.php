<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceSheen;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class PlaceSheen
 * @package JMOlivas\ImagePlaceHolder\PlaceSheen
 */
class PlaceSheen extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://placesheen.com/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'placesheen';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'PlaceSheen';
    }
}
