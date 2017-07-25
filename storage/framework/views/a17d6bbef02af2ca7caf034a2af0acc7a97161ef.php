<?php echo e(Session::get('message')); ?>

<h1>Produtos</h1>

    <?php $__currentLoopData = $todosprodutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><a href="/produtos/<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?></a></h2>
        <p><?php echo e($produto -> descricao); ?></p>
        <a href="/produtos/<?php echo e($produto->id); ?>/edit">Editar</a>
        <form action="/produtos/<?php echo e($produto->id); ?>" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" name="name" value="Apagar">
        </form>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
