<form action="" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">Nom de la recette</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($name ?? ''); ?>" id="name" name="name">
        <?php if (isset($errors['name'])) : ?>
            <p class="text-danger"><?= $errors['name'] ?></p>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Choisissez une categorie</label>
        <select class="form-control <?php isset($errors['category']) ? 'is-invalid' : ''; ?>" id="category" name="category">
            <option value="">Selectionner une catégorie</option>

            <?php if (isset($category)) : ?>
                <option value="<?= $category ?>" selected><?= $category ?></option>
            <?php endif ?>

            <?php foreach ($categories as $cat) : ?>
                <option value="<?= $cat ?>"><?= $cat ?></option>
            <?php endforeach ?>

        </select>
        <?php if (isset($errors['category'])) : ?>
            <p class="text-danger"><?= $errors['category'] ?></p>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Lien URL d'une image</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($image ?? ''); ?>" name="image" id="image" value="<?= $image ?? '' ?>">
        <?php if (isset($errors['image'])) : ?>
            <p class="text-danger"><?= $errors['image'] ?></p>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" id="instructions" name="instructions" style="height: 300px"><?php echo htmlspecialchars($instructions ?? ''); ?></textarea>
        <label for="instructions">Ajouter les étapes de la recette</label>
        <?php if (isset($errors['instructions'])) : ?>
            <p class="text-danger"><?= $errors['instructions'] ?></p>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" id="ingredients" name="ingredients" style="height: 300px"><?php echo htmlspecialchars($ingredients ?? ''); ?></textarea>
        <label for="ingredients">Ajouter la liste des ingrédients</label>
        <?php if (isset($errors['ingredients'])) : ?>
            <p class="text-danger"><?= $errors['ingredients'] ?></p>
        <?php endif; ?>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary ms-auto">Ajouter</button>
    </div>
</form>