

<?php $__env->startSection('title', 'Contas'); ?>

<?php $__env->startSection('content'); ?>
<div class = "container mt-5" >
<div class = "row">
    <div class = "col-sm-11">
        <h2>Contas abertas</h2>
    </div>
    <div class = "col-sm-1">
    <a href="<?php echo e(route('contas.create')); ?>" class = "btn btn-success">Cadastrar</a> 
    </div>
</div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Valor total</th>
            <th scope="col">Valor restante</th>
            <th scope="col">Pessoas na mesa</th>
            <th scope="col">Divisão</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($conta->id); ?></td>
                <td><?php echo e($conta->cliente ? $conta->cliente->nome : 'N/A'); ?></td>
                <td><?php echo e(number_format($conta->valorTotal, 2, ',', '.')); ?></td>
                <td><?php echo e(number_format($conta->valorRestante, 2, ',', '.')); ?></td>
                <td><?php echo e($conta->quantPessoas); ?></td>
                <td><?php echo e(number_format($conta->divisao, 2, ',', '.')); ?></td>


                <td class="d-flex"><a href="<?php echo e(route('contas.edit', ['id' => $conta->id])); ?>" class ="btn btn-dark me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>

                <form action="<?php echo e(route('contas.destroy', ['id' => $conta->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class = "btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                </button>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Willian Gustavo\Documents\Projeto\instar\resources\views/contas/index.blade.php ENDPATH**/ ?>