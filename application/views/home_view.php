<?php $this->load->view('partials/begin_view'); ?>


<?php if (is_production()) {
	echo 'production';
} ?>
<?php if (is_development()) {
	echo 'development';
} ?>
<?php if (is_staging()) {
	echo 'staging';
} ?>


<ul class="language-switch">
	<li><a href="<?= base_url().$this->lang->switch_uri('de') ?>" class="lang-de">Deutsch</a></li>
	<li><a href="<?= base_url().$this->lang->switch_uri('en') ?>" class="lang-en">English</a></li>
</ul>

<?php $this->load->view('partials/end_view'); ?>

    


