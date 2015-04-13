<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\BaconMockup;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class BaconMockup
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class BaconMockup extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://baconmockup.com/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'baconmockup';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Bacon Mockup';
    }
}
