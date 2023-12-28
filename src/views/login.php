<?php

use App\Connection;
use App\Table\UserTable;
use App\Auth;

$errors = [];

if (Auth::isLoggedIn()) {
    header('Location: /home');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!empty($email) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $table = new UserTable(Connection::getPDO());
        try {
            $user = $table->findByEmail($email);
            if (password_verify($_POST['password'], $user->getPassword()) === true) {
                $_SESSION['auth'] = $user->getId();
                header('Location: /home');
                exit();
            } else {
                $errors['password'] = "Identifiant ou mot de passe incorrect";
            }
        } catch (Exception $e) {
            $errors['database'] = "Erreur lors de la recherche de l'utilisateur. Veuillez réessayer.";
            //journaliser l'erreur pour une analyse ultérieure
            error_log($e->getMessage());
        }
    }
}
?>
<?php if (isset($errors['password'])) : ?>
    <div class="alert alert-danger"><?= $errors['password'] ?></div>
<?php endif ?>

<?php if (isset($errors['database'])) : ?>
    <div class="alert alert-danger"><?= $errors['database'] ?></div>
<?php endif ?>

<div class="row justify-content-center">
    <div class="col-md-6 border border-secondary-subtle m-5 rounded">

        <form action="" class="px-4 py-3" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name='email' placeholder="email@exemple.com">
            </div>
            <div class="mb-3 ">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Mot de passe">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary ms-auto">Se connecter</button>
            </div>
            <a class="dropdown-item" href="/register">Créer un compte</a>
            <a class="dropdown-item" href="#">Mot de passe oublié ?</a>
        </form>

    </div>

</div>