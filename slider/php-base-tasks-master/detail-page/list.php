
    <div class="detail-features features">
        <? foreach ($context['features'] as $feature): ?>
        <div class="features-item">
            <div class="features-item__title"><?= $feature['title'] ?></div>
            <?php if(!empty($feature['description'])): ?>
                <div class="features-item__description"><?= $feature['description'] ?></div>
            <? endif; ?>
        </div>
        <? endforeach; ?>
    </div>
