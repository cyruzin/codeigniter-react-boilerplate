<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter with React Boilerplate</title>
</head>
<body>

<div id="Contributing" class="App"></div>

<?php if(!empty($this->session->flashdata('js_asset'))): ?>
    <?php echo $this->session->flashdata('js_asset'); ?>
<?php endif; ?>

</body>
</html>