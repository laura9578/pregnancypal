<?php
namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $connection)
    {
        $this->clients->attach($connection);
    }

    public function onMessage(ConnectionInterface $from, $sentMessage)
    {
        $userInfo = json_decode($sentMessage);
        foreach($this->clients as $client)
        {
            $client->send("$userInfo->user : $userInfo->message");
        }
    
    }

    public function onClose(ConnectionInterface $connection)
    {

    }

    public function onError(ConnectionInterface $connection, \Exception $e)
    {

    }
}
?>