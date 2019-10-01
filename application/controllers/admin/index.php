<?php
class indexController extends Controller {
    
    
	public function index() {
        
        //if(isset($this->request->get['logout'])) $this->response->redirect('/');
        
        if(isset($this->request->post['sub_login'])){
            $this->user->login($this->request->post['login'], $this->request->post['password']);
        }
        $user = $this->user->isLogin();
        if(!empty($user)) $this->response->redirect('/admin/girls');
        //$this->pre($user);
        
        // Open page
        $this->config->title = "Sign In ADM";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('admin/index', $this->data);
    }
    
	public function blog($id = false) {
        
        $this->data['admin'] = $this->user->isLogin();
        if(empty($this->data['admin'])) $this->response->redirect('/admin');
        
        $this->load->model('blog');
        $this->load->model('blog_items');
        
        if($id){
            if(isset($this->request->post['sub_delete_blog'])){
                $this->blog_itemsModel->deleteItems(['blog_id' => $id]);
                $this->blogModel->deleteItems(['id' => $id]);
            }
            if(isset($this->request->post['sub_save_blog'])){

                // add to db BLOG
                $this->blogModel->updateItems(['title' => $this->request->post['title']], ['id' => $id]);

                $blog_all = $this->request->post['blog'];
                if(isset($this->request->post['delete_items'])){
                    foreach($this->request->post['delete_items'] as $delete_el_id){
                        $this->blog_itemsModel->deleteItems(['id' => $delete_el_id]);
                    }
                }
                if(!empty($blog_all)){
                    $dir = APPLICATION_DIR . 'public/files/blog/'.$id;
                    
                    /*$in_folder = scandir($dir);
                    unset($my_images[0]);
                    unset($my_images[1]);
                    foreach($in_folder as $key => $f_item){
                        unlink($dir . '/' . $f_item);
                    }/**/
                    
                    foreach($blog_all as $blog_key => $blog){
                        
                        if($blog['id'] == '{element_id}'){
                            
                            $this->blog_itemsModel->addItem(['order_num' => $blog_key, 
                                                             'blog_id' => $id,
                                                             'type' => $blog['type'], 
                                                             'headline' => $blog['title'], 
                                                             'text1' => $blog['text1'], 
                                                             'text2' => $blog['text2'],
                                                             'img' => $this->request->files['blog']['name'][$blog_key]['img']]);
                        }
                        else{
                            if($this->request->files['blog']['name'][$blog_key]['img'] != ''){
                                $this->blog_itemsModel->updateItems(['order_num' => $blog_key, 
                                                                     'blog_id' => $id,
                                                                     'type' => $blog['type'], 
                                                                     'headline' => $blog['title'], 
                                                                     'text1' => $blog['text1'], 
                                                                     'text2' => $blog['text2'],
                                                                     'img' => $this->request->files['blog']['name'][$blog_key]['img']], 
                                                                    ['id' => $blog['id']]);
                            }
                            else{
                                $this->blog_itemsModel->updateItems(['order_num' => $blog_key, 
                                                                     'blog_id' => $id,
                                                                     'type' => $blog['type'], 
                                                                     'headline' => $blog['title'], 
                                                                     'text1' => $blog['text1'], 
                                                                     'text2' => $blog['text2']],
                                                                    ['id' => $blog['id']]);
                            }
                        }
                        
                        if($this->request->files['blog']['name'][$blog_key]['img'] != ''){
                            // add to server BLOG_IMG
                            copy($this->request->files['blog']['tmp_name'][$blog_key]['img'], 
                                 $dir . '/' . $this->request->files['blog']['name'][$blog_key]['img']);

                        }
                    }
                }
            }

            $this->data['blog_title'] = $this->blogModel->getItems([],['id' => $id])[0]['title'];
            $this->data['blog_items'] = $this->blog_itemsModel->getItems([],['blog_id' => $id], [], ['order_num' => 'ASC']);
            $this->data['blog_id'] = $id;
            
            // Open page
            $this->config->title = "ADM " . $this->data['blog_title'];
        }
        else{
            if(isset($this->request->post['sub_save_blog'])){

                // add to db BLOG
                $this->blogModel->addItem(['title' => $this->request->post['title']]);
                $max_id = $this->blogModel->getMax();

                $blog_all = $this->request->post['blog'];
                if(!empty($blog_all)){
                    $dir = APPLICATION_DIR . 'public/files/blog/'.$max_id;
                    mkdir($dir);
                    
                    foreach($blog_all as $blog_key => $blog){

                        // add to db BLOG_ELEMENTS
                        $this->blog_itemsModel->addItem(['order_num' => $blog_key, 
                                                         'blog_id' => $max_id,
                                                         'type' => $blog['type'], 
                                                         'headline' => $blog['title'], 
                                                         'text1' => $blog['text1'], 
                                                         'text2' => $blog['text2'],
                                                         'img' => $this->request->files['blog']['name'][$blog_key]['img']]);

                        if($this->request->files['blog']['name'][$blog_key]['img'] != ''){
                            // add to server BLOG_IMG
                            copy($this->request->files['blog']['tmp_name'][$blog_key]['img'], 
                                 $dir . '/' . $this->request->files['blog']['name'][$blog_key]['img']);

                        }/**/
                    }
                }
            }
            
            // Open page
            $this->config->title = "ADM Blog";
        }
        
		$this->getChild(array('common/header',
                              'common/nav',
                              'common/footer',
                              'common/blog_admin_items/blog_item1',
                              'common/blog_admin_items/blog_item2',
                              'common/blog_admin_items/blog_item3',
                              'common/blog_admin_items/blog_item4',
                              'common/blog_admin_items/blog_item5',
                              'common/blog_admin_items/blog_item6'));
		return $this->load->view('admin/blog', $this->data);
	}
    
