
<?php $__env->startSection('title', 'Editar'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar cliente</h1>
    <hr>
    <form action="<?php echo e(route('clientes.update', ['id' => $clientes->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome" value="<?php echo e($clientes->nome); ?>">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite um telefone" value="<?php echo e($clientes->telefone); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Digite um email" value="<?php echo e($clientes->email); ?>">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Willian Gustavo\Documents\Projeto\instar\resources\views/clientes/edit.blade.php ENDPATH**/ ?>