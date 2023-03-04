<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

  
class ProfileController extends Controller
{
    public function index()
    {
        session()->set('user');
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('home_main', $data);
    }
}