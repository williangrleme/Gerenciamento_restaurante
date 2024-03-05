
<?php $__env->startSection('title', 'Cadastrar'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Abrir conta</h1>
    <hr>
    <form action="<?php echo e(route('contas.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" class="form-control selectpicker">
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>   
        </div>

        <div class="form-group">
            <label for="quantPessoas">Quantidade de pessoas:</label>
            <input type="number" class="form-control" name="quantPessoas" placeholder="N.º de pessoas na mesa">
        </div>

        <div class="form-group">
            <label for="valorTotal">Valor Total:</label>
            <input type="number" class="form-control" id="valorTotal" name="valorTotal" placeholder="Digite o valor total" oninput="updateValorRestante()">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Willian Gustavo\Documents\Projeto\instar\resources\views/contas/create.blade.php ENDPATH**/ ?>