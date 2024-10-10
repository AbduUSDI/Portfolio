<?php
namespace Models;

use PDO;

class Message
{
    private $conn;
    private $table_name = "messages";

    private $id;
    private $sender_id;
    private $receiver_id;
    private $content;
    private $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function setSenderId($sender_id)
    {
        $this->sender_id = $sender_id;
    }

    public function setReceiverId($receiver_id)
    {
        $this->receiver_id = $receiver_id;
    }

    public function setBody($body)
    {
        $this->body= $body;
    }

    public function save($senderId, $receiverId, $body)
    {
        $query = "INSERT INTO " . $this->table_name . " (sender_id, receiver_id, body, created_at) VALUES (:sender_id, :receiver_id, :body, NOW())";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':sender_id', $senderId, PDO::PARAM_INT);
        $stmt->bindParam(':receiver_id', $receiverId, PDO::PARAM_INT);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);

        return $stmt->execute();
    }
    public function saveStudent($senderId, $receiverId, $body)
    {
        $query = "INSERT INTO " . $this->table_name . " (sender_id, receiver_id, body, created_at) VALUES (:sender_id, :receiver_id, :body, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':sender_id', $senderId);
        $stmt->bindParam(':receiver_id', $receiverId);
        $stmt->bindParam(':body', $body);

        return $stmt->execute();
    }
    public function getMessagesByUserId($userId)
    {
        $query = "SELECT messages.*, users.username as sender_username 
                  FROM " . $this->table_name . " 
                  JOIN users ON messages.sender_id = users.id
                  WHERE receiver_id = :user_id
                  ORDER BY created_at DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUnreadMessagesCount($userId)
    {
        $query = "SELECT COUNT(*) as unread_count FROM messages WHERE receiver_id = :user_id AND read_status = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['unread_count'];
    }
    public function markAllMessagesAsRead($userId)
    {
        $query = "UPDATE messages SET read_status = 1 WHERE receiver_id = :user_id AND read_status = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        return $stmt->execute();
    }
    public function deleteMessage($id) 
    {
        $query = "DELETE from messages WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
