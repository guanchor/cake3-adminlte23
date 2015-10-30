<?php if( !empty($mainmenu) ) : ?>
    <?php foreach( $mainmenu as &$item ) : ?>
        <li class="<?= $item['active'] ? 'active' : '' ?>  <?= empty($item['submenu']) ? '' : 'treeview' ?>">
            <a href="<?= $this->Url->build( $item['controller'] ) ?>">
                <i class="fa <?= $item['iconclass'] ?>"></i>
                <span><?= __( $item['label'] ) ?></span>
                <?php if( !empty($item['submenu']) ) : ?>
                    <i class="fa fa-angle-left pull-right"></i>
                <?php endif ?>
            </a>
            <?php if( !empty($item['submenu']) ) : ?>
                <ul class="treeview-menu">
                    <?php foreach( $item['submenu'] as &$subitem ) : ?>
                        <li class="<?= $subitem['active'] ? 'active' : '' ?>">
                            <a href="<?= $this->Url->build( $subitem['controller'] ) ?>"><i class="fa <?= $subitem['iconclass'] ?>"></i> <?= __( $subitem['label'] ) ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </li>
    <?php endforeach ?>
<?php endif ?>
