<?php
namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
    protected $clients;

    function _construct()
    {

    }

    public function onOpen(ConnectionInterface $connection)
    {

    }

    public function onMessage(ConnectionInterface $from, $sentMessage)
    {
        echo $message;
    }

    public function onClose(ConnectionInterface $connection)
    {

    }

    public function onError(ConnectionInterface $connection, \Exception $e)
    {

    }
}
?>