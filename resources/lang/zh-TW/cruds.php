<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'service'        => [
        'title'          => '服務',
        'title_singular' => '服務',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'price'             => '價格',
            'price_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'employee'       => [
        'title'          => '員工',
        'title_singular' => '員工',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '姓名',
            'name_helper'       => '',
            'email'             => '電子郵件',
            'email_helper'      => '',
            'phone'             => '電話',
            'phone_helper'      => '',
            'photo'             => '照片',
            'photo_helper'      => '',
            'services'          => '服務',
            'services_helper'   => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'client'         => [
        'title'          => '客戶',
        'title_singular' => '客戶',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '姓名',
            'name_helper'       => '',
            'phone'             => '照片',
            'phone_helper'      => '',
            'email'             => '電子郵件',
            'email_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'appointment'    => [
        'title'          => '預約',
        'title_singular' => '預約',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'client'             => '客戶',
            'client_helper'      => '',
            'employee'           => '員工',
            'employee_helper'    => '',
            'start_time'         => '開始時間',
            'start_time_helper'  => '',
            'finish_time'        => '結束時間',
            'finish_time_helper' => '',
            'price'              => '價格',
            'price_helper'       => '',
            'comments'           => '評論',
            'comments_helper'    => '',
            'services'           => '服務',
            'services_helper'    => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
];
