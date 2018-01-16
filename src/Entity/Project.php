<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @var String 
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     *
     * @var String
     * @ORM\Column(type="string") 
     * 
     */
    private $comment;
    
    /**
     *
     * @var Date
     * @ORM\Column(type="datetime")
     */
    private $created_at;
   
    /**
     *
     * @var Date
     * @ORM\Column(type="datetime")
     */
    private $updated_at;
        
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setComment(string $comment) {
        $this->comment = $comment;
    }
    public function getComment() {
        return $this->comment;
    }
    public function setCreadtedAt($date) {
        $this->created_at = $date;
    }
    public function getCreadtedAt() {
        return $this->created_at;
    }
    public function setUpdatedAt($date) {
        $this->updated_at = $date;
    }
    public function getUpdatedAt() {
        return $this->updated_at;
    }
}
