<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Stock']), ['action' => 'edit', $stock->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Stock']), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Stock']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Stock']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="stock col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($stock->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Product</th>
                        <td><?= $stock->has('product') ? $this->Html->link($stock->product->title, ['controller' => 'Products', 'action' => 'view', $stock->product->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($stock->id) ?></td>
                    </tr>
                                <tr>
                        <th>Decimal</th>
                        <td><?= $this->Number->format($stock->quantity) ?></td>
                    </tr>
                                <tr>
                        <th>Unit Price</th>
                        <td><?= $this->Number->format($stock->unit_price) ?></td>
                    </tr>
                                <tr>
                        <th>Unit Cost</th>
                        <td><?= $this->Number->format($stock->unit_cost) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($stock->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($stock->modified) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
