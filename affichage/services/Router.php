<?php

class Router
{
    public function handleRequest() : void
    {
        if (!isset($_GET["route"]) || $_GET["route"] === "")
        {
            $article = $_GET["id"] ?? null;
            
            $ctrl = new BlogController();
            $ctrl->index();
        }
        else if ($_GET["route"] === "articles")
        {
            $ctrl = new BlogController();
            $ctrl->article();
        }
        else
        {
            $ctrl = new BlogController();
            $ctrl->notFound();
        }
    }
}

?>