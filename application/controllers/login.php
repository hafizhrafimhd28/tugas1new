<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_anggota', 'Mod_buku' ));
        
    }
public function index(){
 $this->load->view('formlogin/login_data');   
}
 public function ceklogin(){
    
        if(isset($_POST['proses'])) {
            $user = $this->input->post('username',true);
            $pass = $this->input->post('password',true);
            $cek = $this->Mod_login->auth($user,$pass);
            $hasil = count($cek);
            if($hasil > 0){
                $pelogin = $this->db->get_where('anggota',array('username' => $user, 'password' => $pass))->row();
                if($pelogin->level == 'admin'){
                 redirect('dashboard');   
             }elseif($pelogin->level == 'anggota'){
                redirect('dasbot');
             }
                //redirect('login/beranda');
            }else{
                redirect('login/index');
            }
                
}
}
    //end function index

    public function view_anggota()
    {
        $total = $this->Mod_anggota->totalRows('anggota');
        $config['base_url']   = base_url('login/view_anggota/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();
        $data['anggota']    = $this->Mod_anggota->getDataAnggota($limit, $offset);
        $data['title']      = 'Data Anggota';

        // $data['anggota'] = $this->Mod_anggota->getAll()->result();
        $this->load->view('formlogin/view_anggota', $data);
    }

    public function search_anggota()
    {
        $total = $this->Mod_anggota->totalRows('anggota');
        $config['base_url']   = base_url('login/search_anggota/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();

       $cari = $this->input->post('cari_anggota');
       $data['title']   = 'Data Anggota';
       $data['anggota'] = $this->Mod_anggota->searchAnggota($cari, $limit, $offset);
       $this->load->view('formlogin/view_anggota', $data);
    }

    public function search_buku()
    {
        $total = $this->Mod_buku->totalRows('buku');
        $config['base_url']   = base_url('login/search_buku/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();

        $cari = $this->input->post('cari_buku');
        $data['title']   = 'Data Buku';
        $data['buku'] = $this->Mod_buku->searchBuku($cari, $limit, $offset);
        $this->load->view('formlogin/view_buku', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    
}