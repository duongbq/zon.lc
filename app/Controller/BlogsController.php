<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogsController
 *
 * @author duongbq
 */
class BlogsController extends AppController {

    var $layout = 'zon';
    public $helpers = array('Html', 'Text');
    public $components = array('Paginator', 'RequestHandler');
    public $paginate = array(
        'limit' => 3,
        'order' => array(
            'Blog.publish_date' => 'desc'
        )
    );

    public function index() {

        if ($this->RequestHandler->isRss()) {
            $blogs = $this->Blog->find(
                    'all', array('limit' => 9, 'order' => 'Blog.publish_date desc')
            );
            return $this->set(compact('blogs'));
        }

        $this->Paginator->settings = $this->paginate;
        $blogs = $this->Paginator->paginate('Blog', array('Blog.publish_status' => 1));
        $this->set('blogs', $blogs);
        $this->set('title_for_layout', 'Blogs - ZonStudio');
    }

}
