<?php

class Game 
{
    private ? int $id = null;

    public function __construct(private string $name, private string $date, private string $team_1, private string $team_2, private string $winner)
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
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTeam_1(): string
    {
        return $this->team_1;
    }

    /**
     * @param string $team_1
     */
    public function setTeam_1(string $team_1): void
    {
        $this->team_1 = $team_1;
    }
        /**
     * @return string
     */
    public function getTeam_2(): string
    {
        return $this->team_2;
    }

    /**
     * @param string $team_2
     */
    public function setTeam_2(string $team_2): void
    {
        $this->team_2 = $team_2;
    }
            /**
     * @return string
     */
    public function getWinner(): string
    {
        return $this->winner;
    }

    /**
     * @param string $winner
     */
    public function setWinner(string $winner): void
    {
        $this->winner = $winner;
    }
}
