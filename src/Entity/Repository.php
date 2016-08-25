<?php
declare(strict_types=1);

namespace Bacon\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * @OGM\Node(label="Repository")
 */
final class Repository
{
    /**
     * @OGM\GraphId()
     * @var int
     */
    protected $id;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $name;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $fullName;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $blog;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $description;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $url;

    /**
     * @OGM\Property(type="string")
     * @var string
     */
    private $location;

    /**
     * @OGM\Relationship(type="CONTRIBUTES_TO", direction="OUTGOING", targetEntity="Bacon\Entity\User", collection=true)
     * @var ArrayCollection|User[]
     */
    private $usersContributeToRepository;

    /**
     * @OGM\Relationship(type="WATCHES", direction="OUTGOING", targetEntity="Bacon\Entity\User", collection=true)
     * @var ArrayCollection|User[]
     */
    private $usersWatchRepository;

    /**
     * @OGM\Relationship(type="STARS", direction="OUTGOING", targetEntity="Bacon\Entity\User", collection=true)
     * @var ArrayCollection|User[]
     */
    private $usersStarRepository;

    public function __construct()
    {
        $this->usersContributeToRepository = new ArrayCollection();
        $this->usersWatchRepository = new ArrayCollection();
        $this->usersStarRepository = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getBlog(): string
    {
        return $this->blog;
    }

    /**
     * @param string $blog
     */
    public function setBlog(string $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }
}
