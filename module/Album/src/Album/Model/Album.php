<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 31.07.13
 * Time: 23:23
 * To change this template use File | Settings | File Templates.
 */

namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
        $this->artist = (isset($data['artist'])) ? $data['artist'] : null;
        $this->title = (isset($data['title'])) ? $data['title'] : null;
    }
}