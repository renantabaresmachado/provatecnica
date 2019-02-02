<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
    
<div class="tarefas index large-9 medium-8 columns content">
    <h3><?= __('Tarefas') ?> </h3>
    <table id="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
            </tr>
        </thead>
        <tbody >
            <?php foreach ($tarefas as $tarefa): ?>
            <tr style="cursor: move;" id="tarefa_<?=$tarefa->id?>">
                <td><?= $this->Number->format($tarefa->id) ?></td>
                <td><?= h($tarefa->titulo) ?></td>
                <td><?= $this->Number->format($tarefa->prioridade) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
