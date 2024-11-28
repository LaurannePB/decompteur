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
    private ?string $file_name;

    #[ORM\Column(length: 50)]
    private ?string $author;

    #[ORM\Column(length: 255)]
    private ?string $source_url;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $category_id;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status_id;

    #[ORM\Column]
    private ?DateTime $creation_date;

    /**
     * @return int|null
     */
    public function get_id(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return void
     */
    public function set_id(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function get_file_name(): ?string
    {
        return $this->file_name;
    }

    /**
     * @param string|null $file_name
     */
    public function set_file_name(?string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @return string|null
     */
    public function get_author(): ?string
    {
        return $this->author;
    }

    /**
     * @param string|null $author
     */
    public function set_author(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function get_source_url(): ?string
    {
        return $this->source_url;
    }

    /**
     * @param string|null $source_url
     */
    public function set_source_url(?string $source_url): void
    {
        $this->source_url = $source_url;
    }

    /**
     * @param int|null $category_id
     */
    public function set_category_id(?int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @return Category|null
     */
    public function get_category(): ?Category
    {
        return Category::tryFrom($this->category_id ?? -1);
    }

    /**
     * @param int|null $status_id
     */
    public function set_status_id(?int $status_id): void
    {
        $this->status_id = $status_id;
    }

    /**
     * @return Status|null
     */
    public function get_status(): ?Status
    {
        return Status::tryFrom($this->status_id ?? -1);
    }

    /**
     * @return DateTime|null
     */
    public function get_creation_date(): ?DateTime
    {
        return $this->creation_date;
    }

    /**
     * @param DateTime|null $creation_date
     */
    public function set_creation_date(?DateTime $creation_date): void
    {
        $this->creation_date = $creation_date;
    }


}