<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

     public function login()
    {
        $this->load->view('user/login');
    }

     public function register_user()
    {
        $this->load->view('user/register_user');
	}
	

	public function authenticate() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$r = $this->User_model->authenticate($username, $password);

		if (count($r) > 0 ) {
			$user = $r[0];
            echo "Welcome {$user->username}";
            $s_user=array('s_username'=>$username);
            $this->session->set_userdata($s_user);
			redirect('user/login');
		} else {
			echo "Invalid user name or password";
		}
	}

	public function list() {
        $user_create=$this->session->userdata('s_username');
       $rides = $this->User_model->all($user_create);

       $data['rides'] = $rides;
       $this->load->view('user/dashboard', $data);

	}


	public function save()
    {
		// get the params
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $cedula = $this->input->post('cedula');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tipo_usuario = $this->input->post('tipo_usuario');
        


		$user = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cedula' => $cedula,
            'username' => $username,
            'password' => $password,
            'tipo_usuario' => $tipo_usuario

        );
		// call the model to save
		$r = $this->User_model->save($user);
		
		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('user/login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/register_user');
        }
    }

     //public function editUser()
    //{
        // get the params
        //$user_create=$this->session->userdata('s_username');
        //$fullname = $this->input->post('fullname');
        //$speed = $this->input->post('speed');
        //$about = $this->input->post('about');

        //$userE = array(
          //  'full_name' => $fullname,
            //'speed_average' => $speed,
            //'about_me' => $about

        //);
        // call the model to save
        //$r=$this->User_model->editUser($user_create,$userE);
        
        // redirect
          //if($r) {

            //redirect('user');
        //}else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
          //  redirect('user');
        //}
   // }

}