<div class="purchases-report">
    <h2><?= __('Purchases Report') ?></h2>

    <table>
        <thead>
            <tr>
                <th><?= __('Motorcycle Name') ?></th>
                <th><?= __('Supplier Name') ?></th>
                <th><?= __('Transaction Code') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Date') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($purchases as $purchase): ?>
            <tr>
                <td><?= h($purchase->motorcycles->name) ?></td>
                <td><?= h($purchase->suppliers->name) ?></td>
                <td><?= h($purchase->transaction_code) ?></td>
                <td><?= h($purchase->price) ?></td>
                <td><?= h($purchase->created) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>