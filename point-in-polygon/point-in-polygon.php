<?php
function point_in_polygon($point, $vs) {
    $x = $point[0];
    $y = $point[1];
    
    $inside = false;
    for ($i = 0, $j = count($vs) - 1; $i < count($vs); $j = $i++) {
        $xi = $vs[$i][0];
        $yi = $vs[$i][1];
        $xj = $vs[$j][0];
        $yj = $vs[$j][1];
        
        $intersect = (($yi > $y) != ($yj > $y))
            && ($x < ($xj - $xi) * ($y - $yi) / ($yj - $yi) + $xi);
        if ($intersect) $inside = !$inside;
    }
    
    return $inside;
};
