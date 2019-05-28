<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Participation
 * @ORM\Entity
 */

class Participation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evenement")
     * @ORM\JoinColumn(name="idevents", referencedColumnName="id")
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="idparticipant", referencedColumnName="id")
     */

    private $participant;


}