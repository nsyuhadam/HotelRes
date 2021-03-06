<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->bookId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->bookId], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->bookId)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookings view large-9 medium-8 columns content">
    <h3><?= h($booking->bookId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('BookId') ?></th>
            <td><?= $this->Number->format($booking->bookId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookDays') ?></th>
            <td><?= $this->Number->format($booking->bookDays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($booking->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RoomId') ?></th>
            <td><?= $this->Number->format($booking->roomId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookDate') ?></th>
            <td><?= h($booking->bookDate) ?></td>
        </tr>
    </table>
</div>
