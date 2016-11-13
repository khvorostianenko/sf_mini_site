<?php

namespace BlogBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    private $relations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->relations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $relations
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;
    }

    /**
     * Add relation
     *
     * @param \BlogBundle\Entity\News_to_category $relation
     *
     * @return Category
     */
    public function addRelation(\BlogBundle\Entity\News_to_category $relation)
    {
        $this->relations[] = $relation;

        return $this;
    }

    /**
     * Remove relation
     *
     * @param \BlogBundle\Entity\News_to_category $relation
     */
    public function removeRelation(\BlogBundle\Entity\News_to_category $relation)
    {
        $this->relations->removeElement($relation);
    }
}
