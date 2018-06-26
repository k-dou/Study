<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22
 * Time: 14:57
 */

namespace Scourgen\WebBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\ManyToMany;


/**
 * @ORM\Entity(repositoryClass="CategoryRepository")
 * @ORM\Table(name="category")
 *
 */
class Category{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $name;

    /**
     * @ManyToOne(targetEntity="Author",inversedBy="categories")
     * @JoinColumn(name="author_id",referencedColumnName="id")
     */
    protected $author;

    /**
     * @OneToMany(targetEntity="Category",mappedBy="parent")
     */
    private $children;

    /**
     * @ManyToOne(targetEntity="Category",inversedBy="children")
     * @JoinColumn(name="parent_id",referencedColumnName="id")
     */
    private $parent;

    /**
     * @ManyToMany(targetEntity="Book",mappedBy="categories")
     */
    private $books;

    public function __construct(){
        $this->children = new ArrayCollection();
        $this->books = new ArrayCollection();

    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param integer $name
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
     * @return integer 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set author
     *
     * @param \Scourgen\WebBundle\Entity\Author $author
     * @return Category
     */
    public function setAuthor(\Scourgen\WebBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Scourgen\WebBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Add children
     *
     * @param \Scourgen\WebBundle\Entity\Category $children
     * @return Category
     */
    public function addChild(\Scourgen\WebBundle\Entity\Category $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Scourgen\WebBundle\Entity\Category $children
     */
    public function removeChild(\Scourgen\WebBundle\Entity\Category $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Scourgen\WebBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\Scourgen\WebBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Scourgen\WebBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add books
     *
     * @param \Scourgen\WebBundle\Entity\Book $books
     * @return Category
     */
    public function addBook(\Scourgen\WebBundle\Entity\Book $books)
    {
        $this->books[] = $books;

        return $this;
    }

    /**
     * Remove books
     *
     * @param \Scourgen\WebBundle\Entity\Book $books
     */
    public function removeBook(\Scourgen\WebBundle\Entity\Book $books)
    {
        $this->books->removeElement($books);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooks()
    {
        return $this->books;
    }
}
