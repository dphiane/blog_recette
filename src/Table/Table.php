<?php

namespace App\Table;

use Exception;
use PDO;

abstract class Table{

    protected $pdo;
    protected $table = null;
    protected $class = null;

    public function __construct(PDO $pdo)
    {
        if ($this->table === null) {
            throw new Exception("La class " . get_class($this) . " n'a pas de propriété \$table");
        }
        if ($this->class === null) {
            throw new Exception("La class " . get_class($this) . " n'a pas de propriété \$class");
        }
        $this->pdo = $pdo;
    }

    public function getAll(): array
    {
        $query = $this->pdo->prepare("SELECT * FROM $this->table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create(array $data):int
    {
        $sqlFields=[];
        foreach($data as $key =>$value){
            $sqlFields[]="$key = :$key";
        }
        $query= $this->pdo->prepare("INSERT INTO {$this->table} SET " . implode(', ',$sqlFields));
        $ok=$query->execute($data);
        if($ok=== false){
            throw new Exception("Impossible de créer l'enregistrement dans la table {$this->table}");
        }
        return $this->pdo->lastInsertId();
    }

    public function update(array $data,int $id):int
    {
        $sqlFields = [];
        foreach ($data as $key => $value) {
            $sqlFields[] = "$key = :$key";
        }
        $query = $this->pdo->prepare("UPDATE {$this->table} SET " . implode(', ', $sqlFields) . " WHERE recipe_id = :id");
        $data['id'] = $id;
        $ok = $query->execute($data);
        if ($ok === false) {
            throw new Exception("Impossible de modifier l'enregistrement dans la table {$this->table}");
        }
        return $this->pdo->lastInsertId();
    }

    public function findById(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM " . $this->table . " WHERE recipe_id = :id");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        if ($result === false) {
            throw new Exception($this->table, $id);
        }
        return $result;
    }
}