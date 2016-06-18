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
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function searching()
    {
        // search 关键字进来
        $searchText = $this->input->get('searchText');
        // 调用model查找关键字内容
        $searchResult = "";
        // 返回数组包括：姓名 图片 身份 id 公司 标签
        // 分别对应echo出去

        $searchResult[] .= array("Saab", "Volvo", "BMW", "Toyota", $searchText);
        $searchResult[] = array(
            // 对应searchResult[1]["id"]
            'id' => "001",
            'name' => "牛肉个",
            'img' => "../assets/images/profile/default_person1.png",
            'role' => "<a class=\"search-keyword\">".$searchText."</a>",
            'company' => "先看人优先公司",
            'tag' => "O2O",
        );
        $searchResult[] = array(
            // 对应searchResult[2]["id"]
            'id' => "002",
            'name' => "牛肉个1",
            'img' => "path1",
            'role' => "<a class=\"search-keyword\">".$searchText."</a>",
            'company' => "先看人优先公司1",
            'tag' => "O2O1",
        );
        //        echo phpinfo(); die();
        //$searchResult=array("Saab","Volvo","BMW","Toyota");
        echo $searchResult === "" ? "no more result" : json_encode($searchResult);;
    }
}