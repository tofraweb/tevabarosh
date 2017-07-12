<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('blog_model','',TRUE);
    $this->load->model('user','',TRUE);
    $this->load->library('user_agent');
  }

  public function index()
  {

  }

  public function blog_timeline()
  {
    $all_posts = $this->blog_model->get_all_posts();

    $data['posts'] = $all_posts;
    $this->load->view('inc/header');
    $this->load->view('bootstrap/blog_timeline_view', $data);
    $this->load->view('inc/footer');
  }

  public function blog_item($id)
  {
    $post = $this->blog_model->get_post($id);
    $author = $this->user->get_user($post->author);
    $session_data = $this->session->userdata('logged_in');

    $data['post'] = $post;
    $data['author'] = $author;
    $data['logged_in'] = $session_data;
    $this->load->view('inc/header');
    $this->load->view('bootstrap/blog_item_view', $data);
    $this->load->view('inc/footer');
  }

}

?>
