<?php

namespace BlogBundle\Entity;

/**
 * Relation
 */
class Relation
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
     * @var int
     */
    private $tagId;


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
     * @return Relation
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
     * Set tagId
     *
     * @param integer $tagId
     *
     * @return Relation
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return int
     */
    public function getTagId()
    {
        return $this->tagId;
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
     * @return Relation
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
     * @var \BlogBundle\Entity\Tag
     */
    private $tag;


    /**
     * Set tag
     *
     * @param \BlogBundle\Entity\Tag $tag
     *
     * @return Relation
     */
    public function setTag(\BlogBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \BlogBundle\Entity\Tag
     */
    public function getTag()
    {
        return $this->tag;
    }
}
