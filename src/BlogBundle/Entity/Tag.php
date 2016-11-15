<?php

namespace BlogBundle\Entity;

/**
 * Tag
 */
class Tag
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $newsId;

    /**
     * @var string
     */
    private $tag;


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
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return Tag
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return int
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * @var \BlogBundle\Entity\News
     */
    private $news;


    /**
     * Set news
     *
     * @param \BlogBundle\Entity\News $news
     *
     * @return Tag
     */
    public function setNews(\BlogBundle\Entity\News $news = null)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return \BlogBundle\Entity\News
     */
    public function getNews()
    {
        return $this->news;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $relations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->relations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add relation
     *
     * @param \BlogBundle\Entity\Relation $relation
     *
     * @return Tag
     */
    public function addRelation(\BlogBundle\Entity\Relation $relation)
    {
        $this->relations[] = $relation;

        return $this;
    }

    /**
     * Remove relation
     *
     * @param \BlogBundle\Entity\Relation $relation
     */
    public function removeRelation(\BlogBundle\Entity\Relation $relation)
    {
        $this->relations->removeElement($relation);
    }

    /**
     * Get relations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelations()
    {
        return $this->relations;
    }
}
