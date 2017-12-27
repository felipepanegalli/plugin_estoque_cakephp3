<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($user->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Username</th>
                        <td><?= h($user->username) ?></td>
                    </tr>
                                                        <tr>
                        <th>Password</th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($user->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($user->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Active</th>
                        <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                     </tr>
                                        </table>
                                </div>
    </div>
</div>
