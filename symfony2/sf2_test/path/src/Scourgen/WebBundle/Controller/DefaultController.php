<?php

namespace Scourgen\WebBundle\Controller;

use Doctrine\Common\Util\Debug;
use Scourgen\WebBundle\Entity\Book;
use Scourgen\WebBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use symfony\Component\HttpFoundation\JsonResponse;
use symfony\Component\HttpFoundation\RedirectResponse;
use symfony\Component\HttpFoundation\Response;
use Scourgen\WebBundle\Controller\BaseController;
use Symfony\Component\Security\Acl\Exception\Exception;

class DefaultController extends BaseController
{
    /**
     * @Route("/book/show/{id}")
     * @ParamConverter("book",class="ScourgenWebBundle:Book")
     */

    public function showBookAction(Book $book){
        $query = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT u FROM ScourgenWebBundle:User u');
        Debug::dump($query->getResult());
        exit;
        return new Response($book->getTittle());
    }
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        //user表中添加数据
//        $user = new User();
//        $user -> setAge(19);
//        $user -> setEmail('aaaa@foxmail.com');
//        $user -> setPassword('aaaaaa');
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $em->persist($user);
//        $em->flush();

        $em = $this->getDoctrine()->getManager();
        $this->get('dateabase_connection')->fetchAll("select * from book where book.id = 1");

        $em->getConnection()->beginTransction();

        try{
            $book2 = $this->getBookRepository()
                ->findOneBy(array('id'=>2))
                ->setPPrice(23);

            $em->persist($book2);
            $em->getConnection()->commit();
        }catch (Exception $e){
            $em->getConnection()->rollback();
        }

        $em->transctional(function($em){
            $book2 = $em->getRepository('ScourgenWebBundle:Book')->findOneBy(array('id'=>2));
            $book2->setPrice(23);
            $em->persist($book2);
        });
        /** @var $user \scourgen\WebBundle\Entity\User  */
        $user = $em->getRepository('ScourgenWebBundle:User')->findOneBy(array('id'=>1));
//        $books = $this->getBookRepository()
//            ->findBy(
//                array("tittle"=>"book1"),
//                array("price"=>"DESc")
//            );
        //动态构造函数
//        $books = $this->getBookRepository()
//            ->findByTittle("book2");
        $books = $this->getBookRepository()
            ->getAllValidBookByTitle('book1');

        echo $books[0]->getPrice();


//        foreach($user->getBooks() as $book){
//            echo $book->getTittle();
//        }

//        $book1 = new Book();
//        $book1->setTittle("book1")->setPrice(10)->addUser($user);
//
//        $book2 = new Book();
//        $book2->setTittle("book2")->setPrice(20)->addUser($user);

        $book3 = new Book();
        $book3->setTittle("book3")->setPrice(30);

        $book2 = $this->getBookRepository()
            ->findOneBy(array('id'=>2));
        $book2->setPrice(23);
//
//        $em->persist($book1);
        $em->persist($book2);
        $em->persist($book3);

//        $em->remove($user);
        $em->flush();
        return array('name' => $name);
    }
}
