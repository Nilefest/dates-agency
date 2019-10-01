<?php
class indexController extends Controller {
	public function index($id = false) {
        
        $this->data['admin'] = $this->user->isLogin();
        
        $this->load->model('blog');
        $this->load->model('blog_items');
        
        $this->data['blog_title'] = $this->blogModel->getItems([],['id' => $id])[0]['title'];
        $this->data['blog_items'] = $this->blog_itemsModel->getItems([],['blog_id' => $id], [], ['order_num' => 'ASC']);
        $this->data['blog_id'] = $id;
        
        //$this->pre($this->data['blog_items']);
        
        // Open page
        $this->config->title = $this->data['blog_title'];
        $this->config->meta_description = "How to marry ukrainian woman, why it is good to marry ukrainian lady";
        $this->config->meta_keywords = "single ukraine ladies,ukraine ladies for marriage,ukraine singles,ukraine wife,russian women for marriage";
		$this->getChild(array('common/header',
                              'common/nav',
                              'common/footer',
                              'common/blog_items/blog_item1',
                              'common/blog_items/blog_item2',
                              'common/blog_items/blog_item3',
                              'common/blog_items/blog_item4',
                              'common/blog_items/blog_item5',
                              'common/blog_items/blog_item6'));
		return $this->load->view('blog/index', $this->data);
	}
}
?>