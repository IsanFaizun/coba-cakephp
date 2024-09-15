<div class="sales-report">
    <h2><?= __('Sales Report') ?></h2>

    <table>
        <thead>
            <tr>
                <th><?= __('Motorcycle Name') ?></th>
                <th><?= __('Customer Name') ?></th>
                <th><?= __('Transaction Code') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Date') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= h($sale->motorcycles->name) ?></td>
                <td><?= h($sale->customers->name) ?></td>
                <td><?= h($sale->transaction_code) ?></td>
                <td><?= h($sale->price) ?></td>
                <td><?= h($sale->created) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>