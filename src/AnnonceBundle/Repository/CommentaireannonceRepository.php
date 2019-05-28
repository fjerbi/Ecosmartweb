<?php

namespace AnnonceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Commentaireannonce;
use AppBundle\Entity\Annonce;

class CommentaireannonceRepository extends EntityRepository
{

    /**
     * get annonce commentaireannonce
     *
     * @param integer $annonce_id
     *
     * @return array
     */
    public function getPostComments($annonce_id){
        return $this->getEntityManager()
            ->createQuery(
                "SELECT c, u.username
       FROM AppBundle:Commentaireannonce c
       JOIN c.user u
       WHERE c.annonce = :id"
            )
            ->setParameter('id', $annonce_id)
            ->getArrayResult();
    }

}
