<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php
  // We hide the comments and links now so that we can render them later.
  hide($content['comments']);
  hide($content['links']);
  ?>

  <div class="content campl-content-container"<?php print $content_attributes; ?>>
    <div class="campl-listing-item profile-listing clearfix">

      <!-- use a two column 9/3 split for the top part of the person profile layout -->
      <div class="campl-column9">
        <div class="campl-content-container campl-listing-txt">

          <?php if ($content['field_person_positions']) : ?>
            <?php print render($content['field_person_positions']); ?>
          <?php endif; ?>

          <?php if ($content['field_website']) : ?>
            <p>
              <!-- this field is always output as "personal website" - setting configured in content type display mode -->
              <?php print render($content['field_website']); ?>
            </p>
          <?php endif; ?>
        </div>
      </div>

      <div class="campl-column3">
        <div class="campl-content-container campl-listing-img">
          <?php print render($content['field_person_picture']); ?>
        </div>
      </div>
    </div>

    <?php if ($content['field_telephone_number'] || $content['field_email_address'] || $content['field_publications']) : ?>
      <h2>Contact Information</h2>
      <?php if ($content['field_telephone_number']): ?>
        <?php print render($content['field_telephone_number']); ?>
      <?php endif; ?>
      <?php if ($content['field_email_address']): ?>
        <?php print render($content['field_email_address']); ?>
      <?php endif; ?>
      <?php if ($content['field_publications']): ?>
        <?php print render($content['field_publications']); ?>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($content['field_research_interests']): ?>
      <h2>Research Interests</h2>
      <?php print render($content['field_research_interests']); ?>
    <?php endif; ?>

    <?php if ($content['field_research_projects']): ?>
      <h2>Recent Research Projects</h2>
      <?php print render($content['field_research_projects']); ?>
    <?php endif; ?>

    <?php if ($content['field_published_works']): ?>
      <h2>Published Works</h2>
      <?php print render($content['field_published_works']); ?>
    <?php endif; ?>

    <!-- If anything left to render, render after specific field rendering -->
    <?php print render($content); ?>

  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
