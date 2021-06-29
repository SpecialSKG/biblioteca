<!-- {"keys": ["ctrl+b"], "command": "reindent", "args": {"single_line": false}} -->
<?php $this->load->view('Template/Header_Main') ;?>

<body id="page-top">

	
	<?php $this->load->view($view, $data_view) ;?>
	
	<?php $this->load->view('Template/Modal_Create') ;?>
	<!-- <?php// $this->load->view('Template/Modal_Update') ;?> -->

	<?php $this->load->view('Template/Footer_Main') ;?>