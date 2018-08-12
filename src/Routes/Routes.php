<?php
  $app->group('/notice', function() {
    $this->get('', '\App\Controllers\NoticeController:listNotice');
    $this->post('', '\App\Controllers\NoticeController:createNotice');
  });