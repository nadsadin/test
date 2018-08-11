<?php
require_once 'DB.php';
class Message{
    private $name;
    private $email;
    private $text;


    public function __construct($name, $email, $message){
        $this->name = $name;
        $this->email = $email;
        $this->text = $message;
    }

    /** @var DB $db */
    public function save($db){
        $stmt = $db->prepare("INSERT INTO Messages (name, email, text) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->name, $this->email, $this->text);
        $stmt->execute();
        $stmt->close();
    }
    public function html_render(){
        $html = "<div class='col-md-6 col-lg-4'>
            <div class='card card-message'>
                <div class='card-header'>{$this->name}</div>
                <div class='card-body'>
                    <div class='card-title'>{$this->email}</div>
                    <div class='card-text'>{$this->text}</div>
                </div>
            </div>
        </div>";
        return $html;
    }
    /** @var DB $db
     * @return Message[]
     */
    public static function all($db){
        $all_messages = array();
        $stmt = $db->prepare("SELECT name, email, text FROM Messages");
        $stmt->execute();
        $stmt->bind_result($name,$email,$text);
        while ($stmt->fetch()){
            $all_messages[] = new Message($name,$email,$text);
        }
        return $all_messages;
    }
}