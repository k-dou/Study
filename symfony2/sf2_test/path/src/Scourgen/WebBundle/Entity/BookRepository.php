<?php

namespace Scourgen\WebBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends EntityRepository
{
    public function getAllValidBookByTitle($title){
        return $this->findBy(array("tittle"=>$title));
    }
}