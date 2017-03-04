<?php

namespace AppBundle\Entity;

/**
 * Class Post
 * @package AppBundle\Entity
 */
class Post
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * Constructor
     *
     * @param string $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
