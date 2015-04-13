<?php
/**
 * @file JMOlivas\ImagePlaceHolder\PlaceHolder\PlaceHolder;
 */

namespace JMOlivas\ImagePlaceHolder\PlaceHolder;

/**
 * Class ImagePlaceHolder
 * @package JMOlivas\ImagePlaceHolder\PlaceHolder
 */
abstract class PlaceHolder implements PlaceHolderInterface
{
    use PlaceHolderTrait;

    /**
     * @var int $width
     */
    protected $width;

    /**
     * @var int $height
     */
    protected $height;

    /**
     * @var array $options
     */
    protected $options;

    /**
     * @param int   $width
     * @param int   $height
     * @param array $options
     */
    public function __construct($width = null, $height = null, $options = [])
    {
        $this->width = ($width!=null)?$width:rand(120, 1024);
        $this->height = ($height!=null)?$height:rand(90, 768);
        $this->options = $options;
    }
}
