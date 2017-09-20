<?php

namespace InstagramAPI\Media;

class Dimensions
{
    /** @var int */
    protected $_width;

    /** @var int */
    protected $_height;

    /**
     * Constructor.
     *
     * @param int $width
     * @param int $height
     */
    public function __construct(
        $width,
        $height)
    {
        $this->_width = $width;
        $this->_height = $height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Swaps the axes.
     *
     * @return self
     */
    public function swapAxes()
    {
        return new self($this->_height, $this->_width);
    }
}
