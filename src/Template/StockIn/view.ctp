<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Stock In']), ['action' => 'edit', $stockIn->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Stock In']), ['action' => 'delete', $stockIn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockIn->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Stock In']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Stock In']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="stockIn col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($stockIn->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Product</th>
                        <td><?= $stockIn->has('product') ? $this->Html->link($stockIn->product->title, ['controller' => 'Products', 'action' => 'view', $stockIn->product->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($stockIn->id) ?></td>
                    </tr>
                                <tr>
                        <th>Quantity</th>
                        <td><?= $this->Number->format($stockIn->quantity) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($stockIn->created) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
