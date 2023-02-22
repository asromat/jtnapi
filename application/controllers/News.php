<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_m");
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	// Beranda
	public function index()
	{
		// Test Ambil Infografis
		$this->load->model("infografis_m");
		
		$data['daerah'] = $this->data['daerah'];
		// test($this->news_m->getAll($this->data['daerah']['kode'],$this->input->post("limit"),$this->input->post("start")));
		$data['headline'] = $this->news_m->getHeadline();
		$data['hukum'] = $this->news_m->getCategory("hukum dan kriminalitas");
		$data['pendidikan'] = $this->news_m->getCategory("pendidikan");
		$data['olahraga'] = $this->news_m->getCategory("olahraga");
		$data['pemerintahan'] = $this->news_m->getCategory("pemerintahan");
		$data['gaya'] = $this->news_m->getCategory("Gaya Hidup");
		$data['infografis'] = $this->infografis_m->getAll();
		
		$data['footer_script'] = "footer/beranda";
		$this->template->load('template/main', 'tampilan/beranda', $data);
	}
	
	// Untuk Search kanal
	public function kanal()
	{
		$data['daerah'] = $this->data['daerah'];
		
		$data['kanal'] = $this->uri->segment("2");
		$data['headline'] = $this->news_m->getHeadline();
		$data['footer_script'] = "footer/search";
		$this->template->load('template/main', 'tampilan/search', $data);
	}

	// Untuk Search tag
	public function tag()
	{
		$data['daerah'] = $this->data['daerah'];
		
		$data['kanal'] = str_replace(["%20","-"],[" "," "],$this->uri->segment("2"));;
		$data['headline'] = $this->news_m->getHeadline();
		$data['footer_script'] = "footer/tag";
		$this->template->load('template/main', 'tampilan/search', $data);
	}

	// Untuk Search tag
	public function search()
	{
		$data['daerah'] = $this->data['daerah'];
		$katakunci = $_GET['keyword'];

		!isset($katakunci) ? redirect() : "";
		
		$data['kanal'] = $katakunci;
		$data['headline'] = $this->news_m->getHeadline();
		$data['footer_script'] = "footer/tag";
		$this->template->load('template/main', 'tampilan/search', $data);
	}
	
	// Untuk detail berita
	public function detail()
	{
		$data['daerah'] = $this->data['daerah'];
		//Cek URL Lama atau Terbaru
		$versionData = $this->fungsi->cekUrl();
		$data['data'] = $this->news_m->getDetail($versionData['id'])[0];
		// $data['footer_script'] = "footer/bera	nda";
		$data['headline'] = $this->news_m->getHeadline();
		$data['similar'] = $this->news_m->getSimilar("arema",$data['data']['catnews_id']);
		// test($data['similar']);
		$data['satukanal'] = $this->news_m->getSameCategory($data['data']['catnews_id']);
		$data['kategori'] = $this->news_m->getCategoryData("catnews_id",$data['data']['catnews_id'])[0]['catnews_title'];
		$data['editor'] = $this->fungsi->getProfile("editor",$data['data']['editor_id'])[0]['editor_name'];
		$this->template->load('template/main', 'tampilan/detail', $data);
		
	}
	
	// Load More Beranda
	public function loadMore()
	{
		$output = '';
		$data = $this->news_m->getAll($this->data['daerah']['kode'],$this->input->post("limit"),$this->input->post("start"));
		if ($data > 0) {
			foreach ($data as $key => $row) {
				$output .= '
				<a href="https://'.$_SERVER['HTTP_HOST'].'/baca/'.$row['news_id'].'/'.$this->fungsi->timeToStr("Ymd",$row['news_datepub']).'/'.$this->fungsi->timeToStr("his",$row['news_datepub']).'/'. $this->fungsi->convertToSlug($row['news_title']).'"
				<div class="item">
					<div class="imageWrapper">
						<img src="'.$this->fungsi->imageThumbnail($row['news_image_new'], "th").'" alt="image" class="imaged w100">
					</div>
					<div class="in">
						<div>
							<header class="text-primary fn80 text-uppercase font-weight-bold">
							</header>
							<span class="badge badge-warning bg-tia50000 text-uppercase mb-1 kater" id="kater">'.$row['news_subtitle'].'</span>
							<h3>'.$row['news_title'].'</h3>
							<div class="text-muted d-block fn60">
								<ion-icon name="time-outline"></ion-icon>'.$this->fungsi->timeAgo($row['news_datepub']).'</span>
							</div>
						</div>
					</div>
				</div>
				</a>
                ';
			}
		}
		echo $output;
	}

	// Load more category, tag, dll
	public function loadMoreCat()
	{
		$output = '';
		$data = $this->news_m->getCategory($this->input->post("kanal"),$this->input->post("limit"),$this->input->post("start"));
		if ($data > 0) {
			foreach ($data as $key => $row) {
				$output .= '
				<a href="'.base_url().'baca/'.$row['news_id'].'/'.$this->fungsi->timeToStr("Ymd",$row['news_datepub']).'/'.$this->fungsi->timeToStr("his",$row['news_datepub']).'/'. $this->fungsi->convertToSlug($row['news_title']).'"
				<div class="item">
					<div class="imageWrapper">
						<img src="'.$this->fungsi->imageThumbnail($row['news_image_new'], "th").'" alt="image" class="imaged w100">
					</div>
					<div class="in">
						<div>
							<header class="text-primary fn80 text-uppercase font-weight-bold">'.urldecode($this->input->post("kanal")).'
							</header>
							<h3>'.$row['news_title'].'</h3>
							<div class="text-muted d-block fn60">
							<ion-icon name="time-outline"></ion-icon>'.$this->fungsi->timeAgo($row['news_datepub']).'</span>
							</div>
						</div>
					</div>
				</div>
				</a>
                ';
			}
		}
		echo $output;
	}

	// Load more tag, dll
	public function loadMoreTag()
	{
		$output = '';
		$keyword = $this->input->post("keyword");
		$data = $this->news_m->getTag($keyword,$this->input->post("limit"),$this->input->post("start"));
		if (isset($data[0]['news_id'])) {
			foreach ($data as $key => $row) {
				$output .= '
				<a href="'.base_url().'baca/'.$row['news_id'].'/'.$this->fungsi->timeToStr("Ymd",$row['news_datepub']).'/'.$this->fungsi->timeToStr("his",$row['news_datepub']).'/'. $this->fungsi->convertToSlug($row['news_title']).'"
				<div class="item">
					<div class="imageWrapper">
						<img src="'.$this->fungsi->imageThumbnail($row['news_image_new'], "th").'" alt="image" class="imaged w100">
					</div>
					<div class="in">
						<div>
							<header class="text-primary fn80 text-uppercase font-weight-bold">'.urldecode($this->input->post("kanal")).'
							</header>
							<h3>'.$row['news_title'].'</h3>
							<div class="text-muted d-block fn60">
							<ion-icon name="time-outline"></ion-icon>'.$this->fungsi->timeAgo($row['news_datepub']).'</span>
							</div>
						</div>
					</div>
				</div>
				</a>
                ';
			}
		}
		echo $output;
	}
}
