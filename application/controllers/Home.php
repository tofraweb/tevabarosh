<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  // public function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model('catalog_model','',TRUE);
  // }

  public function index()
  {
      $this->load->model('catalog_model','',TRUE);
      $this->load->model('blog_model','',TRUE);
      $data1['posts'] = $this->blog_model->get_all_posts();
      $data['bird'] = $this->catalog_model->random_catalog_array(2,1);
      $data['garden'] = $this->catalog_model->random_catalog_array(4,1);
      $data['field'] = $this->catalog_model->random_catalog_array(1,1);
      $data['tree'] = $this->catalog_model->random_catalog_array(5,1);
      $data['best_succulents'] = $this->catalog_model->random_catalog_array(4,3);
      $data['best_birds'] = $this->catalog_model->random_catalog_array(2,3);
      $data['latest_photos'] = $this->catalog_model->random_catalog_array(0,5);
      $this->load->view('inc/header');
      $this->load->view('bootstrap/frontpage_view', $data);
      $this->load->view('inc/footer',$data1);
  }

}

?>
