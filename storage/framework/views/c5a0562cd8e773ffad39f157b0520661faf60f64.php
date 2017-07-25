<h1>Editar produto</h1>
<form action="/produtos/<?php echo e($detailpage->id); ?>" method="POST">
    <input type="text" name="nome" value="<?php echo e($detailpage->nome); ?>" placeholder="Nome">
    <?php echo e(($errors->has('nome')) ? $errors->first('nome') : ''); ?><br>
    <textarea name="descricao" rows="8" cols="40" placeholder="Descricao"><?php echo e($detailpage->descricao); ?></textarea>
    <?php echo e(($errors->has('descricao')) ? $errors->first('descricao') : ''); ?><br>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="submit" name="name" value="Salvar">
</form>
