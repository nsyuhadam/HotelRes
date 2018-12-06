<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->userId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->userId], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userId)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->userId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('UserPassword') ?></th>
            <td><?= h($user->userPassword) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserNoPhone') ?></th>
            <td><?= h($user->userNoPhone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserFname') ?></th>
            <td><?= h($user->userFname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserLName') ?></th>
            <td><?= h($user->userLName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserEmail') ?></th>
            <td><?= h($user->userEmail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($user->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserRole') ?></th>
            <td><?= $this->Number->format($user->userRole) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookId') ?></th>
            <td><?= $this->Number->format($user->bookId) ?></td>
        </tr>
    </table>
</div>
