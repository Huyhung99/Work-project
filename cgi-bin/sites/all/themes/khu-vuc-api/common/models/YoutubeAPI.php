<?php


namespace common\models;


class YoutubeAPI
{
    private $key;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
    }
    public function __construct()
    {
        $this->setKey('');
    }
}
