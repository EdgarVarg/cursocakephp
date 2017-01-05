
<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
   <?= $this->Html->link('myApp',['controller' => 'Users', 'action' => 'index'],['class' => 'navbar-brand'])?>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
     

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><?= $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index'])?></li>
          <li><?= $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add'])?></li>
      
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>