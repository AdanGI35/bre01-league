<?php

class Router
{
    public function handleRequest(array $get): void
    {
        $bc = new PageController();

        if (!isset($get["route"])) {
            $bc->home();
        } else {

            $route = $get["route"];

            if ($route === "games") {
                $bc->teams();
            } elseif ($route === "team") {
                $bc->team();
            } elseif ($route === "players") {
                $bc->players();
            } else {
     
                $bc->home();
            }
        }
    }
}
