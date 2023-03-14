<?php
Class Pages extends Controller{
    private $crsModel;
    public function __construct()
    {
        $this->crsModel = $this->model('course');
    }

    public function index(){
        $getdata = $this->crsModel->getData();
        $data = [
            'name' => 'Ali',
            'crs' => $getdata
        ];
        $this->view('User/Home', $data);
    }

    public function about(){
        $this->view('User/about');
    }
}
?>