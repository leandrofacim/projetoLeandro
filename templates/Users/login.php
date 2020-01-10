<div class="users form">
<h1>Página de login</h1>
<?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('usuario') ?>
        <?= $this->Form->control('senha') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>