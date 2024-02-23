<?php

class Player
{
    private ?int $id = null;


    public function __construct(private string $nickname, private string $bio, private ?int $portraitId = null, private ?int $teamId = null)
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
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return int|null
     */
    public function getPortraitId(): ?int
    {
        return $this->portraitId;
    }

    /**
     * @param int|null $portraitId
     */
    public function setPortraitId(?int $portraitId): void
    {
        $this->portraitId = $portraitId;
    }

    /**
     * @return int|null
     */
    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    /**
     * @param int|null $teamId
     */
    public function setTeamId(?int $teamId): void
    {
        $this->teamId = $teamId;
    }
}
