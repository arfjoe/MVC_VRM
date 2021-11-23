<section>
<h3>Login</h3>
<?php $form = \App\core\form\Form::begin('', "post") ?>

<?= $form->field($model, 'login') ?>
<?= $form->field($model, 'password')->passwordField() ?>

<br>
<button type="submit" class="btn btn-primary">Login</button><br>
<p class="redirec_register">Pas encore inscrit ? C'est <a class="nav-link" href="/register">ici</a> que ça ce passe.</p>
<?= \app\core\form\Form::end() ?>
</section>
