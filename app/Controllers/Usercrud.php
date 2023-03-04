<?php 
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\LoginModel;
use App\Models\Post;
use CodeIgniter\Controller;
class UserCrud extends Controller
{
    // show users list
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
    public function homeview(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('home_main', $data);
    }
    // add user form
    public function create(){
        $login = new LoginModel();
        $method = $request->getMethod();
        if($method=='post'){
            $data = [
                'name'=>$this->request->getPost('name'),
                'email'=>$this->request->getPost('email'),
                'pass'=>$this->request->getPost('pass'),
                'cpass'=>$this->request->getPost('cpass')
            ];
            $login->insert($data);
        }else{

        }
        return view('home',$data);
    }

    public function check(){
        
    }
 
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
    // update user data
    
    public function update($idg){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $id = $idg;
        $data = [
            // 'name' => $this->request->getVar('name'),
            // 'username'  => $this->request->getVar('username'),
            // 'email'  => $this->request->getVar('email'),
            // 'phone'  => $this->request->getVar('phone'),
            // 'password'  => $this->request->getVar('password'),
            'status'=>'1',
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
    public function chat(){
        return view('messg');
    }
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function logout()
	{
		// session_destroy();
		session()->destroy('user');
		return redirect()->to(base_url('signin'));
		session()->setTempdata('success', 'Successfully Logged Out',5);
	}

    public function posts(){
        $postmodel = new Post();
    $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'short_description' => $this->request->getVar('disc'),
            'goal' => $this->request->getVar('goal'),
            'motive' => $this->request->getVar('motive'),
            'reso' => $this->request->getVar('reso'),
        ];
        $postmodel->insert($data);
        return $this->response->redirect(site_url('/profile'));

    }
    public function postview(){
        return view('post');
    }
    public function user_about(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->limit(1)->findAll();
        return view('profile',$data);
    }
}