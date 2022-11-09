<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'ebeef0abf3e55c07aef6',
    '59cef9d16458a9e234e6',
    '1432181',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>