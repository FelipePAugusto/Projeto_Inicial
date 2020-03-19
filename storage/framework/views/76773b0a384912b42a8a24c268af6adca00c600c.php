

<?php $__env->startSection('titulo','Ordem de Serviço'); ?>

<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Adicionar Ordem de Serviço</h3>
    <div class="row">
      <form class="" action="<?php echo e(route('admin.ordens.salvar')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo $__env->make('admin.ordens._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>