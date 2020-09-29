<?php
class Comment
{
    private $id;
    private $username;
    private $text;
    private $time;
    private $date;

    public function __construct($id, $username, $text, $time, $date)
    {
        $this->id = $id;
        $this->username = $username;
        $this->text = $text;
        $this->time = $time;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getDate()
    {
        return $this->date;
    }
}