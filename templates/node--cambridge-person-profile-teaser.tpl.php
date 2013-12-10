<?php
$url = $node_url;
$read_more = t('Read more');
?>
<?php if ($teaser) : ?>

<div class="campl-content-container person-profile-teaser-item <?php print $classes; ?> " <?php print $attributes; ?>>

    <div class="campl-horizontal-teaser campl-teaser clearfix">

    <!-- use a two column 9/3 split for the top part of the person profile layout -->
        <div class="campl-column9">
            <div class="campl-content-container campl-horizontal-teaser-txt">
                <?php print render($title_prefix); ?>
                <h3><a href="<?php print $url; ?>"><?php print $title; ?></a></h3>
                <?php print render($title_suffix); ?>

                <?php if ($content['field_person_positions']) : ?>
                    <?php print render($content['field_person_positions']); ?>
                <?php endif; ?>

                <?php if ($content['field_website']) : ?>
                    <p>
                        <!-- this field is always output as "personal website" - setting configured in content type display mode -->
                        <?php print render($content['field_website']); ?>
                    </p>
                <?php endif; ?>
                <?php if ($content['field_telephone_number']): ?>
                    <?php print render($content['field_telephone_number']); ?>
                <?php endif; ?>
                <?php if ($content['field_email_address']): ?>
                    <?php print render($content['field_email_address']); ?>
                <?php endif; ?>

                <div style="padding: 10px 0;">
                <a href="<?php print $url; ?>" class="campl-primary-cta"><?php print $read_more; ?></a>
                </div>
            </div>
        </div>
        <div class="campl-column3">
            <div class="campl-content-container campl-listing-img">
                <?php print render($content['field_person_picture']); ?>
            </div>
        </div>

    </div>
</div>
<?php endif; ?>
