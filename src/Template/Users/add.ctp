<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="row">
<div class="col-md-6 col-md-offset-3">
<!--
<nav class="navbar" id="actions-sidebar">
    <ul class="nav navbar-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
    <div class="page-header">
        <h2>Crear Usuario</h2>
    </div>
    <?= $this->Form->create($user) ?>
    <fieldset>
        
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario']]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
