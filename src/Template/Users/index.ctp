<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('userId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userPassword') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userNoPhone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userFname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userLName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userEmail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userRole') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->userId) ?></td>
                <td><?= h($user->userPassword) ?></td>
                <td><?= h($user->userNoPhone) ?></td>
                <td><?= h($user->userFname) ?></td>
                <td><?= h($user->userLName) ?></td>
                <td><?= h($user->userEmail) ?></td>
                <td><?= $this->Number->format($user->userRole) ?></td>
                <td><?= $this->Number->format($user->bookId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->userId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->userId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->userId], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userId)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
