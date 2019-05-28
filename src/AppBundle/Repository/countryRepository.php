<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Annonce;
use AppBundle\Entity\Country;
use Doctrine\ORM\Query;

class countryRepository extends EntityRepository
{

    /**
     * get all posts
     *
     * @return array
     */
    public function findAllPosts()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT *, 
         FROM AppBundle:Annonce a
  '
            )
            ->getArrayResult();
    }

    /**
     * get one by id
     *
     * @param integer $id
     *
     * @return array
     */
    public function findOneById($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT a, u.username
       FROM AppBundle:Annonce
       a JOIN a.user u
        WHERE a.id = id"
            )
            ->setParameter('id', $id)
            ->getArrayResult();
    }


    /**
     * get one by id
     *
     * @param integer $id
     *
     * @return object or null
     */
    public function findAnnonceByid($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT a
       FROM AppBundle:Annonce
       a WHERE a.id = :id"
            )
            ->setParameter('id', $id)
            ->getOneOrNullResult();
    }

    public function findLastProducts()
    {
        return $this->createQueryBuilder("annonce")
            ->andWhere("annonce.likes > '0'")

            ->orderBy("annonce.id", "desc")
            ->getQuery()
            ->execute();
    }

    public function findProductBySearchKey($key, $maxResults = null){
        $products = $this->createQueryBuilder('a')
            ->select('a')
            ->leftJoin('a.createur','c')

            ->where('a.titre LIKE :key')

            ->setParameter('key', "%".$key."%");
        if($maxResults != null){
            $products = $products
                ->setMaxResults($maxResults);
        }
        return $products->getQuery()->getResult();
    }
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a
                FROM AppBundle:Annonce a
                WHERE a.titre LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }
    public function findannonceByTopLikes()
    {


    }
}
