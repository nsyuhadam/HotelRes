<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->roomId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->roomId], ['confirm' => __('Are you sure you want to delete # {0}?', $room->roomId)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->roomId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('RoomType') ?></th>
            <td><?= h($room->roomType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RoomDescription') ?></th>
            <td><?= h($room->roomDescription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RoomId') ?></th>
            <td><?= $this->Number->format($room->roomId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RoomPrice') ?></th>
            <td><?= $this->Number->format($room->roomPrice) ?></td>
        </tr>
    </table>
</div>
