<?php

$this->set('channelData', array(
    'title' => __("Most Recent Blogs"),
    'link' => $this->Html->url('/', true),
    'description' => __("Most recent posts."),
    'language' => 'en-us'
));

foreach ($blogs as $blog) {
    
//    $postTime = strtotime($blog['Blog']['publish_date']);

    $postLink = array(
        'controller' => 'blogs',
        'action' => 'view',
//        'year' => date('Y', $postTime),
//        'month' => date('m', $postTime),
//        'day' => date('d', $postTime),
        $blog['Blog']['id']
    );

    // Remove & escape any HTML to make sure the feed content will validate.
    $bodyText = h(strip_tags($blog['Blog']['sumary']));
    $bodyText = $this->Text->truncate($bodyText, 400, array(
        'ending' => '...',
        'exact' => true,
        'html' => true,
    ));

    echo $this->Rss->item(array(), array(
        'title' => $blog['Blog']['title'],
        'link' => $postLink,
        'guid' => array('url' => $postLink, 'isPermaLink' => 'true'),
        'description' => $bodyText,
        'pubDate' => $blog['Blog']['publish_date']
    ));
}