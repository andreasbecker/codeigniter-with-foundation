<!doctype html>
<html class="no-js" lang="<?= $this->lang->lang()?>">
  <head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo (isset($head['description']) AND $head['description']!='') ? $head['description'] : '';?>">
    <?php if (!is_production()): ?>
        <meta name="robots" content="noindex,nofollow'">
    <?php endif ?>
    
    <title><?php echo (isset($head['title']) AND $head['title']!='') ? $head['title'].' | ' : '';?><?php echo $this->config->item('projectname') ?></title>
    
    <link rel="stylesheet" href="<?=base_url();?>public/css/app.css" />
    <script src="<?=base_url();?>public/bower_components/modernizr/modernizr.js"></script>

        <script>
            var ProjectSettings = {
                baseUrl: '<?= base_url(); ?>',
                languageCode: '<?= $this->lang->lang() ?>'
            }
        </script>

  </head>
  <body>