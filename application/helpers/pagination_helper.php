<?php

if (!function_exists('pagination')) {
    function pagination($url, $table)
    {
        $CI = &get_instance();
        $config["base_url"] = base_url() . $url;
        // $CI->load->model('Curd_model');
        // $CI->load->library("pagination");
        $config["total_rows"] = $CI->Curd_model->get_count_all($table);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        /*
          start
          add boostrap class and styles
        */
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        /*
          end
          add boostrap class and styles
        */
        return $config;
    }
}
