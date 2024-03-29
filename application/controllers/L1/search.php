<?php

/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2016/6/15
 * Time: 14:04
 */
class Search extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        // needed when we
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('search_model');
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function test()
    {
        $searchText = $this->input->get('searchText');
        $dataSearchRlt = $this->search_model->getRltBySearchText($searchText);
        echo phpinfo();
        dieout();
        $this->load->view();
    }

    public function searching()
    {
        // search 关键字进来
        $searchText = $this->input->get('searchText');
        // 调用model查找关键字内容
        $searchResult = "";
        // 返回数组包括：姓名 图片 身份 id 公司 标签
        // 分别对应echo出去

        $dataSearchRlt = $this->search_model->getRltBySearchText($searchText);
        //echo $searchResult['data'];
        //echo phpinfo(); dieout();
        $searchResult[] .= array("Saab", "Volvo", "BMW", "Toyota", $searchText);
        if ($dataSearchRlt)
            //echo phpinfo();dieout();
            foreach ($dataSearchRlt as $dataSearch) {
                $searchResult[] = array(
                    // 对应searchResult[1]["id"]
                    'id' => $dataSearch->user_id,
                    'name' => $dataSearch->user_name,
                    'img' => $dataSearch->user_image,
                    'role' => $dataSearch->user_role,
                    'company' => $dataSearch->user_company,
                    'tag' => $dataSearch->tag_sum,
                );
            }


        //        echo phpinfo(); die();
        echo $searchResult === "" ? "no more result" : json_encode($searchResult, true);
        function a($fullString, $searchText)
        {
            $fullArray = explode($searchText, $fullString);

            $fullString = "";
            for ($i = 1; $i < sizeof($fullArray); $i++) {
                $fullString .= $fullArray[$i];
            }
            return $fullString;
        }
    }

    public function showTopTen()
    {
        $searchResult = "";

        $dataSearchRlt = $this->search_model->getTopTen();
        if ($dataSearchRlt)
            foreach ($dataSearchRlt as $dataSearch) {
                $searchResult[] = array(
                    // 对应searchResult[1]["id"]
                    'id' => $dataSearch->user_id,
                    'name' => $dataSearch->user_name,
                    'img' => $dataSearch->user_image,
                    'role' => $dataSearch->user_role,
                    'company' => $dataSearch->user_company,
                    'tag' => $dataSearch->tag_sum,
                );
            }

        echo $searchResult === "" ? "no more result" : json_encode($searchResult, true);
    }
}