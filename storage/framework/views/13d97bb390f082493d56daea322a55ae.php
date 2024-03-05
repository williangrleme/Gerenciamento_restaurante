
<?php $__env->startSection('title', 'Cadastrar'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Novo cliente</h1>
    <hr>
    <form action="<?php echo e(route('clientes.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite um telefone">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Digite um email">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Willian Gustavo\Documents\Projeto\instar\resources\views/clientes/create.blade.php ENDPATH**/ ?>