	public function girls($id = false) {
        
        $this->data['admin'] = $this->user->isLogin();
        if(empty($this->data['admin'])) $this->response->redirect('/admin');
        
        $this->load->model('girls');
        if($id){

            $this->data['girl'] = $this->girlsModel->getItems([], ['id' => $id])[0];
            if(empty($this->data['girl'])) $this->response->redirect('/admin/girls');
            
            if(isset($this->request->post['delete_photo_girl'])){
                $src = $this->request->post['src'];
                unlink(APPLICATION_DIR.str_replace('/application/', '', $src));
                exit();
            }
            if(isset($this->request->post['sub_delete_girl'])){
                $this->girlsModel->deleteItems(['id' => $this->request->post['id']]);
                $this->response->redirect('/admin/girls');
            }
            if(isset($this->request->post['sub_save_girl'])){
                if(isset($this->request->post['public']))
                    $this->request->post['public'] = '1';
                else
                    $this->request->post['public'] = '0';
                $this->girlsModel->updateItems(['l_name' => $this->request->post['l_name'],
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
                                            'public' => $this->request->post['public']], ['id' => $this->request->post['id']]);

            }
            elseif(!empty($this->request->files)){
                $dir = APPLICATION_DIR . "/public/files/girls/$id/";

                foreach($this->request->files['images']['tmp_name'] as $tmp_name){
                    $uploadfile = $dir . '/' . time() . '.png';
                    move_uploaded_file($tmp_name, $uploadfile);
                }

                $my_images = scandir($dir);
                unset($my_images[0]);
                unset($my_images[1]);
                foreach($my_images as $key => $img_this){
                    $my_images[$key] = "/application/public/files/girls/$id/" . $img_this;
                }
                $my_images = array_reverse($my_images);
                $my_images = json_encode($my_images);
                echo $my_images;
                exit();
            }

            $this->data['girl'] = $this->girlsModel->getItems([], ['id' => $id])[0];

            $dir_img = APPLICATION_DIR . 'public/files/girls/' . $id;
            $my_images = scandir($dir_img);
            $this->data['girl']['img'] = [];
            if(isset($my_images[2])){
                unset($my_images[0]);
                unset($my_images[1]);
                foreach($my_images as $img){
                    $this->data['girl']['img'][] = "/application/public/files/girls/$id/$img";

                }
            }
            $this->config->title = "ADM " . $this->data['girl']['l_name'] . ' ' . $this->data['girl']['name'];
        }
        else{
            if(isset($this->request->post['delete_photo_girl'])){
                $src = $this->request->post['src'];
                if(stristr($src, 'temp')){
                    unlink(APPLICATION_DIR.str_replace('/application/', '', $src));
                }
                exit();
            }
            if(isset($this->request->post['sub_save_girl'])){
                if(isset($this->request->post['public']))
                    $this->request->post['public'] = '1';
                else
                    $this->request->post['public'] = '0';
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
                                            'public' => $this->request->post['public'],
                                            'date_created' => time()]);

                // upload files
                $max_id = $this->girlsModel->getMax();
                $dir = APPLICATION_DIR . 'public/files/girls/temp';
                $dir_new = APPLICATION_DIR . 'public/files/girls/' . $max_id;
                mkdir($dir_new);

                $my_images = scandir($dir);
                unset($my_images[0]);
                unset($my_images[1]);
                if(!empty($my_images)){
                    foreach($my_images as $key => $img_this){
                        copy($dir . '/' . $img_this, $dir_new . '/' . $img_this);
                        unlink($dir . '/' . $img_this);
                    }
                }
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
            
            $this->config->title = "ADM Girls";
        }
        
        // Open page
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('admin/girls', $this->data);
	}
}
?>
