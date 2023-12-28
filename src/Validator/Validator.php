<?php

namespace App\Validator;

class Validator
{
    private $data;
    private $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function required():self
    {
        foreach ($this->data as $key => $value) {
            if (empty($value)) {
                $this->errors[$key] = "Le champ $key est requis";
            }
        }
        return $this;
    }

    public function validateLengthBetween(array $fields, int $min, int $max)
    {
        foreach ($fields as $field) {
            // Vérifie si le champ existe dans les données
            if (array_key_exists($field, $this->data)) {
                $value = $this->data[$field];

                // Vérifie si la longueur est en dehors de la plage spécifiée
                if (strlen($value) < $min || strlen($value) > $max) {
                    $this->errors[$field] = "Ce champ doit faire un minimum de $min et un maximum de $max caractères.";
                }
            } else {
                // Champ non trouvé dans les données
                $this->errors[$field]='Champ non trouvé dans les données';
                exit();
            }
        }
        // Toutes les validations ont réussi
        return $this;
    }

    public function minLength(array $fields, int $min)
    {
        foreach ($fields as $field) {
            // Vérifie si le champ existe dans les données
            if (array_key_exists($field, $this->data)) {
                $value = $this->data[$field];

                // Vérifie si la longueur est en dehors de la plage spécifiée
                if (strlen($value) < $min) {
                    $this->errors[$field] = "Ce champ doit faire un minimum de $min caractères";
                }
            } else {
                // Champ non trouvé dans les données
                $this->errors[$field] = 'Champ non trouvé dans les données';
                exit();
            }
        }
        // Toutes les validations ont réussi
        return $this;
    }

    public function isValidUrl(array $fields)
    {
        foreach ($fields as $field) {
            if (array_key_exists($field, $this->data)) {
                $value = $this->data[$field];
                // Filtre avec FILTER_VALIDATE_URL
                if (filter_var($value, FILTER_VALIDATE_URL) === false) {
                    $this->errors[$field] = "Le champ $field n'est pas une URL valide";
                }
            }
        }
        return $this;
    }

    public function validateSelectValue($fields, $allowedValues)
    {
        foreach($fields as $field){
            if (array_key_exists($field, $this->data)) {
                $value = $this->data[$field];
                // Vérifie si la valeur est parmi les valeurs autorisées
                if (!in_array($value, $allowedValues)) {
                    $this->errors[$field] = "La valeur sélectionnée pour $field n'est pas valide";
                }
            }
        }
        return $this;
    }

    public function validPassword(string $password){
        // Au moins une lettre majuscule
        $uppercase = preg_match('/[A-Z]/', $password);

        // Au moins une lettre minuscule
        $lowercase = preg_match('/[a-z]/', $password);

        // Au moins un caractère spécial
        $specialChar = preg_match('/[^a-zA-Z0-9]/', $password);

        // Longueur minimale du mot de passe
        $minLength = strlen($password) >= 8; // Vous pouvez ajuster cette valeur selon vos besoins

        // Vérifier toutes les conditions
        if ($uppercase && $lowercase && $specialChar && $minLength) {
            return $this; // Le mot de passe est valide
        } else {
            $this->errors["password"] = "Le mot de passe n'est pas valide";
        }
    }

    public function addError($error, $msg)
    {
    $this->errors[$error]= $msg;
    return $this;    
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
