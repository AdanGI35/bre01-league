<?php

class Team
{
    private ?int $id = null;


    public function __construct(private string $name, private string $description,private  ?int $logoId = null)
    {
 
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
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
    public function setName(string $name): void
    {
        $this->name = $name;
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
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getLogoId(): ?int
    {
        return $this->logoId;
    }

    /**
     * @param int|null $logoId
     */
    public function setLogoId(?int $logoId): void
    {
        $this->logoId = $logoId;
    }
}
