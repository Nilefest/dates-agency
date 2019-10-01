<?php
class footerController extends Controller {
	public function index() {
        
        $this->load->model('blog');
        $this->data['blogs'] = $this->blogModel->getItems();
        
        $this->data['action'] = $this->request->get['action'];
        
        $this->data['js'] = $this->config->custom_js;
        
		return $this->load->view('common/footer', $this->data);
	}
}
?>