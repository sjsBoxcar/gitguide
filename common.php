<?php

function forLogin() 
{
    $fx = 1;
    $fy = 3;
    $fz = $fx + $fy;
    return $fz;
}

function forBoard()
{
    $fa = 1;
    $fb = forLogin();   # -- forLogin 함수 값 사용
    $fd = 9;    # -- 추가 충돌 병합 위함
    $fc = $fa + $fb;
    return $fc;
}

# -- 추가
function rtnTwo()
{
    return 2;
}
?>