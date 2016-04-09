<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->data['page_title'] = 'Berita Terbaru!';
		
		$this->load->model('news_model');
		$news = $this->news_model->get_news();
		
		$this->data['berita'] = $news;
		
		$this->load->view('news', $this->data);
	}
}
