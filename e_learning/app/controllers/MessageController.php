<?php
namespace Controllers;

use Models\Message;

class MessageController
{
    private $message;

    public function __construct($db)
    {
        $this->message = new Message($db);

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function sendMessageToTeacher($senderId, $receiverId, $body)
    {
            return $this->message->save($senderId, $receiverId, $body);
    }
    public function sendMessageToStudent($senderId, $receiverId, $messageBody)
    {
        return $this->message->saveStudent($senderId, $receiverId, $messageBody);
    }
    public function getMessagesByUserId($userId)
    {
        return $this->message->getMessagesByUserId($userId);
    }
    public function getUnreadMessagesCount($userId) {
        return $this->message->getUnreadMessagesCount($userId);
    }
    public function markAllMessagesAsRead($userId) {
        return $this->message->markAllMessagesAsRead($userId);
    }
    public function deleteMessage($id) {
        return $this->message->deleteMessage($id);
    }
}
