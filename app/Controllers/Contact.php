<?php 

namespace App\Controllers;

use App\Models\ContactModels;
use App\Models\AvailModels;
use App\Controllers\BaseController;


class Contact extends BaseController {
    public function index()
    {
        // echo view('pages/contact');
        $model = model(ContactModels::class);

        $data['aarhat_contact_form'] = $model->getDetails();
        
    }
    public function view($slug = null)
    {
        $model = model(ContactModels::class);

        $data['aarhat_contact_form'] = $model->getDetails($slug);
    }

    public function contactForm()
    {
        $models = model(ContactModels::class);
       

        if($this->request->getMethod() === 'post'){
            $fname = $this->request->getVar('name');
            $cemail = $this->request->getVar('email');
            $service = $this->request->getVar('services');
            $message = $this->request->getVar('message');

            //models
            $model = new ContactModels();
        
            //saving data to data base
            if($model->save([
                'name' => $fname,
                'email' => $cemail,
                'services' => $service,
                'messages' => $message,
            ])){
                
                // mail
                
                
                // mail sent 
                 echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
            }else{
               echo json_encode(["status" => 2, "message" => "please try again later"]);
            }
            
            
        }else{
            echo "failed";
        }
    }
    

    public function availOffer()
    {
        $models = model(AvailModels::class);
        $validation =  \Config\Services::validation();

        // if($this->request->getMethod() === 'post' &&  $this->validate([
        //     'name' => 'required|min_length[3]|max_length[35]',
        //     'email' => 'required',
        //     'phone' => 'required',
            
        // ])){
        if($this->request->getMethod() === 'post'){
            $fname = $this->request->getVar('name');
            $cemail = $this->request->getVar('email');
            $cphone = $this->request->getVar('phone');
            $coupon = $this->request->getVar('coupon');

            //models
            $model = new AvailModels();
        
            //saving data to data base
            if($model->save([
                'name' => $fname,
                'email' => $cemail,
                'phone' => $cphone,
                'coupon' => $coupon,
            ])){
                
                // mail
                
                
                // mail sent 

                 echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
            }else{
               echo json_encode(["status" => 2, "message" => "please try again later"]);
            }
            
            
        }else{
            echo "failed";
        }
    }
    
    public function contactDetails()
    
    {
        echo "test";
        $model = new AvailModels();
            $data = $model->getDetails();
            echo "<pre>";
            print_r($data);
            exit;
    }
}

?>