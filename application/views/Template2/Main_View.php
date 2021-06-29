<!-- {"keys": ["ctrl+b"], "command": "reindent", "args": {"single_line": false}} -->
<?php $this->load->view('Template2/Header_Main') ;?>
<body>
	
	<?php $this->load->view($view, $data_view) ;?>
	
	<?php $this->load->view('Template2/Footer_Main') ;?>