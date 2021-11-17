<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<div class="pagination d-flex" aria-label="<?= lang('Pager.pageNavigation') ?>">
    <?php if ($pager->hasPreviousPage()) : ?>
        <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
            <span class="prev"></span>
        </a>
    <?php endif ?>
    <div class="paginationItens d-flex">
        <?php foreach ($pager->links() as $link) : ?>
            <a href="<?= $link['uri'] ?>" <?= $link['active'] ? 'class="active"' : '' ?>><?= $link['title'] ?></a>
        <?php endforeach ?>
    </div>
    <?php if ($pager->hasNext()) : ?>
        <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
            <span class="next"></span>
        </a>
    <?php endif;?>
</div>
