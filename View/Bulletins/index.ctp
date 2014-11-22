<div id="BulletinsIndex">
    <h2>選舉公報</h2>
    <div class="paging"><?php echo $this->element('paginator'); ?></div>
    <table class="table table-bordered" id="BulletinsIndexTable">
        <tr>
            <th><?php echo $this->Paginator->sort('name', '名稱'); ?></th>
            <th><?php echo $this->Paginator->sort('count_elections', '選區數量'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($bulletins as $bulletin):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td>
                    <?php echo $this->Html->link($bulletin['Bulletin']['name'], array('action' => 'view', $bulletin['Bulletin']['id'])); ?>
                </td>
                <td>
                    <?php echo $bulletin['Bulletin']['count_elections']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="paging"><?php echo $this->element('paginator'); ?></div>
</div>
