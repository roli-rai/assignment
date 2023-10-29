        <?php
defined("BASEPATH") OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public $page_title = 'Assignment';
            public function __construct(){
                parent::__construct();
                $this->load->helper('url');
            }
                
        public function index($id=NULL){
            $data = array(
                'msg'=>'This is home page', 
                    'page_title'=>$this->page_title,
                    'id'=>$id);
                    $this->load->view('home.php', $data);
                }



            public function sign_in(){
                if($this->session->userdata('id')){ 
                redirect('/user/deshborad');
                    } else {
                    $data = array(
                        'msg'=>'This is sign in page', 
                            'page_title'=>$this->page_title);
                            if($this->input->method() === 'post'){
                                // Your Email field is invalid
                                //echo 'valid'; die;
                                $this->form_validation->set_rules("email", "Email", "trim|required");
                                $this->form_validation->set_rules("password", "Password", "trim|required");
                                if($this->form_validation->run() == false){
                                    
                                    // echo 'form invalid';
                                } else {
                                    // echo 'form is valid';
                                    $email = $this->input->post("email");
                                    $password = $this->input->post("password");
                        $where_arr = array('email'=>$email);
                        $users = $this->UserModel->check_field('users_table', $where_arr, "Id, Email, Password, Rol_id");
                        //echo '<pre>';
                            // print_r($deshboard);
                        // die;
                            if(count($users)>0){
                                        $user = $users[0];
                                        if($user['Password'] == $password){
                            // echo 'true'; die
                    // email and password is correct
                            $ses_data = array(
                                'id'=>$user['Id'],
                                'roll'=>$user['Rol_id']
                            );
                            $this->session->set_userdata($ses_data);

                        $this->session->set_flashdata('sucess', 'Login success');
                    
                        redirect('/user/deshboard');
                        } else {
                        $this->session->set_flashdata('error', 'Invalid Credentials!!!');
                    }
                    } else {
                        $this->session->set_flashdata('error', 'Invalid Credentials!!!');
                        }
                        }
                        }
                            $this->load->view('sign_in.php', $data);
                        
                        }
                    }


            public function deshboard(){ 
                if($this->session->userdata('id')){ 
                    $user_id = $this->session->userdata('id');
                    $where_arr = array('Id'=>$user_id);
                    $users = $this->UserModel->check_field('users_table', $where_arr);
                    if(count($users)>0){
                        $user =$users[0];
                        // echo '<pre>';
                        // print_r($user);
                        $data = array('user'=>$user, 'page_title'=>'deshboard Page');
                        $this->load->view('deshboard', $data);
                    } else{
                        redirect('/user/sign_in');
                    }
                } else {
                    redirect('/user/sign_in');
                }
        }


            public function logout(){
                $this->session->sess_destroy();
                    redirect('/user/sign_in');
                }



            public function profile(){
                if($this->session->userdata('id')){ 
                $user_id = $this->session->userdata('id');
                $where_arr = array('Id'=>$user_id);
                $users = $this->UserModel->check_field('users_table', $where_arr);
                if(count($users)>0){
                    $user =$users[0];
                    // echo '<pre>';
                    // print_r($user);
                    $data = array('user'=>$user, 'page_title'=>'Profile Page');
                    $this->load->view('profile', $data);
                } else{
                    redirect('/user/sign_in');
                }
            } else {
                redirect('/user/sign_in');
            }
        }
        
        }
        ?>