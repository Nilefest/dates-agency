<?php
class indexController extends Controller {
	public function index($id = false) {
        
        if($id) return $this->girl($id);
        
        $this->load->model('girls');
        
        if(isset($this->request->post['delete_photo_girl'])){
            $src = $this->request->post['src'];
            if(stristr($src, 'temp')){
                unlink(APPLICATION_DIR.str_replace('/application', '', $src));
            }
            exit();
        }
        if(isset($this->request->post['sub_add_girl'])){
            $this->girlsModel->addItem(['l_name' => $this->request->post['l_name'],
                                        'name' => $this->request->post['name'],
                                        'city' => $this->request->post['city'],
                                        'height' => $this->request->post['height'],
                                        'weight' => $this->request->post['weight'],
                                        'age' => $this->request->post['age'],
                                        'color_eye' => $this->request->post['color_eye'],
                                        'color_heir' => $this->request->post['color_heir'],
                                        'education' => $this->request->post['education'],
                                        'profession' => $this->request->post['profession'],
                                        'occupation' => $this->request->post['occupation'],
                                        'religion' => $this->request->post['religion'],
                                        'smoking' => $this->request->post['smoking'],
                                        'alcohol' => $this->request->post['alcohol'],
                                        'lang_eng' => $this->request->post['lang_eng'],
                                        'lang_other' => $this->request->post['lang_other'],
                                        'family_status' => $this->request->post['family_status'],
                                        'children_count' => $this->request->post['children_count'],
                                        'about' => $this->request->post['about'],
                                        'man_age' => $this->request->post['man_age'],
                                        'man_about' => $this->request->post['man_about'],
                                        'mail' => $this->request->post['mail'],
                                        'phone' => $this->request->post['phone'],
                                        'date_created' => time()]);
            
            // upload files
            $max_id = $this->girlsModel->getMax();
            $dir = APPLICATION_DIR . 'public/files/girls/temp';
            $dir_new = APPLICATION_DIR . 'public/files/girls/' . $max_id;
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
            
            // Girl form
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            $title = 'KDA New girl in Service ' . date('d.m.Y ') . ' - ' . time();
            
            $body = 'KDA New girl in Service<br>'
                . '<br>last name: ' . $this->request->post['l_name']
                . '<br>name: ' . $this->request->post['name']
                . '<br>city: ' . $this->request->post['city']
                . '<br>height: ' . $this->request->post['height']
                . '<br>weight: ' . $this->request->post['weight']
                . '<br>age: ' . $this->request->post['age']
                . '<br>color_eye: ' . $this->request->post['color_eye']
                . '<br>color_heir: ' . $this->request->post['color_heir']
                . '<br>education: ' . $this->request->post['education']
                . '<br>profession: ' . $this->request->post['profession']
                . '<br>occupation: ' . $this->request->post['occupation']
                . '<br>religion: ' . $this->request->post['religion']
                . '<br>smoking: ' . $this->request->post['smoking']
                . '<br>alcohol: ' . $this->request->post['alcohol']
                . '<br>lang_eng: ' . $this->request->post['lang_eng']
                . '<br>lang_other: ' . $this->request->post['lang_other']
                . '<br>family status: ' . $this->request->post['family_status']
                . '<br>children count: ' . $this->request->post['children_count']
                . '<br>about: ' . $this->request->post['about']
                . '<br>man age: ' . $this->request->post['man_age']
                . '<br>man about: ' . $this->request->post['man_about']
                . '<br>mail: ' . $this->request->post['mail']
                . '<br>phone: ' . $this->request->post['phone']
                . ' <br><br>This girl: <a href="http://agency.nlf.name/girls/' . $max_id . '">' . $this->request->post['l_name'] . ' ' . $this->data['girl']['name'] . ' (' . $max_id . ')</a>';
            
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
            $dir = APPLICATION_DIR . 'public/files/girls/temp';
            
            foreach($this->request->files['images']['tmp_name'] as $tmp_name){
                $uploadfile = $dir . '/' . time() . '.png';
                move_uploaded_file($tmp_name, $uploadfile);
            }
            
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            foreach($my_images as $key => $img_this){
                $my_images[$key] = '/application/public/files/girls/temp/' . $img_this;
            }
            $my_images = array_reverse($my_images);
            $my_images = json_encode($my_images);
            echo $my_images;
            exit();
        }
        
        
        // Open page
        $this->config->title = "For  GIRL";
        $this->config->meta_description = "Matchmaking services in kiev for marriage with ukrainian woman";
        $this->config->meta_keywords = "ukraine women seeking men,ukraine single girls,pretty ukraine women,ukrainian singles dating,ukraine ladies online,beautiful ukrainian ladies,single ukrainian ladies for marriage,meet ukraine girl online";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('girls/form', $this->data);
	}
    
