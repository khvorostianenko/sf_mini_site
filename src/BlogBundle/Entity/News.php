<?php

namespace BlogBundle\Entity;

/**
 * News
 */
class News
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;
    

    /**
     * @var \DateTime
     */
    private $createdAt;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return News
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelations()
    {
        return $this->relations;
    }

    private $categoryId;

    /**
     * @param \Doctrine\Common\Collections\Collection $relations
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;
    }

    /**
     * @return mixed
     */
    public function getcategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $newses;


    /**
     * Add relation
     *
     * @param \BlogBundle\Entity\News_to_category $relation
     *
     * @return News
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

    /**
     * Add newse
     *
     * @param \BlogBundle\Entity\Comment $newse
     *
     * @return News
     */
    public function addNewse(\BlogBundle\Entity\Comment $newse)
    {
        $this->newses[] = $newse;

        return $this;
    }

    /**
     * Remove newse
     *
     * @param \BlogBundle\Entity\Comment $newse
     */
    public function removeNewse(\BlogBundle\Entity\Comment $newse)
    {
        $this->newses->removeElement($newse);
    }

    /**
     * Get newses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNewses()
    {
        return $this->newses;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;


    /**
     * Add comment
     *
     * @param \BlogBundle\Entity\Comment $comment
     *
     * @return News
     */
    public function addComment(\BlogBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \BlogBundle\Entity\Comment $comment
     */
    public function removeComment(\BlogBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @var \BlogBundle\Entity\Category
     */
    private $categories;


    /**
     * Set categories
     *
     * @param \BlogBundle\Entity\Category $categories
     *
     * @return News
     */
    public function setCategories(\BlogBundle\Entity\Category $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \BlogBundle\Entity\Category
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;


    /**
     * Add tag
     *
     * @param \BlogBundle\Entity\Tag $tag
     *
     * @return News
     */
    public function addTag(\BlogBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \BlogBundle\Entity\Tag $tag
     */
    public function removeTag(\BlogBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}
