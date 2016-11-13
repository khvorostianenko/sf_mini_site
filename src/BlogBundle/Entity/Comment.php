<?php

namespace BlogBundle\Entity;

/**
 * Comment
 */
class Comment
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
    private $message;


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
     * @return Comment
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
     * Set message
     *
     * @param string $message
     *
     * @return Comment
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
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
     * @return Comment
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
}
