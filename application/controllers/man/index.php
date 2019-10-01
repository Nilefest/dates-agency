<?php
class indexController extends Controller {
    
	public function index() {
        
        $this->load->model('man');
        
        if(isset($this->request->post['delete_photo_man'])){
            $src = $this->request->post['src'];
            if(stristr($src, 'temp')){
                unlink(APPLICATION_DIR.str_replace('/application/', '', $src));
            }
            exit();
        }
        
        if(isset($this->request->post['sum_add_man'])){
            $this->manModel->addItem(['name' => $this->request->post['name'],
                                      'l_name' => $this->request->post['l_name'],
                                      'age' => $this->request->post['age'],
                                      'mail' => $this->request->post['mail'],
                                      'addr' => $this->request->post['addr'],
                                      'professional' => $this->request->post['professional'],
                                      'is_married' => $this->request->post['is_married'],
                                      'kids_about' => $this->request->post['kids_about'],
                                      'partner_about' => $this->request->post['partner_about'],
                                      'girl_about' => $this->request->post['girl_about'],
                                      'ukr_girl_about' => $this->request->post['ukr_girl_about'],
                                      'is_know_cultural' => $this->request->post['is_know_cultural'],
                                      'requirement' => $this->request->post['requirement'],
                                      'date_created' => time()]);
            // upload files
            $max_id = $this->manModel->getMax();
            $dir = APPLICATION_DIR . 'public/files/man/temp';
            $dir_new = APPLICATION_DIR . 'public/files/man/' . $max_id;
            mkdir($dir_new);
            
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            $files = [];
            if(!empty($my_images)){
                foreach($my_images as $key => $img_this){
                    $files[] = ['path' => $dir_new . '/' . $img_this, 'name' => $img_this];
                    copy($dir . '/' . $img_this, $dir_new . '/' . $img_this);
                    unlink($dir . '/' . $img_this);
                }
            }
            
            // Man form
            //echo 'sub_girl_gift_flowers';
            //$this->pre($this->request->post);
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            $title = 'KDA New man in Service ' . date('d.m.Y ') . ' - ' . time();
            
            $body = 'KDA New man in Service<br>'
                . '<br>name: ' . $this->request->post['name']
                . '<br>last name: ' . $this->request->post['l_name']
                . '<br>age: ' . $this->request->post['age']
                . '<br>mail: ' . $this->request->post['mail']
                . '<br>addr: ' . $this->request->post['addr']
                . '<br>professional: ' . $this->request->post['professional']
                . '<br>is_married: ' . $this->request->post['is_married']
                . '<br>kids_about: ' . $this->request->post['kids_about']
                . '<br>partner_about: ' . $this->request->post['partner_about']
                . '<br>girl about: ' . $this->request->post['girl_about']
                . '<br>ukr girl about: ' . $this->request->post['ukr_girl_about']
                . '<br>is know cultural: ' . $this->request->post['is_know_cultural']
                . '<br>requirement: ' . $this->request->post['requirement'];
            
            $to_name = 'Administrator KDA';
            $to_mail = $this->config->mail_admin;
            $unsub_link = $this->config->mail_unsub_link;

            $mail->send_smtp($title, 
                             $body, 
                             $to_name, 
                             $to_mail, 
                             $unsub_link, 
                             $files);/**/
        }
        elseif(!empty($this->request->files)){
            $dir = APPLICATION_DIR . 'public/files/man/temp';
            
            foreach($this->request->files['images']['tmp_name'] as $tmp_name){
                $uploadfile = $dir . '/' . time() . '.png';
                move_uploaded_file($tmp_name, $uploadfile);
            }
            
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            foreach($my_images as $key => $img_this){
                $my_images[$key] = '/application/public/files/man/temp/' . $img_this;
            }
            $my_images = array_reverse($my_images);
            $my_images = json_encode($my_images);
            echo $my_images;
            exit();
        }
        
        // Open page
        $this->config->title = "For MAN";
        $this->config->meta_description = "Matchmaking services in kiev for marriage with ukrainian woman";
        $this->config->meta_keywords = "ukraine women seeking men,ukraine single girls,pretty ukraine women,ukrainian singles dating,ukraine ladies online,beautiful ukrainian ladies,single ukrainian ladies for marriage,meet ukraine girl online";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('man/form', $this->data);
	}
}
?>