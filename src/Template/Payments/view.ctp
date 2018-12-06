<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->paymentId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->paymentId], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->paymentId)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->paymentId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PaymentId') ?></th>
            <td><?= $this->Number->format($payment->paymentId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookId') ?></th>
            <td><?= $this->Number->format($payment->bookId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PaymentDate') ?></th>
            <td><?= h($payment->paymentDate) ?></td>
        </tr>
    </table>
</div>
