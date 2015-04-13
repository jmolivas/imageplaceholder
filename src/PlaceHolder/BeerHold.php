<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\BeerHold;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class BeerHold
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
class BeerHold extends PlaceHolder
{

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(
          'http://beerhold.it/%s/%s',
          $this->width,
          $this->height
        );
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'beerholdit';
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return 'Beerhold.it';
    }
}
