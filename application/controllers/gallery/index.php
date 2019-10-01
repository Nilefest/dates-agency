<?php
class indexController extends Controller {
    
	public function index($page = 1) {
        
        $this->load->model('girls');
        $this->data['is_admin'] = 0;
        if(!empty($this->user->isLogin())) $this->data['is_admin'] = 1;
        $dir_img = APPLICATION_DIR . 'public/files/girls/';
        
        $this->data['girls_private'] = [];
        $this->data['girls_public_new'] = [];
        $this->data['girls_public'] = [];
        
        if(isset($this->request->get['sub_search'])){
            $this->data['filter_string'] = str_replace('action=' . $this->request->get['action'], '', $_SERVER['QUERY_STRING']);
            $this->data['filter_data'] = $this->request->get;
            
            $sql = "SELECT * FROM `girls` WHERE `public` = '1'";
            // Filter AGE
            if(isset($this->request->get['age']['st']) && $this->request->get['age']['st'] != '')
                $sql .= " AND `age` >= '" . $this->request->get['age']['st'] . "'";
            if(isset($this->request->get['age']['fn']) && $this->request->get['age']['fn'] != '')
                $sql .= " AND `age` <= '" . $this->request->get['age']['fn'] . "'";
            
            // Filter WEIGHT
            if(isset($this->request->get['height']['st']) && $this->request->get['height']['st'] != '')
                $sql .= " AND `height` >= '" . $this->request->get['height']['st'] . "'";
            if(isset($this->request->get['height']['fn']) && $this->request->get['height']['fn'] != '')
                $sql .= " AND `height` <= '" . $this->request->get['height']['fn'] . "'";
            
            // Filter WEIGHT
            /*if(isset($this->request->get['weight']['st']) && $this->request->get['weight']['st'] != '')
                $sql .= " AND `weight` >= '" . $this->request->get['weight']['st'] . "'";
            if(isset($this->request->get['weight']['fn']) && $this->request->get['weight']['fn'] != '')
                $sql .= " AND `weight` <= '" . $this->request->get['weight']['fn'] . "'";/**/
            
            // Filter CHILDREN
            if(isset($this->request->get['children']) && $this->request->get['children'] != '-1'){
                if($this->request->get['children'] == '1')
                    $sql .= " AND `children_count` >= '1'";
                else
                    $sql .= " AND `children_count` = '0'";
            }
            
            // Filter CITY
            if(isset($this->request->get['city']) && $this->request->get['city'] != '-1'){
                $sql .= " AND `city` = '" . $this->request->get['city'] . "'";
            }
            
            // Filter LANG_ENG
            if(isset($this->request->get['lang_eng']) && $this->request->get['lang_eng'] != '-1'){
                $sql .= " AND `lang_eng` = '" . $this->request->get['lang_eng'] . "'";
            }
            $sql .= ' ORDER BY `date_created` ASC LIMIT ' . (0 + ($page - 1) * 15) . ',' . ($page * 15);
            
            $this->data['girls_public'] = $this->girlsModel->query($sql);
            
            //$this->pre($this->request->get);
            //echo $sql . '<br><br><br><br>';
        }
        else{
            if($this->data['is_admin']){
                $this->data['girls_private'] = $this->girlsModel->getItems([],['public' => '0'],[], ['date_created' => 'ASC']);
                foreach($this->data['girls_private'] as $key => $girl){
                    $my_images = scandir($dir_img . $girl['id']);
                    if(isset($my_images[2])){
                        $this->data['girls_private'][$key]['img'] = '/application/public/files/girls/' . $girl['id'] . '/' . $my_images[2];
                    }
                    else{
                        $this->data['girls_private'][$key]['img'] = '/application/public/files/girls/' . 'empty_girl.jpg';
                    }
                }
            }

            if($page == 1 && !$this->data['is_admin']){
                $this->data['girls_public_new'] = $this->girlsModel->getItems([],['public' => '1'],[],
                                                                              ['date_created' => 'ASC'], 
                                                                              ['start' => '0', 'limit' => '6']);
                foreach($this->data['girls_public_new'] as $key => $girl){
                    $my_images = scandir($dir_img . $girl['id']);
                    if(isset($my_images[2])){
                        $this->data['girls_public_new'][$key]['img'] = '/application/public/files/girls/' . $girl['id'] . '/' . $my_images[2];
                    }
                    else{
                        $this->data['girls_public_new'][$key]['img'] = '/application/public/files/girls/' . 'empty_girl.jpg';
                    }
                }
            }

            $this->data['girls_public'] = $this->girlsModel->getItems([],['public' => '1'],[], 
                                                                      ['date_created' => 'ASC'], 
                                                                      ['start' => 0 + (($page - 1) * 15), 'limit' => $page * 15]);
        }
        // Get Images
        foreach($this->data['girls_public'] as $key => $girl){
            $my_images = scandir($dir_img . $girl['id']);
            if(isset($my_images[2])){
                $this->data['girls_public'][$key]['img'] = '/application/public/files/girls/' . $girl['id'] . '/' . $my_images[2];
            }
            else{
                $this->data['girls_public'][$key]['img'] = '/application/public/files/girls/' . 'empty_girl.jpg';
            }
        }
        $this->data['girl_from'] = (($page - 1) * 15 + !empty($this->data['girls_public']));
        $this->data['girl_to'] = (($page - 1) * 15 + count($this->data['girls_public']));/**/
        $this->data['page_this'] = $page;
        $girls_total = count($this->girlsModel->getItems([],['public' => '1']));
        $this->data['page_total'] = round(count($girls_total) / 15 + 1 + 0.5, 0);
        
        $this->data['pages_pag'] = [$this->data['page_this'] - 1, $this->data['page_this'],$this->data['page_this'] + 1];
        foreach($this->data['pages_pag'] as $key => $page_pag){
            if($page_pag < 2 || $page_pag >= $this->data['page_total']){
                unset($this->data['pages_pag'][$key]);
            }
        }
        sort($this->data['pages_pag']);
        
        // Open page
        $this->config->title = "Gallery";
        $this->config->meta_description = "Beautiful ukrainian and russian single ladies for marriage";
        $this->config->meta_keywords = "marry ukrainian women,single ukrainian woman,ukrainian brides,kiev brides,odessa ukraine women,marry ukrainian girl,ukraine marriage site";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('gallery/index', $this->data);
	}
}
?>
