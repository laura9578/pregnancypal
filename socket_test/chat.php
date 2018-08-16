<?php
//include('server.php');
namespace Pregancypal;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

// require_once '../vendor/autoload.php';

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $online;
    protected $history = array();
    protected $avatars;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);

        foreach($this->history as $message)
        {
            $users = $this->getOnlineUsers();
            $response = json_encode(array(
                "user" => $message->user, 
                "text"=>$message->text, 
                "date"=>$message->date,
                "type"=>$message->type, 
                "avatar"=>$message->avatar,  
                "online" =>$users
            ));
            $conn->send($response);
        }
    }

    public function onMessage(ConnectionInterface $from, $msg) {

        $test = json_decode($msg);
        switch ($test->type) {
            case 'connection':
                $this->online[$from->resourceId] =  $test->user;
                $this->avatars[$test->user] = $test->avatar;
                $users = $this->getOnlineUsers();
                foreach($this->clients as $client)
                {
                    $response = json_encode(array(
                        "user" => null, 
                        "text"=>null, 
                        "date"=> null, 
                        "type"=>$test->type,
                        "online" =>$users
                    ));
                    $client->send($response);
                }
                break;
            case 'chatroom':
                if(count($this->history) >= 5)
                {
                    array_shift($this->history);
                }
                array_push($this->history, $test);
                $users = $this->getOnlineUsers();
                foreach($this->clients as $client)
                {
                    $response = json_encode(array(
                        "user" => $test->user, 
                        "text"=>$test->text, 
                        "date"=>$test->date,
                        "type"=>$test->type,
                        "avatar"=>$test->avatar, 
                        "online" =>$users
                    ));
                    $client->send($response);
                }
                break;
            case 'dm':
                $client = $this->getClientByUser($test->to);
                if($client != null)
                {
                    $response = json_encode(array(
                        "user" => $test->user, 
                        "text"=>$test->text, 
                        "date"=>$test->date,
                        "type"=>$test->type, 
                        "userto"=>$test->to
                    ));
                    $client->send($response);
                    $from->send($response);
                }
                else
                {
                    $response = json_encode(array(
                        "user" => 'SYSTEM', 
                        "text"=>$test->to . ' is not online.', 
                        "date"=>$test->date,
                        "type"=>$test->type, 
                        "userto"=>$test->user
                    ));
                    $from->send($response);
                }
                break;
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        $disconnectedId = $conn->resourceId;
        unset($this->online[$disconnectedId]);
        foreach($this->clients as $client)
            {
                $users = $this->getOnlineUsers();
                $response = json_encode(array(
                    "user" => null, 
                    "text"=>null, 
                    "online" =>$users, 
                    "type"=>'connection',
                    "date"=> null
                ));
                $client->send($response);
            }
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }

    private function getOnlineUsers(){
        $test2 = [];
        foreach($this->online as $connection => $connection_value)
        {
            $avatar = $this->avatars[$connection_value];
            $test2[$connection_value] = $avatar;
        }

        return $test2;
    }

    private function getClientByUser($username){
        $userResponseId = '';
        foreach($this->online as $connection => $connection_value)
        {
            if($connection_value == $username){
                $userResponseId = $connection;
            }
        }

        foreach($this->clients as $client)
        {
            if($client->resourceId == $userResponseId)
            {
                return $client;
            }
        }

    }
}