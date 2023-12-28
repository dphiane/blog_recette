<?php 

namespace App\Table;
use App\Model\User;
use Exception;
use PDO;

class UserTable extends Table{
    
    protected $table= "users";
    protected $class= User::class;

    public function findByEmail(string $email)
    {
    $query=$this->pdo->prepare("SELECT * FROM ". $this->table." WHERE email = :email");
    $query->execute(['email'=> $email]);
    $query->setFetchMode(\PDO::FETCH_CLASS,$this->class);
    $result= $query->fetch();
    if($result===false){
        throw new Exception("User non trouvé");
    }
    return $result;
    }
    
    public function isEmailTaken($email)
    {
        $query = "SELECT COUNT(*) AS count FROM $this->table WHERE email = :email";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }
    public function getNameAuthor($id)
    {
        $query = $this->pdo->prepare("SELECT CONCAT(users.name, ' ',users.last_name) as author_name FROM " .$this->table. " WHERE id = :id");
        $query->execute(['id' => $id]);
        $result = $query->fetch();

        if ($result === false) {
            throw new Exception("User non trouvé");
        }
        return ucwords($result['author_name']);
    }
}