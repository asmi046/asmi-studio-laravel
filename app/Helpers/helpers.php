<?php
    if (!function_exists('color_diff')) { 
        function color_diff($clr1) {


            $color_s = [
                "#FFCB04" => "#000000",
                "#89D0CE" => "#000000",
                "#E4EFF5" => "#000000",
                "#E3E7EF" => "#000000",
                "#F3F3F5" => "#000000",
                "#E0E1E3" => "#000000",
                "#D8DF20" => "#000000",
                "#FFDE01" => "#000000",
                "#E8E9ED" => "#000000",
                "#E8E9EB" => "#000000",
                "#E1E6ED" => "#000000",
                "#FAB347" => "#000000",
                "#E8E9ED" => "#000000",
                "#D3D3D3" => "#000000",
                "#FCEDEA" => "#000000",
                "#BFE4EA" => "#000000",
            ];

            return (isset($color_s[strtoupper($clr1)]))?$color_s[strtoupper($clr1)]:"#FFFFFF";
        }
    }
?>