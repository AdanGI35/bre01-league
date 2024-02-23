<?php
class PlayerManager extends AbstractManager
{
    public function findAllPlayers()
    {
        $selectPlayersQuery = $this->db->prepare('SELECT * FROM players');
        $selectPlayersQuery->execute();
        $players_data = $selectPlayersQuery->fetchAll(PDO::FETCH_ASSOC);
        $players_array = [];

        foreach ($players_data as $player_data) {
            $player = new Player($player_data['nickname'], $player_data['bio'], $player_data['portraitId'], $player_data['teamId']);
            $player->setId($player_data['id']);
            $players_array[] = $player;
        }

        return $players_array;
    }

    public function findPlayerById($id)
    {
        $selectPlayerQuery = $this->db->prepare('SELECT * FROM players WHERE id = ?');
        $selectPlayerQuery->execute([$id]);
        $player_data = $selectPlayerQuery->fetch(PDO::FETCH_ASSOC);

        if (!$player_data) {
            return null; // Player not found
        }

        $player = new Player($player_data['nickname'], $player_data['bio'], $player_data['portraitId'], $player_data['teamId']);
        $player->setId($player_data['id']);

        return $player;
    }

}
