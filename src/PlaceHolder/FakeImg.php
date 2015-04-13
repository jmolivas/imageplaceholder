<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\FakeImg;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class FakeImg
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class FakeImg extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://fakeimg.pl/%sx%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'fakeimg';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Fake Images';
    }
}
