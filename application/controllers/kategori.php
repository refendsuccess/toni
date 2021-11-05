<?php  

class Kategori extends CI_Controller{

	public function kenalpot()
	{
		$data['kenalpot'] = $this->model_kategori->
		  data_kenalpot()->result();
		  $this->load->view('templates/headers');
		  $this->load->view('templates/sidebar');
		  $this->load->view('kenalpot',$data);
		  $this->load->view('templates/footer');
	}

	public function variasi()
	{
		$data['variasi'] = $this->model_kategori->
		  data_variasi()->result();
		  $this->load->view('templates/headers');
		  $this->load->view('templates/sidebar');
		  $this->load->view('variasi',$data);
		  $this->load->view('templates/footer');
	}
	
	public function oli()
	{
		$data['oli'] = $this->model_kategori->
		  data_oli()->result();
		  $this->load->view('templates/headers');
		  $this->load->view('templates/sidebar');
		  $this->load->view('oli',$data);
		  $this->load->view('templates/footer');
	}
	public function velk()
	{
		$data['velk'] = $this->model_kategori->
		  data_velk()->result();
		  $this->load->view('templates/headers');
		  $this->load->view('templates/sidebar');
		  $this->load->view('velk',$data);
		  $this->load->view('templates/footer');
	}
	
	public function ban()
	{
		$data['ban'] = $this->model_kategori->
		  data_ban()->result();
		  $this->load->view('templates/headers');
		  $this->load->view('templates/sidebar');
		  $this->load->view('ban',$data);
		  $this->load->view('templates/footer');
	}
	

}
	
	
	

	
	
