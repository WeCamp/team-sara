<?php
declare(strict_types=1);

namespace Bacon\Service\Crawler\Dto;

use Bacon\Service\Crawler\Bags\RepositoryBag;
use Bacon\Service\Crawler\Bags\UserBag;

class Organization
{
    protected $blog;
    protected $description;
    protected $id;
    protected $location;
    protected $members;
    protected $name;
    protected $repos;
    protected $url;

    static public function createFromJson(string $json)
    {
        $object = json_decode($json);

        return self::createFromObject($object);
    }

    static public function createFromObject(\stdClass $object)
    {
        $organization = new self;
        $organization->setBlog($object->blog)
            ->setDescription($object->description)
            ->setId($object->id)
            ->setLocation($object->location)
            ->setName($object->name)
            ->setUrl($object->url);

        return $organization;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * @param mixed $blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return UserBag
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param UserBag $members
     */
    public function setMembers(UserBag $members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return RepositoryBag
     */
    public function getRepos()
    {
        return $this->repos;
    }

    /**
     * @param RepositoryBag $repos
     */
    public function setRepos(RepositoryBag $repos)
    {
        $this->repos = $repos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

}
