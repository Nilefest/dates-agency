<?php
class navController extends Controller {

	public function index() {
        
        $this->load->model('blog');
        $this->data['blogs'] = $this->blogModel->getItems();
        
        $this->data['action'] = $this->request->get['action'];
        
		return $this->load->view('common/nav', $this->data);
	}
}
?>