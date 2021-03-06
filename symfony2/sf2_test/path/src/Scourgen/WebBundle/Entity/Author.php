<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22
 * Time: 10:02
 */

namespace Scourgen\WebBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * @ORM\Entity(repositoryClass="AuthorRepository")
 * @ORM\Table(name="author")
 *
 */
class Author{

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
     * @OneToMany(targetEntity="Book",mappedBy="author")
     */
    protected $books;

    /**
     * @OneToMany(targetEntity="Category",mappedBy="author")
     */
    private $categories;

    public function __construct(){
        $this->books = new ArrayCollection();
        $this->categories = new ArrayCollection();
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
     * @return Author
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
     * Add books
     *
     * @param \Scourgen\WebBundle\Entity\Book $books
     * @return Author
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

    /**
     * Add categories
     *
     * @param \Scourgen\WebBundle\Entity\Category $categories
     * @return Author
     */
    public function addCategory(\Scourgen\WebBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Scourgen\WebBundle\Entity\Category $categories
     */
    public function removeCategory(\Scourgen\WebBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
