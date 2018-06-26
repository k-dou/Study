<?php
/**
 * Created by PhpStorm.
 * User: k-dou
 * Date: 18-6-25
 * Time: 下午4:49
 */
namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller{
    /**
     * @return \Scourgen\WebBundle\Entity\UserRepository
     */
    public function getUserRepository(){
        return $this->getDoctrine()->getManager()->getRepository('ScourgenWebBundle:User');
    }

    /**
     * @return \Scourgen\WebBundle\Entity\BookRepository
     */
    public function getBookRepository(){
        return $this->getDoctrine()->getManager()->getRepository('ScourgenWebBundle:Book');
    }

}