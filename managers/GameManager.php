<?php
class GameManager extends AbstractManager
{
    public function findAllGames()
    {
        $selectGamesQuery = $this -> db -> prepare ('SELECT games.*, teams.id AS team_id FROM games JOIN teams ON games.team_1 = team.id');
        $selectGamesQuery -> execute ();
        $games_data = $selectGamesQuery -> fetchAll (PDO::FETCH_ASSOC);
        $games_array = [];

        foreach ( $games_data as $key => $game_data){
            $first =new Team ('');
            $second = new Team ();
            $winner = new Team ();
            $game = new Game ($game_data['name'], date ('Y-m-d H:i:s'), $first, $second, $winner);
            $game -> setId ($game_data ['id']);
            $game_array[]= $game;

        }
        return $games_array;
}
}