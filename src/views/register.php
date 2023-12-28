<?php

use App\Connection;
use App\Model\User;
use App\Table\UserTable;
use App\Validator\Validator;
use App\Auth;

if (Auth::isLoggedIn()) {
    header('Location: /home');
    exit;
}

$errors = [];
$userTable = new UserTable(Connection::getPDO());
$user = new User;
$v = new Validator($_POST);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_POST = filter_input_array(INPUT_POST, [
        'name' => FILTER_SANITIZE_SPECIAL_CHARS,
        'last_name' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => FILTER_UNSAFE_RAW
    ]);

    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];

    $v  ->required()
        ->validateLengthBetween(['name', 'last_name', 'email'], 2, 255);

    $emailTaken = $userTable->isEmailTaken($email);
    if ($emailTaken) {
        $v->addError('email', 'Email déja utilisé');
    }
    $v->validPassword($password);
    $errors = $v->getErrors();

    if (empty($errors)) {
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $data = [
            'email' => $email,
            'name' => $name,
            'last_name' => $lastName,
            'password' => $passwordHashed
        ];
        $userTable->create($data);
        $user->setEmail($email);
        $_SESSION['auth'] = $user->getEmail();
        header('Location: /home');
        exit();
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-6 border border-secondary-subtle m-5 rounded">

        <form action="" class="px-4 py-3" method="post">

            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name='email' placeholder="email@exemple.com" value="<?php echo htmlspecialchars($email ?? ''); ?>">
                <?php if (isset($errors['email'])) : ?>
                    <div class="alert alert-danger"><?= $errors['email'] ?></div>
                <?php endif ?>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="name" name='name' placeholder="Mon prénom" value="<?php echo htmlspecialchars($name ?? ''); ?>">
                <?php if (isset($errors['name'])) : ?>
                    <div class="alert alert-danger"><?= $errors['name'] ?></div>
                <?php endif ?>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Nom de famille</label>
                <input type="text" class="form-control" id="last_name" name='last_name' placeholder="Nom de famille" value="<?php echo htmlspecialchars($last_name ?? ''); ?>">
                <?php if (isset($errors['last_name'])) : ?>
                    <div class="alert alert-danger"><?= $errors['last_name'] ?></div>
                <?php endif ?>
            </div>

            <div class="mb-3 ">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Mot de passe">
                <?php if (isset($errors['password'])) : ?>
                    <div class="alert alert-danger"><?= $errors['password'] ?></div>
                <?php endif ?>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary ms-auto">Créer un compte</button>
            </div>

            <a class="dropdown-item" href="/login">Déja un compte ?</a>
        </form>

    </div>

</div>