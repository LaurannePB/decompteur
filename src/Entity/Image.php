<?php

namespace App\Entity;

use App\Enum\Category;
use App\Enum\Status;
use App\Repository\ImageRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255)]
    private ?string $fileName;

    #[ORM\Column(length: 50)]
    private ?string $author;

    #[ORM\Column(length: 255)]
    private ?string $sourceUrl;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $categoryId;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $statusId;

    #[ORM\Column]
    private ?DateTime $creationDate;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return void
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string|null $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string|null $sourceUrl
     */
    public function setSourceUrl(?string $sourceUrl): void
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @param int|null $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return Category::tryFrom($this->categoryId ?? -1);
    }

    /**
     * @param int|null $statusId
     */
    public function setStatusId(?int $statusId): void
    {
        $this->statusId = $statusId;
    }

    /**
     * @return Status|null
     */
    public function getStatus(): ?Status
    {
        return Status::tryFrom($this->statusId ?? -1);
    }

    /**
     * @return DateTime|null
     */
    public function getCreationDate(): ?DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime|null $creationDate
     */
    public function setCreationDate(?DateTime $creationDate): void
    {
        $this->creationDate = $creationDate;
    }


}