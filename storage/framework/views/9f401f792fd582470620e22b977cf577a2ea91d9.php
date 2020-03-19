

<?php $__env->startSection('titulo','Ordens de Serviços'); ?>

<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Lista de Ordens de Serviços</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Observação</th>
            <th>Assinatura</th>
            <th>Status</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
              <td><?php echo e($registro->id); ?></td>
              <td><?php echo e($registro->tipo); ?></td>
              <td><?php echo e($registro->observacao); ?></td>
              <td><?php echo e($registro->assinatura); ?></td>
              <td><?php echo e($registro->status); ?></td>
              <td><?php echo e($registro->data); ?></td>
              <td>
                <a class="btn deep-orange" href="<?php echo e(route('admin.ordens.editar',$registro->id)); ?>">Editar</a>
                <a class="btn red" href="<?php echo e(route('admin.ordens.deletar',$registro->id)); ?>">Deletar</a>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="<?php echo e(route('admin.ordens.adicionar')); ?>">Adicionar O.S</a>

    </div>
    <div class="row">
      
    </div>

  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>