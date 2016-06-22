<?php

/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2016/6/21
 * Time: 12:00
 */
class Search_model extends CI_Model
{

    function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getIdBySearchText($searchText)
    {
        $sql = 'SELECT search_id FROM search where search_text = ?';
        $query = $this->db->query($sql, array($searchText));
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return null;
    }

    public function getUsedTimesBySearchText($searchText)
    {
        $emptyArray[] = array();
        $sql = 'SELECT used_times FROM search where search_text = ?';
        $query = $this->db->query($sql, array($searchText));
        $row = $query->row();
        if (is_null($row->used_times)) {
            return $emptyArray;
        }
        return $row->used_times;
    }

    public function getRltBySearchText($searchText)
    {
        $dataArray = array(
            // 'user_id' => $id, // column id is auto incremental
            'search_text' => $searchText,
            'used_times' => 1,
        );
        // 判断返回的id是数值还是非数值
        if (!is_null($this->getIdBySearchText($searchText))) {
            //这个text用过，把数据插入search表格保存, 包括text used_times为+1
            $dataArray['used_times'] = $this->getUsedTimesBySearchText($searchText) + 1;
            $this->db->where('search_text', $searchText);
            $this->db->update('search', $dataArray);
        } else {
            //没有用过，先把数据插入search表格保存, 包括text used_times为1
            $this->db->insert('search', $dataArray);
        }

        //插入search表格结束，然后返回search的user结果，id 姓名 图片 身份 公司 标签
        $this->db->select('user_id, user_name, user_company, user_detail, user_role, tag_sum, user_image');
        //        $likeArray = array('user_name' => $searchText, 'user_company' => $searchText, 'user_detail' => $searchText);
        //        $this->db->like($likeArray);

        $this->db->like(array('user_name' => $searchText));
        $this->db->or_like(array('user_company' => $searchText));
        $this->db->or_like(array('user_detail' => $searchText));
        $this->db->or_like(array('user_role' => $searchText));
        $this->db->or_like(array('tag_sum' => $searchText));
        //$this->db->where('page_online',1);
        //$this->db->where('page_site',$page_site);

        //在这儿设置搜索结果排列方式
        //$this->db->order_by("name", "asc");
        $query = $this->db->get('user');
        return $query->result();
    }


    public function getTopTen()
    {
        //返回search的user结果，id 姓名 图片 身份 公司 标签
        $this->db->select('user_id, user_name, user_company, user_detail, user_role, tag_sum, user_image');
//        $this->db->like(array('user_name' => $searchText));
//        $this->db->or_like(array('user_company' => $searchText));
//        $this->db->or_like(array('user_detail' => $searchText));
        //$this->db->where('page_online',1);
        //$this->db->where('page_site',$page_site);

        //在这儿设置搜索结果排列方式
        $this->db->order_by("user_name", "asc");
        $query = $this->db->get('user',7);
        return $query->result();
    }
}