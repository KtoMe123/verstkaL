<div class="detail">
    <div class="detail__name"><?= $context['name'] ?></div>
    <div class="detail__description"><?= $context['description'] ?></div>

    <? if ($context['features'] && count($context['features']) > 0): ?>

        <?php include "list.php"; ?>
    <? else: ?>
        <? include 'empty.php'; ?>

<? endif; ?>
    <div class="detail-seo"><?= $context['seo_text'] ?></div>
</div>