    private function girl($id){
        $this->data['admin'] = $this->user->isLogin();
        
        $this->load->model('girls');
        
        $this->data['girl'] = $this->girlsModel->getItems([], ['id' => $id])[0];
        if(empty($this->data['girl'])) $this->response->redirect('/gallery');
        
        // Girl page
        
        if(isset($this->request->post['sub_girl_mess'])){
            //echo 'sub_girl_mess';
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            $title = 'KDA Message for girl ' . date('d.m.Y ') . ' - ' . time();
            
            $body = 'KDA Message for girl<br>'
                . 'Name: ' . $this->request->post['name'] 
                . ' <br>Mail: ' . $this->request->post['mail'] 
                . ' <br>Text: ' . $this->request->post['text']
                . ' <br><br>For girl: <a href="http://agency.nlf.name/girls/' . $id . '">' . $this->data['girl']['l_name'] . ' ' . $this->data['girl']['name'] . ' (' . $id . ')</a>';
            
            $to_name = 'Administrator KDA';
            $to_mail = $this->config->mail_admin;
            $unsub_link = $this->config->mail_unsub_link;
            $files = [];

            $dir = APPLICATION_DIR . 'public/files/modal_temp';
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            if(!empty($my_images)){
                foreach($my_images as $key => $img_this){
                    $files[] = ['path' => $dir . '/' . $img_this, 'name' => $img_this];
                }
            }
            
            $mail->send_smtp($title, 
                             $body, 
                             $to_name, 
                             $to_mail, 
                             $unsub_link, 
                             $files);/**/
            if(!empty($my_images)){
                foreach($my_images as $key => $img_this){
                    unlink($dir . '/' . $img_this);
                }
            }
            $this->response->redirect($this->config->page_for_pay);
            exit();
        }
        // Girl page
        if(isset($this->request->post['sub_girl_gift_flowers'])){
            //echo 'sub_girl_gift_flowers';
            //$this->pre($this->request->post);
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            $title = 'KDA Gift or flowers for girl ' . date('d.m.Y ') . ' - ' . time();
            
            $gifts = '';
            if(!empty($this->request->post['gift'])){
                foreach($this->request->post['gift'] as $gift){
                    $gifts .= $gift . ', ';
                }
            }
            
            $body = 'KDA Gift or flowers for girl<br>'
                . 'Name: ' . $this->request->post['name'] 
                . ' <br>Gifts: ' . $gifts
                . ' <br>Mail: ' . $this->request->post['mail'] 
                . ' <br>VIP choice: ' . $this->request->post['vip_choice']
                . ' <br>Note: ' . $this->request->post['note']
                . ' <br><br>For girl: <a href="http://agency.nlf.name/girls/' . $id . '">' . $this->data['girl']['l_name'] . ' ' . $this->data['girl']['name'] . ' (' . $id . ')</a>';
            
            $to_name = 'Administrator KDA';
            $to_mail = $this->config->mail_admin;
            $unsub_link = $this->config->mail_unsub_link;
            $files = [];

            $dir = APPLICATION_DIR . 'public/files/modal_temp';
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            if(!empty($my_images)){
                foreach($my_images as $key => $img_this){
                    $files[] = ['path' => $dir . '/' . $img_this, 'name' => $img_this];
                }
            }
            $mail->send_smtp($title, 
                             $body, 
                             $to_name, 
                             $to_mail, 
                             $unsub_link, 
                             $files);/**/
            if(!empty($my_images)){
                foreach($my_images as $key => $img_this){
                    unlink($dir . '/' . $img_this);
                }
            }
            $this->response->redirect($this->config->page_for_pay);
            exit();
        }
        elseif(!empty($this->request->files)){
            $dir = APPLICATION_DIR . 'public/files/modal_temp';
            
            foreach($this->request->files['images']['tmp_name'] as $tmp_name){
                $uploadfile = $dir . '/' . time() . '.png';
                move_uploaded_file($tmp_name, $uploadfile);
            }
            
            $my_images = scandir($dir);
            unset($my_images[0]);
            unset($my_images[1]);
            foreach($my_images as $key => $img_this){
                $my_images[$key] = '/application/public/files/modal_temp/' . $img_this;
            }
            $my_images = array_reverse($my_images);
            $my_images = json_encode($my_images);
            echo $my_images;
            exit();
        }
        
        $dir_img = APPLICATION_DIR . 'public/files/girls/' . $id;
        $my_images = scandir($dir_img);
        if(isset($my_images[2])){
            unset($my_images[0]);
            unset($my_images[1]);
            foreach($my_images as $img){
                $this->data['girl']['img'][] = "/application/public/files/girls/$id/$img";
                
            }
        }
        else{
            $this->data['girl']['img'][0] = '/application/public/files/girls/empty_girl.jpg';
        }
        
        $this->data['top_girls'] = $this->config->top_girls['page'];
        
        // Open page
        $this->config->title = $this->data['girls']['l_name'] . ' ' . $this->data['girls']['name'];
        $this->config->meta_description = "How to marry ukrainian woman, why it is good to marry ukrainian lady";
        $this->config->meta_keywords = "single ukraine ladies,ukraine ladies for marriage,ukraine singles,ukraine wife,russian women for marriage";
        $this->config->title = $this->data['girl']['l_name'] . ' ' . $this->data['girl']['name'];
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('girls/girl', $this->data);
    }
}
?>
