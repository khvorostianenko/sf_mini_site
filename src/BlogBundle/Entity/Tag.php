<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\TagRepository")
 */
class Tag
{

    /**
     * @ORM\ManyToOne(targetEntity="News", inversedBy="tags")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id")
     */
    private $news;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="news_id", type="integer")
     */
    private $newsId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
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
}
