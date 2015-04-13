<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceKitten;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class PlaceKitten
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class PlaceKitten extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://placekitten.com/g/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'placekitten';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Place Kitten';
    }
}
