<?php 
    class Home extends CI_Controller {
    
    public function index(){
        $this->load->view('partisi/head');
        $this->load->view('partisi/navigasi');
        $this->load->view('partisi/header');
        $this->load->view('home_v');
        $this->load->view('partisi/about');
        $this->load->view('partisi/contact');
        $this->load->view('partisi/footer');
        $this->load->view('partisi/modal');
        $this->load->view('partisi/js');
    }
    public function profile(){
        $this->load->view('partisi/head');
        $this->load->view('partisi/navigasi');
        //$this->load->view('partisi/header');
        $this->load->view('profile_v');
        //$this->load->view('partisi/about');
       // $this->load->view('partisi/contact');
        $this->load->view('partisi/footer');
        //$this->load->view('partisi/modal');
        $this->load->view('partisi/js');
    }
    public function contact(){
        $this->load->view('partisi/head');
        $this->load->view('partisi/navigasi');
        //$this->load->view('partisi/header');
        //$this->load->view('profile_v');
        //$this->load->view('partisi/about');
        $this->load->view('partisi/contact');
        $this->load->view('partisi/footer');
        //$this->load->view('partisi/modal');
        $this->load->view('partisi/js');
    }
    public function portfolio(){
        $this->load->view('partisi/head');
        $this->load->view('partisi/navigasi');
        //$this->load->view('partisi/header');
        $this->load->view('portfolio_v');
        //$this->load->view('partisi/about');
        //$this->load->view('partisi/contact');
        $this->load->view('partisi/footer');
        //$this->load->view('partisi/modal');
        $this->load->view('partisi/js');
    }
    public function about(){
        $this->load->view('partisi/head');
        $this->load->view('partisi/navigasi');
        //$this->load->view('partisi/header');
        //$this->load->view('portfolio_v');
        $this->load->view('partisi/about');
        //$this->load->view('partisi/contact');
        $this->load->view('partisi/footer');
        //$this->load->view('partisi/modal');
        $this->load->view('partisi/js');
    }
 }
 ?>