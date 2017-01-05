<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="row">
<div class="col-md-12">
<!--
<nav class="navbar" id="actions-sidebar">
    <ul class="nav navbar-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
	<div class="page-header">
    <h3><?= __('Usuarios') ?></h3></div>
    <div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
               
      
       
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->email) ?></td>
              
             
               
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id],['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],['class' => 'btn btn-sm btn-warning']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id],['class' => 'btn btn-sm btn-danger'], ['confirm' => __('Estas seguro de eliminar este usuario? # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
          
            <?= $this->Paginator->prev('< ' . __('previo')) ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
         
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
</div>