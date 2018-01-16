<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MeRepository")
 */
class Me
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @var String;
     * 
     * @ORM\Column(type="string")
     */
    private $firstname;
    /**
     *
     * @var String
     * @ORM\Column(type="string")
     */
    private $lastname;
    /**
     *
     * @var number
     * @ORM\Column(type="string")
     */
    private $age;
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
    public function setFirstname(string $firstame) {
        $this->firstname = $name;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function setAge(number $age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setCreatedAt($date) {
        $this->created_at = $date;
    }
    public function getCreatedAt() {
        return $this->created_at;
    }
    public function setUpdatedAt($date) {
        $this->updated_at = $date;
    }
    public function getUpdatedAt($date) {
        return $this->updated_at;
    }
            
}
