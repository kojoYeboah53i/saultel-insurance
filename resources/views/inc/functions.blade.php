@php

if (!function_exists('setTitle')) :
    function setTitle($page_name) {

        // echo $page_name;

        $admin_name = '| CORK - Multipurpose Bootstrap Dashboard Template';

        if ($page_name === 'analytics') :
            echo 'CORK Admin - Multipurpose Bootstrap Dashboard Template';
        elseif ($page_name === 'sales') :
            echo 'Sales Admin ' . $admin_name;

                  // Apps
        elseif ($page_name === 'calendar') :
            echo 'Fullcalendar Drag and Drop Event ' . $admin_name;
            
        // User
        elseif ($page_name === 'account_settings') :
            echo 'Account Settings ' . $admin_name;
        elseif ($page_name === 'profile') :
            echo 'User Profile ' . $admin_name;

        // Widgets
        elseif ($page_name === 'widgets') :
            echo 'Widgets ' . $admin_name;
        endif;

        }
endif;
    
    // Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

@endphp