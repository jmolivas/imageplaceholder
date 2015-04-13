<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceHolderInterface;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Interface ImagePlaceHolderInterface
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
interface PlaceHolderInterface
{
    /**
     * @return string
     */
    public function getPlaceHolder();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getLabel();
}
