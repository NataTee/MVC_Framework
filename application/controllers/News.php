<!--
Name: Natalia Ksenz
Final project
Purpose: Creation of a full featured MVC website

Filename: News.php
-->

<?php

defined('BASEPATH') OR exit('Forbidden');

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

        $data['news_item'] = $this->parser->parse('templates/news_item_template', $news_item, TRUE);

        if (empty($data['news_item'])) {
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('news/view');
        $this->load->view('templates/footer');
    }
}
