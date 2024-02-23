<?php
class PlayerPerformanceManager extends AbstractManager
{
    public function findAllPlayerPerformances()
    {
        $selectPerformancesQuery = $this->db->prepare('SELECT * FROM player_performances');
        $selectPerformancesQuery->execute();
        $performances_data = $selectPerformancesQuery->fetchAll(PDO::FETCH_ASSOC);
        $performances_array = [];

        foreach ($performances_data as $performance_data) {
            $performance = new PlayerPerformance(
                $performance_data['playerId'],
                $performance_data['gameId'],
                $performance_data['points'],
                $performance_data['assists']
            );
            $performance->setId($performance_data['id']);
            $performances_array[] = $performance;
        }

        return $performances_array;
    }

    public function findPlayerPerformanceById($id)
    {
        $selectPerformanceQuery = $this->db->prepare('SELECT * FROM player_performances WHERE id = ?');
        $selectPerformanceQuery->execute([$id]);
        $performance_data = $selectPerformanceQuery->fetch(PDO::FETCH_ASSOC);

        if (!$performance_data) {
            return null; // Player performance not found
        }

        $performance = new PlayerPerformance(
            $performance_data['playerId'],
            $performance_data['gameId'],
            $performance_data['points'],
            $performance_data['assists']
        );
        $performance->setId($performance_data['id']);

        return $performance;
    }

}
