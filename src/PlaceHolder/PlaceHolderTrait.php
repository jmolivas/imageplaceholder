<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceHolderTrait;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class PlaceHolderTrait
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
trait PlaceHolderTrait
{

    /**
     * @return string
     */
    public function getPlaceHolder()
    {
        return sprintf(
          '<img src="%s" alt="%s" />',
          $this->getUrl(),
          $this->getLabel()
        );
    }
}
