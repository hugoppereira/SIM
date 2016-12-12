<?php


function GetColor($glicemia, $difresp, $probcard, $fracturas, $tonturas, $tensao, $hemorragia, $azia, $vomitos, $cefaleia)
{

    if
    (
        (
            $fracturas == 1
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 99 ||
            $glicemia == 102 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 123 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 180
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -1;
        $class = 1;
    }

    /*Terminal Node 2*/
    if
    (
        (
            $vomitos == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 99 ||
            $glicemia == 102 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 123 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 180
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -2;
        $class = 2;
    }

    /*Terminal Node 3*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 99 ||
            $glicemia == 102 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 123 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 180
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -3;
        $class = 1;
    }

    /*Terminal Node 4*/
    if
    (
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 99 ||
            $glicemia == 102 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 123 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 180
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -4;
        $class = 2;
    }

    /*Terminal Node 5*/
    if
    (
        (
            $fracturas == 1
        ) &&
        (
            $glicemia == 108 ||
            $glicemia == 125 ||
            $glicemia == 146 ||
            $glicemia == 156 ||
            $glicemia == 160 ||
            $glicemia == 166
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -5;
        $class = 1;
    }

    /*Terminal Node 6*/
    if
    (
        (
            $cefaleia == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 108 ||
            $glicemia == 125 ||
            $glicemia == 146 ||
            $glicemia == 156 ||
            $glicemia == 160 ||
            $glicemia == 166
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -6;
        $class = 1;
    }

    /*Terminal Node 7*/
    if
    (
        (
            $cefaleia == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 108 ||
            $glicemia == 125 ||
            $glicemia == 146 ||
            $glicemia == 156 ||
            $glicemia == 160 ||
            $glicemia == 166
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -7;
        $class = 2;
    }

    /*Terminal Node 8*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 98 ||
            $glicemia == 100 ||
            $glicemia == 101 ||
            $glicemia == 103 ||
            $glicemia == 104 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 107 ||
            $glicemia == 109 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 116 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 128 ||
            $glicemia == 129 ||
            $glicemia == 130 ||
            $glicemia == 131 ||
            $glicemia == 133 ||
            $glicemia == 135 ||
            $glicemia == 138 ||
            $glicemia == 139 ||
            $glicemia == 142 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 150 ||
            $glicemia == 152 ||
            $glicemia == 153 ||
            $glicemia == 154 ||
            $glicemia == 155 ||
            $glicemia == 157 ||
            $glicemia == 158 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 163 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 168 ||
            $glicemia == 169 ||
            $glicemia == 170 ||
            $glicemia == 172 ||
            $glicemia == 173 ||
            $glicemia == 174 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 178 ||
            $glicemia == 179 ||
            $glicemia == 181 ||
            $glicemia == 182 ||
            $glicemia == 183 ||
            $glicemia == 184 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -8;
        $class = 1;
    }

    /*Terminal Node 9*/
    if
    (
        (
            $fracturas == 1
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 123 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 130 ||
            $glicemia == 131 ||
            $glicemia == 132 ||
            $glicemia == 135 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 148 ||
            $glicemia == 157 ||
            $glicemia == 168 ||
            $glicemia == 171 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 177 ||
            $glicemia == 179 ||
            $glicemia == 181 ||
            $glicemia == 184 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -9;
        $class = 2;
    }

    /*Terminal Node 10*/
    if
    (
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 123 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 130 ||
            $glicemia == 131 ||
            $glicemia == 132 ||
            $glicemia == 135 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 148 ||
            $glicemia == 157 ||
            $glicemia == 168 ||
            $glicemia == 171 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 177 ||
            $glicemia == 179 ||
            $glicemia == 181 ||
            $glicemia == 184 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -10;
        $class = 2;
    }

    /*Terminal Node 11*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 99 ||
            $glicemia == 114 ||
            $glicemia == 130 ||
            $glicemia == 131 ||
            $glicemia == 132 ||
            $glicemia == 135 ||
            $glicemia == 145 ||
            $glicemia == 168 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 179 ||
            $glicemia == 181
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -11;
        $class = 3;
    }

    /*Terminal Node 12*/
    if
    (
        (
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 143 ||
            $glicemia == 148 ||
            $glicemia == 177 ||
            $glicemia == 184 ||
            $glicemia == 186
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 19
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -12;
        $class = 3;
    }

    /*Terminal Node 13*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 120 ||
            $glicemia == 123 ||
            $glicemia == 126 ||
            $glicemia == 141 ||
            $glicemia == 144 ||
            $glicemia == 157 ||
            $glicemia == 171 ||
            $glicemia == 185
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 19
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -13;
        $class = 2;
    }

    /*Terminal Node 14*/
    if
    (
        (
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 120 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 141 ||
            $glicemia == 144 ||
            $glicemia == 157 ||
            $glicemia == 171 ||
            $glicemia == 184
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 19
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -14;
        $class = 3;
    }

    /*Terminal Node 15*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 123 ||
            $glicemia == 143 ||
            $glicemia == 148 ||
            $glicemia == 177 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 19
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -15;
        $class = 2;
    }

    /*Terminal Node 16*/
    if
    (
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18
        ) &&
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 123 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 141 ||
            $glicemia == 143 ||
            $glicemia == 144 ||
            $glicemia == 148 ||
            $glicemia == 157 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 184 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -16;
        $class = 2;
    }

    /*Terminal Node 17*/
    if
    (
        (
            $glicemia == 97 ||
            $glicemia == 101 ||
            $glicemia == 102 ||
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 107 ||
            $glicemia == 108 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 121 ||
            $glicemia == 125 ||
            $glicemia == 128 ||
            $glicemia == 129 ||
            $glicemia == 133 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 138 ||
            $glicemia == 139 ||
            $glicemia == 140 ||
            $glicemia == 142 ||
            $glicemia == 146 ||
            $glicemia == 147 ||
            $glicemia == 149 ||
            $glicemia == 150 ||
            $glicemia == 151 ||
            $glicemia == 152 ||
            $glicemia == 153 ||
            $glicemia == 154 ||
            $glicemia == 155 ||
            $glicemia == 156 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 160 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 163 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 167 ||
            $glicemia == 169 ||
            $glicemia == 170 ||
            $glicemia == 172 ||
            $glicemia == 173 ||
            $glicemia == 174 ||
            $glicemia == 178 ||
            $glicemia == 180 ||
            $glicemia == 182 ||
            $glicemia == 183
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 1
        )
    ) {
        //Node = -17;
        $class = 2;
    }

    /*Terminal Node 18*/
    if
    (
        (
            $glicemia == 114 ||
            $glicemia == 117 ||
            $glicemia == 122 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 137 ||
            $glicemia == 142 ||
            $glicemia == 145 ||
            $glicemia == 146 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 152 ||
            $glicemia == 153 ||
            $glicemia == 176 ||
            $glicemia == 180 ||
            $glicemia == 182
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -18;
        $class = 2;
    }

    /*Terminal Node 19*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 97 ||
            $glicemia == 107 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 129 ||
            $glicemia == 133 ||
            $glicemia == 136 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -19;
        $class = 2;
    }

    /*Terminal Node 20*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15
        ) &&
        (
            $glicemia == 97 ||
            $glicemia == 107 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 129 ||
            $glicemia == 133 ||
            $glicemia == 136 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -20;
        $class = 3;
    }

    /*Terminal Node 21*/
    if
    (
        (
            $glicemia == 97 ||
            $glicemia == 114 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 132 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 142 ||
            $glicemia == 145 ||
            $glicemia == 146 ||
            $glicemia == 147 ||
            $glicemia == 152 ||
            $glicemia == 153 ||
            $glicemia == 164 ||
            $glicemia == 165
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -21;
        $class = 3;
    }

    /*Terminal Node 22*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 15 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 117 ||
            $glicemia == 127 ||
            $glicemia == 129 ||
            $glicemia == 133 ||
            $glicemia == 151 ||
            $glicemia == 176 ||
            $glicemia == 180 ||
            $glicemia == 182 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -22;
        $class = 3;
    }

    /*Terminal Node 23*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 16
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 117 ||
            $glicemia == 127 ||
            $glicemia == 129 ||
            $glicemia == 133 ||
            $glicemia == 151 ||
            $glicemia == 176 ||
            $glicemia == 180 ||
            $glicemia == 182 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -23;
        $class = 2;
    }

    /*Terminal Node 24*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 99 ||
            $glicemia == 106 ||
            $glicemia == 126 ||
            $glicemia == 154 ||
            $glicemia == 155 ||
            $glicemia == 156 ||
            $glicemia == 157 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 160 ||
            $glicemia == 163 ||
            $glicemia == 166 ||
            $glicemia == 167 ||
            $glicemia == 168 ||
            $glicemia == 170 ||
            $glicemia == 172 ||
            $glicemia == 173 ||
            $glicemia == 174 ||
            $glicemia == 175 ||
            $glicemia == 178 ||
            $glicemia == 179 ||
            $glicemia == 181
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -24;
        $class = 2;
    }

    /*Terminal Node 25*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 130 ||
            $glicemia == 143 ||
            $glicemia == 148 ||
            $glicemia == 169 ||
            $glicemia == 183 ||
            $glicemia == 185 ||
            $glicemia == 186
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -25;
        $class = 2;
    }

    /*Terminal Node 26*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 148 ||
            $glicemia == 169 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -26;
        $class = 2;
    }

    /*Terminal Node 27*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 148 ||
            $glicemia == 169 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -27;
        $class = 3;
    }

    /*Terminal Node 28*/
    if
    (
        (
            $tonturas == 0
        ) &&
        (
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 148 ||
            $glicemia == 169 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -28;
        $class = 3;
    }

    /*Terminal Node 29*/
    if
    (
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 115 ||
            $glicemia == 130 ||
            $glicemia == 143 ||
            $glicemia == 185
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -29;
        $class = 3;
    }

    /*Terminal Node 30*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 100 ||
            $glicemia == 102 ||
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 108 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 111 ||
            $glicemia == 112 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 123 ||
            $glicemia == 125 ||
            $glicemia == 128 ||
            $glicemia == 131 ||
            $glicemia == 135 ||
            $glicemia == 138 ||
            $glicemia == 139 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 144 ||
            $glicemia == 149 ||
            $glicemia == 150 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 171 ||
            $glicemia == 177
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -30;
        $class = 3;
    }

    /*Terminal Node 31*/
    if
    (
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 111 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 123 ||
            $glicemia == 137 ||
            $glicemia == 150 ||
            $glicemia == 171
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -31;
        $class = 3;
    }

    /*Terminal Node 32*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 111 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 123 ||
            $glicemia == 137 ||
            $glicemia == 150 ||
            $glicemia == 171
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -32;
        $class = 3;
    }

    /*Terminal Node 33*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 111 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 123 ||
            $glicemia == 137 ||
            $glicemia == 150 ||
            $glicemia == 171
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -33;
        $class = 4;
    }

    /*Terminal Node 34*/
    if
    (
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 125 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 140 ||
            $glicemia == 157 ||
            $glicemia == 167 ||
            $glicemia == 181 ||
            $glicemia == 182
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -34;
        $class = 3;
    }

    /*Terminal Node 35*/
    if
    (
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 116 ||
            $glicemia == 118 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 126 ||
            $glicemia == 163
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -35;
        $class = 3;
    }

    /*Terminal Node 36*/
    if
    (
        (
            $glicemia == 116 ||
            $glicemia == 118 ||
            $glicemia == 122 ||
            $glicemia == 124
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -36;
        $class = 4;
    }

    /*Terminal Node 37*/
    if
    (
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 119 ||
            $glicemia == 126 ||
            $glicemia == 163
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -37;
        $class = 4;
    }

    /*Terminal Node 38*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 119 ||
            $glicemia == 126 ||
            $glicemia == 163
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -38;
        $class = 3;
    }

    /*Terminal Node 39*/
    if
    (
        (
            $tensao == 13
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 119 ||
            $glicemia == 126 ||
            $glicemia == 163
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -39;
        $class = 4;
    }

    /*Terminal Node 40*/
    if
    (
        (
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 109 ||
            $glicemia == 115 ||
            $glicemia == 135 ||
            $glicemia == 162 ||
            $glicemia == 168
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -40;
        $class = 4;
    }

    /*Terminal Node 41*/
    if
    (
        (
            $glicemia == 112 ||
            $glicemia == 169 ||
            $glicemia == 170 ||
            $glicemia == 175 ||
            $glicemia == 178 ||
            $glicemia == 180
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -41;
        $class = 2;
    }

    /*Terminal Node 42*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 101 ||
            $glicemia == 102 ||
            $glicemia == 104 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 111 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 123 ||
            $glicemia == 125 ||
            $glicemia == 126 ||
            $glicemia == 135 ||
            $glicemia == 162 ||
            $glicemia == 163 ||
            $glicemia == 167 ||
            $glicemia == 169 ||
            $glicemia == 170 ||
            $glicemia == 171 ||
            $glicemia == 175 ||
            $glicemia == 178 ||
            $glicemia == 181
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -42;
        $class = 4;
    }

    /*Terminal Node 43*/
    if
    (
        (
            $glicemia == 157 ||
            $glicemia == 180 ||
            $glicemia == 182
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -43;
        $class = 2;
    }

    /*Terminal Node 44*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 150 ||
            $glicemia == 168
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -44;
        $class = 4;
    }

    /*Terminal Node 45*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $tensao == 13 ||
            $tensao == 15
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 150 ||
            $glicemia == 168
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -45;
        $class = 3;
    }

    /*Terminal Node 46*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $tensao == 13 ||
            $tensao == 15
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 137 ||
            $glicemia == 140 ||
            $glicemia == 150 ||
            $glicemia == 168
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -46;
        $class = 4;
    }

    /*Terminal Node 47*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 107 ||
            $glicemia == 115 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 137 ||
            $glicemia == 140
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -47;
        $class = 4;
    }

    /*Terminal Node 48*/
    if
    (
        (
            $glicemia == 137
        ) &&
        (
            $tensao == 14 ||
            $tensao == 15
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -48;
        $class = 4;
    }

    /*Terminal Node 49*/
    if
    (
        (
            $glicemia == 107 ||
            $glicemia == 115 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 140
        ) &&
        (
            $tensao == 14 ||
            $tensao == 15
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -49;
        $class = 3;
    }

    /*Terminal Node 50*/
    if
    (
        (
            $glicemia == 112 ||
            $glicemia == 116 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 150 ||
            $glicemia == 168
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -50;
        $class = 4;
    }

    /*Terminal Node 51*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $glicemia == 99 ||
            $glicemia == 113 ||
            $glicemia == 129 ||
            $glicemia == 131 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 164 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 12 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -51;
        $class = 3;
    }

    /*Terminal Node 52*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $glicemia == 99 ||
            $glicemia == 113 ||
            $glicemia == 129 ||
            $glicemia == 131 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 164 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 12 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -52;
        $class = 4;
    }

    /*Terminal Node 53*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 100 ||
            $glicemia == 103 ||
            $glicemia == 108 ||
            $glicemia == 121 ||
            $glicemia == 128 ||
            $glicemia == 134 ||
            $glicemia == 136 ||
            $glicemia == 141 ||
            $glicemia == 152 ||
            $glicemia == 165 ||
            $glicemia == 176 ||
            $glicemia == 184
        ) &&
        (
            $tensao == 12 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -53;
        $class = 3;
    }

    /*Terminal Node 54*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 99 ||
            $glicemia == 103 ||
            $glicemia == 108 ||
            $glicemia == 113 ||
            $glicemia == 121 ||
            $glicemia == 129 ||
            $glicemia == 131 ||
            $glicemia == 134 ||
            $glicemia == 141 ||
            $glicemia == 160 ||
            $glicemia == 166 ||
            $glicemia == 176 ||
            $glicemia == 177 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -54;
        $class = 3;
    }

    /*Terminal Node 55*/
    if
    (
        (
            $tonturas == 1
        ) &&
        (
            $glicemia == 100 ||
            $glicemia == 128 ||
            $glicemia == 136 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 152 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -55;
        $class = 2;
    }

    /*Terminal Node 56*/
    if
    (
        (
            $tonturas == 0
        ) &&
        (
            $glicemia == 100 ||
            $glicemia == 128 ||
            $glicemia == 136 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 152 ||
            $glicemia == 164 ||
            $glicemia == 165 ||
            $glicemia == 184
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -56;
        $class = 4;
    }

    /*Terminal Node 57*/
    if
    (
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 113 ||
            $glicemia == 128 ||
            $glicemia == 129 ||
            $glicemia == 134 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 165 ||
            $glicemia == 176
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -57;
        $class = 3;
    }

    /*Terminal Node 58*/
    if
    (
        (
            $tonturas == 1
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 113 ||
            $glicemia == 128 ||
            $glicemia == 129 ||
            $glicemia == 134 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 165 ||
            $glicemia == 176
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -58;
        $class = 3;
    }

    /*Terminal Node 59*/
    if
    (
        (
            $tonturas == 0
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 113 ||
            $glicemia == 128 ||
            $glicemia == 129 ||
            $glicemia == 134 ||
            $glicemia == 139 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 165 ||
            $glicemia == 176
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -59;
        $class = 4;
    }

    /*Terminal Node 60*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 103 ||
            $glicemia == 108 ||
            $glicemia == 121 ||
            $glicemia == 131 ||
            $glicemia == 136 ||
            $glicemia == 141 ||
            $glicemia == 152 ||
            $glicemia == 164 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 184 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -60;
        $class = 4;
    }

    /*Terminal Node 61*/
    if
    (
        (
            $glicemia == 97 ||
            $glicemia == 114 ||
            $glicemia == 130 ||
            $glicemia == 132 ||
            $glicemia == 138 ||
            $glicemia == 142 ||
            $glicemia == 143 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 146 ||
            $glicemia == 147 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 153 ||
            $glicemia == 154 ||
            $glicemia == 155 ||
            $glicemia == 156 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 161 ||
            $glicemia == 172 ||
            $glicemia == 173 ||
            $glicemia == 174 ||
            $glicemia == 179 ||
            $glicemia == 183 ||
            $glicemia == 185
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 1
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -61;
        $class = 3;
    }

    /*Terminal Node 62*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 98 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 106 ||
            $glicemia == 109 ||
            $glicemia == 112 ||
            $glicemia == 113 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 118 ||
            $glicemia == 119 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 125 ||
            $glicemia == 130 ||
            $glicemia == 133 ||
            $glicemia == 135 ||
            $glicemia == 138 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 147 ||
            $glicemia == 151 ||
            $glicemia == 156 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 167 ||
            $glicemia == 171 ||
            $glicemia == 172 ||
            $glicemia == 173 ||
            $glicemia == 177 ||
            $glicemia == 186
        ) &&
        (
            $azia == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -62;
        $class = 4;
    }

    /*Terminal Node 63*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 97 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 120 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 144 ||
            $glicemia == 146 ||
            $glicemia == 153 ||
            $glicemia == 159 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 164 ||
            $glicemia == 170 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 182
        ) &&
        (
            $azia == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -63;
        $class = 3;
    }

    /*Terminal Node 64*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 15
        ) &&
        (
            $glicemia == 97 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 120 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 144 ||
            $glicemia == 146 ||
            $glicemia == 153 ||
            $glicemia == 159 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 164 ||
            $glicemia == 170 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 182
        ) &&
        (
            $azia == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -64;
        $class = 4;
    }

    /*Terminal Node 65*/
    if
    (
        (
            $glicemia == 109 ||
            $glicemia == 113 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 122 ||
            $glicemia == 124 ||
            $glicemia == 125 ||
            $glicemia == 130 ||
            $glicemia == 135 ||
            $glicemia == 138 ||
            $glicemia == 146 ||
            $glicemia == 165 ||
            $glicemia == 167 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -65;
        $class = 3;
    }

    /*Terminal Node 66*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 106 ||
            $glicemia == 119 ||
            $glicemia == 151 ||
            $glicemia == 156 ||
            $glicemia == 161 ||
            $glicemia == 162 ||
            $glicemia == 166 ||
            $glicemia == 170 ||
            $glicemia == 173
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -66;
        $class = 4;
    }

    /*Terminal Node 67*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 146 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 170 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -67;
        $class = 5;
    }

    /*Terminal Node 68*/
    if
    (
        (
            $glicemia == 106 ||
            $glicemia == 113 ||
            $glicemia == 115 ||
            $glicemia == 130 ||
            $glicemia == 151 ||
            $glicemia == 156 ||
            $glicemia == 161 ||
            $glicemia == 176
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -68;
        $class = 4;
    }

    /*Terminal Node 69*/
    if
    (
        (
            $glicemia == 109 ||
            $glicemia == 116 ||
            $glicemia == 124 ||
            $glicemia == 125 ||
            $glicemia == 135 ||
            $glicemia == 138 ||
            $glicemia == 162 ||
            $glicemia == 167 ||
            $glicemia == 173 ||
            $glicemia == 175
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -69;
        $class = 4;
    }

    /*Terminal Node 70*/
    if
    (
        (
            $glicemia == 98 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 112 ||
            $glicemia == 118 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 133 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 144 ||
            $glicemia == 147 ||
            $glicemia == 153 ||
            $glicemia == 159 ||
            $glicemia == 164 ||
            $glicemia == 171 ||
            $glicemia == 172 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -70;
        $class = 4;
    }

    /*Terminal Node 71*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 117 ||
            $glicemia == 123 ||
            $glicemia == 137 ||
            $glicemia == 139 ||
            $glicemia == 160 ||
            $glicemia == 169 ||
            $glicemia == 178
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -71;
        $class = 3;
    }

    /*Terminal Node 72*/
    if
    (
        (
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 129 ||
            $glicemia == 132 ||
            $glicemia == 136 ||
            $glicemia == 154 ||
            $glicemia == 158 ||
            $glicemia == 168 ||
            $glicemia == 174 ||
            $glicemia == 180 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -72;
        $class = 3;
    }

    /*Terminal Node 73*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $tensao == 15
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 129 ||
            $glicemia == 132 ||
            $glicemia == 136 ||
            $glicemia == 154 ||
            $glicemia == 158 ||
            $glicemia == 168 ||
            $glicemia == 174 ||
            $glicemia == 180 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -73;
        $class = 3;
    }

    /*Terminal Node 74*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $tensao == 15
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 129 ||
            $glicemia == 132 ||
            $glicemia == 136 ||
            $glicemia == 154 ||
            $glicemia == 158 ||
            $glicemia == 168 ||
            $glicemia == 174 ||
            $glicemia == 180 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -74;
        $class = 4;
    }

    /*Terminal Node 75*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 114 ||
            $glicemia == 117 ||
            $glicemia == 123 ||
            $glicemia == 129 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 139 ||
            $glicemia == 158 ||
            $glicemia == 180
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -75;
        $class = 4;
    }

    /*Terminal Node 76*/
    if
    (
        (
            $tensao == 12
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 101 ||
            $glicemia == 104 ||
            $glicemia == 114 ||
            $glicemia == 117 ||
            $glicemia == 123 ||
            $glicemia == 129 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 139 ||
            $glicemia == 158 ||
            $glicemia == 180
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -76;
        $class = 5;
    }

    /*Terminal Node 77*/
    if
    (
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 132 ||
            $glicemia == 154 ||
            $glicemia == 160 ||
            $glicemia == 168 ||
            $glicemia == 169 ||
            $glicemia == 174 ||
            $glicemia == 178 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -77;
        $class = 3;
    }

    /*Terminal Node 78*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 132 ||
            $glicemia == 154 ||
            $glicemia == 160 ||
            $glicemia == 168 ||
            $glicemia == 169 ||
            $glicemia == 174 ||
            $glicemia == 178 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -78;
        $class = 4;
    }

    /*Terminal Node 79*/
    if
    (
        (
            $glicemia == 103 ||
            $glicemia == 128 ||
            $glicemia == 131 ||
            $glicemia == 134 ||
            $glicemia == 142 ||
            $glicemia == 143 ||
            $glicemia == 145 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 150 ||
            $glicemia == 152 ||
            $glicemia == 155 ||
            $glicemia == 157 ||
            $glicemia == 163 ||
            $glicemia == 179 ||
            $glicemia == 181 ||
            $glicemia == 185
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -79;
        $class = 3;
    }

    /*Terminal Node 80*/
    if
    (
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 123 ||
            $glicemia == 125 ||
            $glicemia == 126 ||
            $glicemia == 146 ||
            $glicemia == 154 ||
            $glicemia == 169 ||
            $glicemia == 170 ||
            $glicemia == 175
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -80;
        $class = 4;
    }

    /*Terminal Node 81*/
    if
    (
        (
            $glicemia == 101 ||
            $glicemia == 126 ||
            $glicemia == 154 ||
            $glicemia == 170
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -81;
        $class = 5;
    }

    /*Terminal Node 82*/
    if
    (
        (
            $glicemia == 98 ||
            $glicemia == 123 ||
            $glicemia == 125 ||
            $glicemia == 146 ||
            $glicemia == 169 ||
            $glicemia == 175
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -82;
        $class = 4;
    }

    /*Terminal Node 83*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $glicemia == 124 ||
            $glicemia == 127 ||
            $glicemia == 129 ||
            $glicemia == 130 ||
            $glicemia == 132 ||
            $glicemia == 135 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 138 ||
            $glicemia == 140 ||
            $glicemia == 142 ||
            $glicemia == 144 ||
            $glicemia == 147 ||
            $glicemia == 153 ||
            $glicemia == 164 ||
            $glicemia == 172 ||
            $glicemia == 180
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -83;
        $class = 4;
    }

    /*Terminal Node 84*/
    if
    (
        (
            $glicemia == 127 ||
            $glicemia == 144 ||
            $glicemia == 164 ||
            $glicemia == 180
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -84;
        $class = 3;
    }

    /*Terminal Node 85*/
    if
    (
        (
            $glicemia == 124 ||
            $glicemia == 129 ||
            $glicemia == 130 ||
            $glicemia == 132 ||
            $glicemia == 135 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 138 ||
            $glicemia == 140 ||
            $glicemia == 142 ||
            $glicemia == 147 ||
            $glicemia == 153 ||
            $glicemia == 172
        ) &&
        (
            $azia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -85;
        $class = 4;
    }

    /*Terminal Node 86*/
    if
    (
        (
            $glicemia == 141 ||
            $glicemia == 152 ||
            $glicemia == 155 ||
            $glicemia == 161 ||
            $glicemia == 168 ||
            $glicemia == 171 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -86;
        $class = 3;
    }

    /*Terminal Node 87*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 128 ||
            $glicemia == 131 ||
            $glicemia == 133 ||
            $glicemia == 139 ||
            $glicemia == 157 ||
            $glicemia == 166 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -87;
        $class = 4;
    }

    /*Terminal Node 88*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 15
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 128 ||
            $glicemia == 131 ||
            $glicemia == 133 ||
            $glicemia == 139 ||
            $glicemia == 157 ||
            $glicemia == 166 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -88;
        $class = 3;
    }

    /*Terminal Node 89*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 128 ||
            $glicemia == 131 ||
            $glicemia == 133 ||
            $glicemia == 139 ||
            $glicemia == 157 ||
            $glicemia == 166 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -89;
        $class = 4;
    }

    /*Terminal Node 90*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 102 ||
            $glicemia == 104 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 118 ||
            $glicemia == 134 ||
            $glicemia == 143 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 151 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 160 ||
            $glicemia == 163 ||
            $glicemia == 174 ||
            $glicemia == 176 ||
            $glicemia == 178 ||
            $glicemia == 181 ||
            $glicemia == 184 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -90;
        $class = 4;
    }

    /*Terminal Node 91*/
    if
    (
        (
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 102 ||
            $glicemia == 104 ||
            $glicemia == 107 ||
            $glicemia == 110 ||
            $glicemia == 112 ||
            $glicemia == 118 ||
            $glicemia == 134 ||
            $glicemia == 143 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 151 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 160 ||
            $glicemia == 163 ||
            $glicemia == 174 ||
            $glicemia == 176 ||
            $glicemia == 178 ||
            $glicemia == 181 ||
            $glicemia == 184 ||
            $glicemia == 186
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -91;
        $class = 5;
    }

    /*Terminal Node 92*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 108 ||
            $glicemia == 109 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 117 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 145 ||
            $glicemia == 150 ||
            $glicemia == 156 ||
            $glicemia == 162 ||
            $glicemia == 165 ||
            $glicemia == 167 ||
            $glicemia == 179 ||
            $glicemia == 183
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -92;
        $class = 4;
    }

    /*Terminal Node 93*/
    if
    (
        (
            $vomitos == 1
        ) &&
        (
            $glicemia == 114 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 156 ||
            $glicemia == 165
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -93;
        $class = 4;
    }

    /*Terminal Node 94*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 114 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 156 ||
            $glicemia == 165
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -94;
        $class = 5;
    }

    /*Terminal Node 95*/
    if
    (
        (
            $glicemia == 119
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -95;
        $class = 5;
    }

    /*Terminal Node 96*/
    if
    (
        (
            $tensao == 14
        ) &&
        (
            $glicemia == 114 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 122 ||
            $glicemia == 156 ||
            $glicemia == 165
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -96;
        $class = 4;
    }

    /*Terminal Node 97*/
    if
    (
        (
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 109 ||
            $glicemia == 117 ||
            $glicemia == 150 ||
            $glicemia == 179
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -97;
        $class = 5;
    }

    /*Terminal Node 98*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 145 ||
            $glicemia == 162 ||
            $glicemia == 167 ||
            $glicemia == 183
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -98;
        $class = 4;
    }

    /*Terminal Node 99*/
    if
    (
        (
            $tensao == 13
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 113 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 145 ||
            $glicemia == 162 ||
            $glicemia == 167 ||
            $glicemia == 183
        ) &&
        (
            $azia == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -99;
        $class = 5;
    }

    /*Terminal Node 100*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 96 ||
            $glicemia == 97 ||
            $glicemia == 100 ||
            $glicemia == 102 ||
            $glicemia == 104 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 134 ||
            $glicemia == 143 ||
            $glicemia == 145 ||
            $glicemia == 162 ||
            $glicemia == 174 ||
            $glicemia == 178 ||
            $glicemia == 181 ||
            $glicemia == 184
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -100;
        $class = 5;
    }

    /*Terminal Node 101*/
    if
    (
        (
            $glicemia == 99 ||
            $glicemia == 115 ||
            $glicemia == 150 ||
            $glicemia == 158 ||
            $glicemia == 163 ||
            $glicemia == 179
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -101;
        $class = 4;
    }

    /*Terminal Node 102*/
    if
    (
        (
            $glicemia == 107 ||
            $glicemia == 109 ||
            $glicemia == 159 ||
            $glicemia == 176
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -102;
        $class = 5;
    }

    /*Terminal Node 103*/
    if
    (
        (
            $glicemia == 106 ||
            $glicemia == 112 ||
            $glicemia == 118 ||
            $glicemia == 119
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -103;
        $class = 5;
    }

    /*Terminal Node 104*/
    if
    (
        (
            $glicemia == 117 ||
            $glicemia == 122 ||
            $glicemia == 151
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -104;
        $class = 5;
    }

    /*Terminal Node 105*/
    if
    (
        (
            $glicemia == 106 ||
            $glicemia == 112 ||
            $glicemia == 117 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 151
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -105;
        $class = 5;
    }

    /*Terminal Node 106*/
    if
    (
        (
            $glicemia == 118
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -106;
        $class = 4;
    }

    /*Terminal Node 107*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 13
        ) &&
        (
            $glicemia == 99 ||
            $glicemia == 106 ||
            $glicemia == 107 ||
            $glicemia == 109 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 119 ||
            $glicemia == 122 ||
            $glicemia == 150 ||
            $glicemia == 151 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 163 ||
            $glicemia == 176 ||
            $glicemia == 179
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -107;
        $class = 5;
    }

    /*Terminal Node 108*/
    if
    (
        (
            $glicemia == 111 ||
            $glicemia == 120 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 156 ||
            $glicemia == 160 ||
            $glicemia == 165 ||
            $glicemia == 167
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -108;
        $class = 4;
    }

    /*Terminal Node 109*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 108 ||
            $glicemia == 110 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -109;
        $class = 4;
    }

    /*Terminal Node 110*/
    if
    (
        (
            $tensao == 13
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 108 ||
            $glicemia == 110 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -110;
        $class = 5;
    }

    /*Terminal Node 111*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 105 ||
            $glicemia == 108 ||
            $glicemia == 110 ||
            $glicemia == 111 ||
            $glicemia == 120 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 156 ||
            $glicemia == 160 ||
            $glicemia == 165 ||
            $glicemia == 167 ||
            $glicemia == 183 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -111;
        $class = 5;
    }

    /*Terminal Node 112*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 97 ||
            $glicemia == 103 ||
            $glicemia == 104 ||
            $glicemia == 106 ||
            $glicemia == 112 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 122 ||
            $glicemia == 134 ||
            $glicemia == 143 ||
            $glicemia == 145 ||
            $glicemia == 150 ||
            $glicemia == 156 ||
            $glicemia == 158 ||
            $glicemia == 159 ||
            $glicemia == 162 ||
            $glicemia == 167 ||
            $glicemia == 174 ||
            $glicemia == 178 ||
            $glicemia == 181 ||
            $glicemia == 183 ||
            $glicemia == 184
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -112;
        $class = 4;
    }

    /*Terminal Node 113*/
    if
    (
        (
            $cefaleia == 1
        ) &&
        (
            $glicemia == 96 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 108 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 111 ||
            $glicemia == 114 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 117 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 163 ||
            $glicemia == 165 ||
            $glicemia == 176 ||
            $glicemia == 179 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -113;
        $class = 4;
    }

    /*Terminal Node 114*/
    if
    (
        (
            $cefaleia == 0
        ) &&
        (
            $glicemia == 96 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 102 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 108 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 111 ||
            $glicemia == 114 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 117 ||
            $glicemia == 119 ||
            $glicemia == 120 ||
            $glicemia == 121 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 151 ||
            $glicemia == 160 ||
            $glicemia == 163 ||
            $glicemia == 165 ||
            $glicemia == 176 ||
            $glicemia == 179 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16
        ) &&
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $fracturas == 1
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -114;
        $class = 5;
    }

    /*Terminal Node 115*/
    if
    (
        (
            $glicemia == 96 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 154 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 176 ||
            $glicemia == 183
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -115;
        $class = 3;
    }

    /*Terminal Node 116*/
    if
    (
        (
            $cefaleia == 1
        ) &&
        (
            $glicemia == 125 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 139 ||
            $glicemia == 150 ||
            $glicemia == 172 ||
            $glicemia == 174 ||
            $glicemia == 175 ||
            $glicemia == 178
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -116;
        $class = 4;
    }

    /*Terminal Node 117*/
    if
    (
        (
            $cefaleia == 0
        ) &&
        (
            $glicemia == 125 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 139 ||
            $glicemia == 150 ||
            $glicemia == 172 ||
            $glicemia == 174 ||
            $glicemia == 175 ||
            $glicemia == 178
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -117;
        $class = 5;
    }

    /*Terminal Node 118*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 96 ||
            $glicemia == 125 ||
            $glicemia == 126 ||
            $glicemia == 127 ||
            $glicemia == 139 ||
            $glicemia == 144 ||
            $glicemia == 145 ||
            $glicemia == 150 ||
            $glicemia == 154 ||
            $glicemia == 159 ||
            $glicemia == 167 ||
            $glicemia == 172 ||
            $glicemia == 174 ||
            $glicemia == 175 ||
            $glicemia == 176 ||
            $glicemia == 178 ||
            $glicemia == 183
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -118;
        $class = 4;
    }

    /*Terminal Node 119*/
    if
    (
        (
            $glicemia == 130 ||
            $glicemia == 131 ||
            $glicemia == 132 ||
            $glicemia == 133 ||
            $glicemia == 134 ||
            $glicemia == 135 ||
            $glicemia == 136 ||
            $glicemia == 137 ||
            $glicemia == 138 ||
            $glicemia == 140 ||
            $glicemia == 141 ||
            $glicemia == 142 ||
            $glicemia == 143 ||
            $glicemia == 153 ||
            $glicemia == 155 ||
            $glicemia == 156 ||
            $glicemia == 157 ||
            $glicemia == 160 ||
            $glicemia == 161 ||
            $glicemia == 168 ||
            $glicemia == 169 ||
            $glicemia == 181 ||
            $glicemia == 184
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -119;
        $class = 4;
    }

    /*Terminal Node 120*/
    if
    (
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 95 ||
            $glicemia == 97 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 103 ||
            $glicemia == 104 ||
            $glicemia == 105 ||
            $glicemia == 106 ||
            $glicemia == 107 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 119 ||
            $glicemia == 121 ||
            $glicemia == 124 ||
            $glicemia == 129 ||
            $glicemia == 151 ||
            $glicemia == 158 ||
            $glicemia == 162 ||
            $glicemia == 164 ||
            $glicemia == 171 ||
            $glicemia == 179 ||
            $glicemia == 180 ||
            $glicemia == 186
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -120;
        $class = 5;
    }

    /*Terminal Node 121*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 97 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 105 ||
            $glicemia == 108 ||
            $glicemia == 119 ||
            $glicemia == 164 ||
            $glicemia == 179 ||
            $glicemia == 186
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -121;
        $class = 5;
    }

    /*Terminal Node 122*/
    if
    (
        (
            $glicemia == 103 ||
            $glicemia == 106 ||
            $glicemia == 107 ||
            $glicemia == 111 ||
            $glicemia == 112 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 121 ||
            $glicemia == 124 ||
            $glicemia == 129 ||
            $glicemia == 151 ||
            $glicemia == 158 ||
            $glicemia == 162 ||
            $glicemia == 171 ||
            $glicemia == 180
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -122;
        $class = 4;
    }

    /*Terminal Node 123*/
    if
    (
        (
            $glicemia == 103 ||
            $glicemia == 106 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 116 ||
            $glicemia == 124 ||
            $glicemia == 162 ||
            $glicemia == 164
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -123;
        $class = 5;
    }

    /*Terminal Node 124*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $glicemia == 115 ||
            $glicemia == 119 ||
            $glicemia == 121 ||
            $glicemia == 151 ||
            $glicemia == 171 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -124;
        $class = 5;
    }

    /*Terminal Node 125*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $glicemia == 115 ||
            $glicemia == 119 ||
            $glicemia == 121 ||
            $glicemia == 151 ||
            $glicemia == 171 ||
            $glicemia == 186
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -125;
        $class = 5;
    }

    /*Terminal Node 126*/
    if
    (
        (
            $tensao == 14
        ) &&
        (
            $glicemia == 103 ||
            $glicemia == 106 ||
            $glicemia == 108 ||
            $glicemia == 111 ||
            $glicemia == 115 ||
            $glicemia == 116 ||
            $glicemia == 119 ||
            $glicemia == 121 ||
            $glicemia == 124 ||
            $glicemia == 151 ||
            $glicemia == 162 ||
            $glicemia == 164 ||
            $glicemia == 171 ||
            $glicemia == 186
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -126;
        $class = 5;
    }

    /*Terminal Node 127*/
    if
    (
        (
            $glicemia == 95 ||
            $glicemia == 97 ||
            $glicemia == 99 ||
            $glicemia == 100 ||
            $glicemia == 104 ||
            $glicemia == 105 ||
            $glicemia == 107 ||
            $glicemia == 112 ||
            $glicemia == 129 ||
            $glicemia == 158 ||
            $glicemia == 179 ||
            $glicemia == 180
        ) &&
        (
            $tensao == 12 ||
            $tensao == 13 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -127;
        $class = 5;
    }

    /*Terminal Node 128*/
    if
    (
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 147 ||
            $glicemia == 163 ||
            $glicemia == 177
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -128;
        $class = 5;
    }

    /*Terminal Node 129*/
    if
    (
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 147 ||
            $glicemia == 163 ||
            $glicemia == 177
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -129;
        $class = 4;
    }

    /*Terminal Node 130*/
    if
    (
        (
            $glicemia == 117 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 182
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -130;
        $class = 5;
    }

    /*Terminal Node 131*/
    if
    (
        (
            $glicemia == 102 ||
            $glicemia == 120 ||
            $glicemia == 128 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -131;
        $class = 5;
    }

    /*Terminal Node 132*/
    if
    (
        (
            $glicemia == 117 ||
            $glicemia == 122 ||
            $glicemia == 147 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 163 ||
            $glicemia == 165
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -132;
        $class = 4;
    }

    /*Terminal Node 133*/
    if
    (
        (
            $hemorragia == 0
        ) &&
        (
            $vomitos == 0
        ) &&
        (
            $tonturas == 1
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 147 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 163 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -133;
        $class = 5;
    }

    /*Terminal Node 134*/
    if
    (
        (
            $hemorragia == 1
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 147 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 163 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -134;
        $class = 5;
    }

    /*Terminal Node 135*/
    if
    (
        (
            $hemorragia == 0
        ) &&
        (
            $tonturas == 0
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 117 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 147 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 163 ||
            $glicemia == 165 ||
            $glicemia == 166 ||
            $glicemia == 177 ||
            $glicemia == 182
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14 ||
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -135;
        $class = 4;
    }

    /*Terminal Node 136*/
    if
    (
        (
            $glicemia == 101 ||
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 146 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -136;
        $class = 5;
    }

    /*Terminal Node 137*/
    if
    (
        (
            $glicemia == 98 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 118 ||
            $glicemia == 123 ||
            $glicemia == 152 ||
            $glicemia == 170
        ) &&
        (
            $tensao == 15 ||
            $tensao == 16 ||
            $tensao == 17 ||
            $tensao == 18 ||
            $tensao == 19
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -137;
        $class = 4;
    }

    /*Terminal Node 138*/
    if
    (
        (
            $tensao == 14
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 123 ||
            $glicemia == 152
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -138;
        $class = 5;
    }

    /*Terminal Node 139*/
    if
    (
        (
            $tensao == 12
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 123 ||
            $glicemia == 152
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -139;
        $class = 4;
    }

    /*Terminal Node 140*/
    if
    (
        (
            $tonturas == 1
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 146 ||
            $glicemia == 170 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -140;
        $class = 4;
    }

    /*Terminal Node 141*/
    if
    (
        (
            $tonturas == 0
        ) &&
        (
            $hemorragia == 1
        ) &&
        (
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 146 ||
            $glicemia == 170 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -141;
        $class = 5;
    }

    /*Terminal Node 142*/
    if
    (
        (
            $hemorragia == 0
        ) &&
        (
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 114 ||
            $glicemia == 146 ||
            $glicemia == 170 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $cefaleia == 1
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -142;
        $class = 5;
    }

    /*Terminal Node 143*/
    if
    (
        (
            $glicemia == 98 ||
            $glicemia == 101
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -143;
        $class = 4;
    }

    /*Terminal Node 144*/
    if
    (
        (
            $tensao == 14
        ) &&
        (
            $glicemia == 110 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $azia == 1
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -144;
        $class = 5;
    }

    /*Terminal Node 145*/
    if
    (
        (
            $tensao == 12
        ) &&
        (
            $glicemia == 110 ||
            $glicemia == 113 ||
            $glicemia == 118 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $azia == 1
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -145;
        $class = 4;
    }

    /*Terminal Node 146*/
    if
    (
        (
            $glicemia == 109 ||
            $glicemia == 152
        ) &&
        (
            $azia == 1
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -146;
        $class = 5;
    }

    /*Terminal Node 147*/
    if
    (
        (
            $glicemia == 114 ||
            $glicemia == 123 ||
            $glicemia == 146 ||
            $glicemia == 170
        ) &&
        (
            $azia == 1
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -147;
        $class = 4;
    }

    /*Terminal Node 148*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $glicemia == 109 ||
            $glicemia == 110 ||
            $glicemia == 113 ||
            $glicemia == 114 ||
            $glicemia == 118 ||
            $glicemia == 123 ||
            $glicemia == 146 ||
            $glicemia == 152 ||
            $glicemia == 170 ||
            $glicemia == 173 ||
            $glicemia == 185
        ) &&
        (
            $cefaleia == 0
        ) &&
        (
            $tensao == 12 ||
            $tensao == 14
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -148;
        $class = 5;
    }

    /*Terminal Node 149*/
    if
    (
        (
            $azia == 1
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 109 ||
            $glicemia == 114 ||
            $glicemia == 123 ||
            $glicemia == 147 ||
            $glicemia == 165 ||
            $glicemia == 173 ||
            $glicemia == 177 ||
            $glicemia == 185
        ) &&
        (
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -149;
        $class = 5;
    }

    /*Terminal Node 150*/
    if
    (
        (
            $azia == 0
        ) &&
        (
            $glicemia == 98 ||
            $glicemia == 101 ||
            $glicemia == 109 ||
            $glicemia == 114 ||
            $glicemia == 123 ||
            $glicemia == 147 ||
            $glicemia == 165 ||
            $glicemia == 173 ||
            $glicemia == 177 ||
            $glicemia == 185
        ) &&
        (
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -150;
        $class = 4;
    }

    /*Terminal Node 151*/
    if
    (
        (
            $glicemia == 110 ||
            $glicemia == 113 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 149 ||
            $glicemia == 152 ||
            $glicemia == 182
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -151;
        $class = 5;
    }

    /*Terminal Node 152*/
    if
    (
        (
            $glicemia == 102 ||
            $glicemia == 146 ||
            $glicemia == 148 ||
            $glicemia == 163 ||
            $glicemia == 166 ||
            $glicemia == 170
        ) &&
        (
            $vomitos == 1
        ) &&
        (
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -152;
        $class = 4;
    }

    /*Terminal Node 153*/
    if
    (
        (
            $vomitos == 0
        ) &&
        (
            $glicemia == 102 ||
            $glicemia == 110 ||
            $glicemia == 113 ||
            $glicemia == 117 ||
            $glicemia == 118 ||
            $glicemia == 120 ||
            $glicemia == 122 ||
            $glicemia == 128 ||
            $glicemia == 146 ||
            $glicemia == 148 ||
            $glicemia == 149 ||
            $glicemia == 152 ||
            $glicemia == 163 ||
            $glicemia == 166 ||
            $glicemia == 170 ||
            $glicemia == 182
        ) &&
        (
            $tensao == 13
        ) &&
        (
            $fracturas == 0
        ) &&
        (
            $probcard == 0
        ) &&
        (
            $difresp == 0
        )
    ) {
        //Node = -153;
        $class = 5;
    }

    return $class;
}

?>