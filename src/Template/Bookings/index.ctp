<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $bookings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookings index large-9 medium-8 columns content">
    <h3><?= __('Bookings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookDays') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roomId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?= $this->Number->format($booking->bookId) ?></td>
                <td><?= h($booking->bookDate) ?></td>
                <td><?= $this->Number->format($booking->bookDays) ?></td>
                <td><?= $this->Number->format($booking->userId) ?></td>
                <td><?= $this->Number->format($booking->roomId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $booking->bookId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->bookId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->bookId], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->bookId)]) ?>
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
