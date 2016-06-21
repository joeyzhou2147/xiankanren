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
        $sql = 'SELECT search_id FROM user where search_text = ?';
        $query = $this->db->query($sql, array($searchText));
        $row = $query->row();
        return $row->search_id;
    }

    public function getUsedTimesBySearchText($searchText)
    {
        $sql = 'SELECT used_times FROM user where search_text = ?';
        $query = $this->db->query($sql, array($searchText));
        $row = $query->row();
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
        if (is_int(getIdBySearchText($searchText))) {
            //这个text用过，把数据插入search表格保存, 包括text used_times为+1
            $dataArray['used_times'] = getUsedTimesBySearchText($searchText) + 1;
            $this->db->where('search_text', $searchText);
            $this->db->update('search', $dataArray);
        } else {
            //没有用过，先把数据插入search表格保存, 包括text used_times为1
            $this->db->insert('search', $dataArray);
        }

        //插入search表格结束，然后返回search的user结果，id 姓名 图片 身份 公司 标签




    }


    public function activeGetSearchRlt($searchText)
    {
        $result = array();
        $this->db->select('search_id, search_text, used_times')->from('user');
        $query = $this->db->get();
        // the query cannot be returned directly
        // change the query data to array of string
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }
}