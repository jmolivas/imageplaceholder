<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceImg;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class PlaceImg
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class PlaceImg extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://placeimg.com/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'placeimg';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Place IMG';
    }
}
