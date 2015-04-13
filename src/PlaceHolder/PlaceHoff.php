<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceHoff;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class PlaceHoff
 * @package JMOlivas\ImagePlaceHolder\PlaceHoff
 */
class PlaceHoff extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://place-hoff.com/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'placehoff';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Hasslehoff';
    }
}
