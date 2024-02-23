<?php

class TeamManager extends AbstractManager
{
    public function findAllTeams()
    {
        $selectTeamsQuery = $this->db->prepare('SELECT * FROM teams');
        $selectTeamsQuery->execute();
        $teams_data = $selectTeamsQuery->fetchAll(PDO::FETCH_ASSOC);
        $teams_array = [];

        foreach ($teams_data as $team_data) {
            $team = new Team($team_data['name'], $team_data['description'], $team_data['logoId']);
            $team->setId($team_data['id']);
            $teams_array[] = $team;
        }

        return $teams_array;
    }

    public function findTeamById($id)
    {
        $selectTeamQuery = $this->db->prepare('SELECT * FROM teams WHERE id = ?');
        $selectTeamQuery->execute([$id]);
        $team_data = $selectTeamQuery->fetch(PDO::FETCH_ASSOC);

        if (!$team_data) {
            return null; // Team not found
        }

        $team = new Team($team_data['name'], $team_data['description'], $team_data['logoId']);
        $team->setId($team_data['id']);

        return $team;
    }

}
