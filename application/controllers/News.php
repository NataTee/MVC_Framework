<?php
class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        // get the stories by from the model
        $data['title'] = 'News archive';
        $news['news'] = $this->news_model->get_news();

        $data['news'] = $this->parser->parse('templates/news_template', $news, TRUE);

        $this->load->view('templates/header', $data);
        $this->load->view('news/index');
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL) {
        // get the stories by from the model
        $data['title'] = 'News archive';
        $news_item = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['news_item'] = $this->parser->parse('templates/news_item_template', $news_item, TRUE);

        $this->load->view('templates/header', $data);
        $this->load->view('news/view');
        $this->load->view('templates/footer');
    }
}
