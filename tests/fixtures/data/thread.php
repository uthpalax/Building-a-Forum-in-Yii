<?php
$time =  date('Y-m-d H:i:s');

return [
    'thread1' => [
        'user_id' => 1,
        'title' => 'My First thread',
        'body' => 'First thread body',
        'created_at' => $time,
        'updated_at' => $time,
    ],    
    'thread2' => [
        'user_id' => 2,
        'title' => 'My Second thread',
        'body' => 'Second thread body',
        'created_at' => $time,
        'updated_at' => $time,
    ],
];