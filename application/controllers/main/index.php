<?php
class indexController extends Controller {
	public function index() {
        
        $this->data['top_girls'] = $this->config->top_girls['main'];
        
        // Open page
        $this->config->title = "Official site";
        $this->config->meta_description = "Best marriage agency in Ukraine, where you can find beautiful ukrainian wife";
        $this->config->meta_keywords = "kiev dating agency, kiev marriage agency, ukrainian marriage agency, ukrainian dating agency, meet ukrainian singles, online dating ukraine,ukraine dating site, ukraine dating app, ukrainian girls dating, ukraine dating tours, ukrainian dating service, ukrainian dating websites";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('main/index', $this->data);
	}
}
?>
