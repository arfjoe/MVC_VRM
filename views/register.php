<section>
    <h1>Register</h1>
    <?php $form = \App\core\form\Form::begin('', "post") ?>
        <div class="row">
                <?= $form->field($model, 'login') ?> 
        </div>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password')->passwordField() ?>
        <?= $form->field($model, 'confirmPassword')->passwordField() ?>
        <button class="btn btn-success">Submit</button><br>
        <a href="/login">Déjà inscrit ?</a>
    <?php \App\core\form\Form::end() ?>
</section>
