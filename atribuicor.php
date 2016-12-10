<?php

/*Terminal Node 1*/
if
(
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 1
    )
) {
    terminalNode = 1;

    class = 2;
}

/*Terminal Node 2*/
if
(
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 1
    )
) {
    terminalNode = 2;

    class = 1;
}

/*Terminal Node 3*/
if
(
    (
        TONTURAS == 1
    ) &&
    (
        FRACTURAS == 1
    ) &&
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 3;

    class = 4;
}

/*Terminal Node 4*/
if
(
    (
        GLICEMIA == 97 ||
        GLICEMIA == 98 ||
        GLICEMIA == 99 ||
        GLICEMIA == 100 ||
        GLICEMIA == 101 ||
        GLICEMIA == 102 ||
        GLICEMIA == 103 ||
        GLICEMIA == 104 ||
        GLICEMIA == 106 ||
        GLICEMIA == 108 ||
        GLICEMIA == 109 ||
        GLICEMIA == 110 ||
        GLICEMIA == 111 ||
        GLICEMIA == 112 ||
        GLICEMIA == 113 ||
        GLICEMIA == 114 ||
        GLICEMIA == 115 ||
        GLICEMIA == 116 ||
        GLICEMIA == 117 ||
        GLICEMIA == 137 ||
        GLICEMIA == 145 ||
        GLICEMIA == 146 ||
        GLICEMIA == 147 ||
        GLICEMIA == 148 ||
        GLICEMIA == 149 ||
        GLICEMIA == 150 ||
        GLICEMIA == 151 ||
        GLICEMIA == 152 ||
        GLICEMIA == 155 ||
        GLICEMIA == 156 ||
        GLICEMIA == 157 ||
        GLICEMIA == 158 ||
        GLICEMIA == 160 ||
        GLICEMIA == 161 ||
        GLICEMIA == 162 ||
        GLICEMIA == 163 ||
        GLICEMIA == 164 ||
        GLICEMIA == 165 ||
        GLICEMIA == 166 ||
        GLICEMIA == 167 ||
        GLICEMIA == 168 ||
        GLICEMIA == 171 ||
        GLICEMIA == 172 ||
        GLICEMIA == 173 ||
        GLICEMIA == 174 ||
        GLICEMIA == 175 ||
        GLICEMIA == 177 ||
        GLICEMIA == 178 ||
        GLICEMIA == 179 ||
        GLICEMIA == 180 ||
        GLICEMIA == 182 ||
        GLICEMIA == 183 ||
        GLICEMIA == 185
    ) &&
    (
        TONTURAS == 0
    ) &&
    (
        FRACTURAS == 1
    ) &&
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 4;

    class = 5;
}

/*Terminal Node 5*/
if
(
    (
        GLICEMIA == 96 ||
        GLICEMIA == 105 ||
        GLICEMIA == 107 ||
        GLICEMIA == 118 ||
        GLICEMIA == 119 ||
        GLICEMIA == 120 ||
        GLICEMIA == 121 ||
        GLICEMIA == 122 ||
        GLICEMIA == 123 ||
        GLICEMIA == 124 ||
        GLICEMIA == 125 ||
        GLICEMIA == 126 ||
        GLICEMIA == 127 ||
        GLICEMIA == 128 ||
        GLICEMIA == 129 ||
        GLICEMIA == 130 ||
        GLICEMIA == 131 ||
        GLICEMIA == 132 ||
        GLICEMIA == 133 ||
        GLICEMIA == 134 ||
        GLICEMIA == 135 ||
        GLICEMIA == 136 ||
        GLICEMIA == 138 ||
        GLICEMIA == 139 ||
        GLICEMIA == 140 ||
        GLICEMIA == 141 ||
        GLICEMIA == 142 ||
        GLICEMIA == 143 ||
        GLICEMIA == 144 ||
        GLICEMIA == 153 ||
        GLICEMIA == 154 ||
        GLICEMIA == 159 ||
        GLICEMIA == 169 ||
        GLICEMIA == 170
    ) &&
    (
        TONTURAS == 0
    ) &&
    (
        FRACTURAS == 1
    ) &&
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 5;

    class = 4;
}

/*Terminal Node 6*/
if
(
    (
        GLICEMIA == 97 ||
        GLICEMIA == 128 ||
        GLICEMIA == 130 ||
        GLICEMIA == 131 ||
        GLICEMIA == 132 ||
        GLICEMIA == 133 ||
        GLICEMIA == 134 ||
        GLICEMIA == 135 ||
        GLICEMIA == 136 ||
        GLICEMIA == 137 ||
        GLICEMIA == 139 ||
        GLICEMIA == 140 ||
        GLICEMIA == 141 ||
        GLICEMIA == 142 ||
        GLICEMIA == 143 ||
        GLICEMIA == 144 ||
        GLICEMIA == 145 ||
        GLICEMIA == 146 ||
        GLICEMIA == 147 ||
        GLICEMIA == 148 ||
        GLICEMIA == 149 ||
        GLICEMIA == 152 ||
        GLICEMIA == 153 ||
        GLICEMIA == 154 ||
        GLICEMIA == 155 ||
        GLICEMIA == 156 ||
        GLICEMIA == 157 ||
        GLICEMIA == 159 ||
        GLICEMIA == 160 ||
        GLICEMIA == 162 ||
        GLICEMIA == 163 ||
        GLICEMIA == 164 ||
        GLICEMIA == 165 ||
        GLICEMIA == 166 ||
        GLICEMIA == 167 ||
        GLICEMIA == 168 ||
        GLICEMIA == 169 ||
        GLICEMIA == 170 ||
        GLICEMIA == 171 ||
        GLICEMIA == 172 ||
        GLICEMIA == 173 ||
        GLICEMIA == 174 ||
        GLICEMIA == 175 ||
        GLICEMIA == 177 ||
        GLICEMIA == 178 ||
        GLICEMIA == 179 ||
        GLICEMIA == 180 ||
        GLICEMIA == 182 ||
        GLICEMIA == 183 ||
        GLICEMIA == 185
    ) &&
    (
        FRACTURAS == 0
    ) &&
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 6;

    class = 4;
}

/*Terminal Node 7*/
if
(
    (
        GLICEMIA == 96 ||
        GLICEMIA == 98 ||
        GLICEMIA == 99 ||
        GLICEMIA == 100 ||
        GLICEMIA == 101 ||
        GLICEMIA == 102 ||
        GLICEMIA == 103 ||
        GLICEMIA == 104 ||
        GLICEMIA == 105 ||
        GLICEMIA == 106 ||
        GLICEMIA == 107 ||
        GLICEMIA == 108 ||
        GLICEMIA == 109 ||
        GLICEMIA == 110 ||
        GLICEMIA == 111 ||
        GLICEMIA == 112 ||
        GLICEMIA == 113 ||
        GLICEMIA == 114 ||
        GLICEMIA == 115 ||
        GLICEMIA == 116 ||
        GLICEMIA == 117 ||
        GLICEMIA == 118 ||
        GLICEMIA == 119 ||
        GLICEMIA == 120 ||
        GLICEMIA == 121 ||
        GLICEMIA == 122 ||
        GLICEMIA == 123 ||
        GLICEMIA == 124 ||
        GLICEMIA == 125 ||
        GLICEMIA == 126 ||
        GLICEMIA == 127 ||
        GLICEMIA == 129 ||
        GLICEMIA == 138 ||
        GLICEMIA == 150 ||
        GLICEMIA == 151 ||
        GLICEMIA == 158 ||
        GLICEMIA == 161
    ) &&
    (
        FRACTURAS == 0
    ) &&
    (
        PROBLEMAS_CARDIACOS == 0
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 7;

    class = 5;
}

/*Terminal Node 8*/
if
(
    (
        GLICEMIA == 96 ||
        GLICEMIA == 97 ||
        GLICEMIA == 98 ||
        GLICEMIA == 101 ||
        GLICEMIA == 104 ||
        GLICEMIA == 105 ||
        GLICEMIA == 106 ||
        GLICEMIA == 107 ||
        GLICEMIA == 109 ||
        GLICEMIA == 110 ||
        GLICEMIA == 111 ||
        GLICEMIA == 112 ||
        GLICEMIA == 113 ||
        GLICEMIA == 114 ||
        GLICEMIA == 115 ||
        GLICEMIA == 116 ||
        GLICEMIA == 117 ||
        GLICEMIA == 118 ||
        GLICEMIA == 119 ||
        GLICEMIA == 120 ||
        GLICEMIA == 121 ||
        GLICEMIA == 122 ||
        GLICEMIA == 123 ||
        GLICEMIA == 124 ||
        GLICEMIA == 125 ||
        GLICEMIA == 126 ||
        GLICEMIA == 127 ||
        GLICEMIA == 128 ||
        GLICEMIA == 129 ||
        GLICEMIA == 130 ||
        GLICEMIA == 133 ||
        GLICEMIA == 135 ||
        GLICEMIA == 136 ||
        GLICEMIA == 137 ||
        GLICEMIA == 138 ||
        GLICEMIA == 140 ||
        GLICEMIA == 141 ||
        GLICEMIA == 142 ||
        GLICEMIA == 143 ||
        GLICEMIA == 147 ||
        GLICEMIA == 151 ||
        GLICEMIA == 152 ||
        GLICEMIA == 154 ||
        GLICEMIA == 155 ||
        GLICEMIA == 158 ||
        GLICEMIA == 160 ||
        GLICEMIA == 163 ||
        GLICEMIA == 164 ||
        GLICEMIA == 172 ||
        GLICEMIA == 173 ||
        GLICEMIA == 174 ||
        GLICEMIA == 175 ||
        GLICEMIA == 177 ||
        GLICEMIA == 178 ||
        GLICEMIA == 180 ||
        GLICEMIA == 182 ||
        GLICEMIA == 183 ||
        GLICEMIA == 185
    ) &&
    (
        FRACTURAS == 1
    ) &&
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 8;

    class = 3;
}

/*Terminal Node 9*/
if
(
    (
        GLICEMIA == 99 ||
        GLICEMIA == 100 ||
        GLICEMIA == 102 ||
        GLICEMIA == 103 ||
        GLICEMIA == 108 ||
        GLICEMIA == 131 ||
        GLICEMIA == 132 ||
        GLICEMIA == 134 ||
        GLICEMIA == 139 ||
        GLICEMIA == 144 ||
        GLICEMIA == 145 ||
        GLICEMIA == 146 ||
        GLICEMIA == 148 ||
        GLICEMIA == 149 ||
        GLICEMIA == 150 ||
        GLICEMIA == 153 ||
        GLICEMIA == 156 ||
        GLICEMIA == 157 ||
        GLICEMIA == 159 ||
        GLICEMIA == 161 ||
        GLICEMIA == 162 ||
        GLICEMIA == 165 ||
        GLICEMIA == 166 ||
        GLICEMIA == 167 ||
        GLICEMIA == 168 ||
        GLICEMIA == 169 ||
        GLICEMIA == 170 ||
        GLICEMIA == 171 ||
        GLICEMIA == 179
    ) &&
    (
        FRACTURAS == 1
    ) &&
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 9;

    class = 2;
}

/*Terminal Node 10*/
if
(
    (
        GLICEMIA == 96 ||
        GLICEMIA == 97 ||
        GLICEMIA == 100 ||
        GLICEMIA == 101 ||
        GLICEMIA == 102 ||
        GLICEMIA == 103 ||
        GLICEMIA == 107 ||
        GLICEMIA == 109 ||
        GLICEMIA == 110 ||
        GLICEMIA == 114 ||
        GLICEMIA == 115 ||
        GLICEMIA == 116 ||
        GLICEMIA == 118 ||
        GLICEMIA == 121 ||
        GLICEMIA == 127 ||
        GLICEMIA == 131 ||
        GLICEMIA == 134 ||
        GLICEMIA == 135 ||
        GLICEMIA == 136 ||
        GLICEMIA == 137 ||
        GLICEMIA == 139 ||
        GLICEMIA == 140 ||
        GLICEMIA == 141 ||
        GLICEMIA == 142 ||
        GLICEMIA == 143 ||
        GLICEMIA == 144 ||
        GLICEMIA == 145 ||
        GLICEMIA == 146 ||
        GLICEMIA == 147 ||
        GLICEMIA == 148 ||
        GLICEMIA == 149 ||
        GLICEMIA == 150 ||
        GLICEMIA == 151 ||
        GLICEMIA == 152 ||
        GLICEMIA == 153 ||
        GLICEMIA == 154 ||
        GLICEMIA == 155 ||
        GLICEMIA == 156 ||
        GLICEMIA == 157 ||
        GLICEMIA == 158 ||
        GLICEMIA == 159 ||
        GLICEMIA == 160 ||
        GLICEMIA == 161 ||
        GLICEMIA == 162 ||
        GLICEMIA == 163 ||
        GLICEMIA == 164 ||
        GLICEMIA == 165 ||
        GLICEMIA == 166 ||
        GLICEMIA == 169 ||
        GLICEMIA == 172 ||
        GLICEMIA == 173 ||
        GLICEMIA == 174 ||
        GLICEMIA == 175 ||
        GLICEMIA == 177 ||
        GLICEMIA == 178 ||
        GLICEMIA == 179 ||
        GLICEMIA == 180 ||
        GLICEMIA == 182 ||
        GLICEMIA == 183 ||
        GLICEMIA == 185
    ) &&
    (
        FRACTURAS == 0
    ) &&
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 10;

    class = 3;
}

/*Terminal Node 11*/
if
(
    (
        TENSAO == 12.1 ||
        TENSAO == 12.2 ||
        TENSAO == 12.4 ||
        TENSAO == 12.5 ||
        TENSAO == 12.7 ||
        TENSAO == 12.8 ||
        TENSAO == 12.9 ||
        TENSAO == 13 ||
        TENSAO == 13.3 ||
        TENSAO == 14.3 ||
        TENSAO == 14.4 ||
        TENSAO == 14.6 ||
        TENSAO == 14.7 ||
        TENSAO == 14.8 ||
        TENSAO == 14.9 ||
        TENSAO == 15.1 ||
        TENSAO == 15.2 ||
        TENSAO == 15.3 ||
        TENSAO == 15.4 ||
        TENSAO == 15.5 ||
        TENSAO == 15.6 ||
        TENSAO == 15.7 ||
        TENSAO == 15.8 ||
        TENSAO == 15.9 ||
        TENSAO == 16 ||
        TENSAO == 16.1 ||
        TENSAO == 16.2 ||
        TENSAO == 16.3 ||
        TENSAO == 16.4 ||
        TENSAO == 16.5 ||
        TENSAO == 16.6 ||
        TENSAO == 16.7 ||
        TENSAO == 16.8 ||
        TENSAO == 16.9 ||
        TENSAO == 17 ||
        TENSAO == 17.1 ||
        TENSAO == 17.2 ||
        TENSAO == 17.3 ||
        TENSAO == 17.4 ||
        TENSAO == 17.6 ||
        TENSAO == 17.7 ||
        TENSAO == 17.8 ||
        TENSAO == 17.9 ||
        TENSAO == 18 ||
        TENSAO == 18.1 ||
        TENSAO == 18.2 ||
        TENSAO == 18.3 ||
        TENSAO == 18.4 ||
        TENSAO == 18.5 ||
        TENSAO == 18.6 ||
        TENSAO == 18.8
    ) &&
    (
        GLICEMIA == 98 ||
        GLICEMIA == 99 ||
        GLICEMIA == 104 ||
        GLICEMIA == 105 ||
        GLICEMIA == 106 ||
        GLICEMIA == 108 ||
        GLICEMIA == 111 ||
        GLICEMIA == 112 ||
        GLICEMIA == 113 ||
        GLICEMIA == 117 ||
        GLICEMIA == 119 ||
        GLICEMIA == 120 ||
        GLICEMIA == 122 ||
        GLICEMIA == 123 ||
        GLICEMIA == 124 ||
        GLICEMIA == 125 ||
        GLICEMIA == 126 ||
        GLICEMIA == 128 ||
        GLICEMIA == 129 ||
        GLICEMIA == 130 ||
        GLICEMIA == 132 ||
        GLICEMIA == 133 ||
        GLICEMIA == 138 ||
        GLICEMIA == 167 ||
        GLICEMIA == 168 ||
        GLICEMIA == 170 ||
        GLICEMIA == 171
    ) &&
    (
        FRACTURAS == 0
    ) &&
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 11;

    class = 3;
}

/*Terminal Node 12*/
if
(
    (
        TENSAO == 12.3 ||
        TENSAO == 12.6 ||
        TENSAO == 13.1 ||
        TENSAO == 13.2 ||
        TENSAO == 13.4 ||
        TENSAO == 13.5 ||
        TENSAO == 13.6 ||
        TENSAO == 13.7 ||
        TENSAO == 13.8 ||
        TENSAO == 13.9 ||
        TENSAO == 14 ||
        TENSAO == 14.1 ||
        TENSAO == 14.2 ||
        TENSAO == 14.5 ||
        TENSAO == 15 ||
        TENSAO == 17.5
    ) &&
    (
        GLICEMIA == 98 ||
        GLICEMIA == 99 ||
        GLICEMIA == 104 ||
        GLICEMIA == 105 ||
        GLICEMIA == 106 ||
        GLICEMIA == 108 ||
        GLICEMIA == 111 ||
        GLICEMIA == 112 ||
        GLICEMIA == 113 ||
        GLICEMIA == 117 ||
        GLICEMIA == 119 ||
        GLICEMIA == 120 ||
        GLICEMIA == 122 ||
        GLICEMIA == 123 ||
        GLICEMIA == 124 ||
        GLICEMIA == 125 ||
        GLICEMIA == 126 ||
        GLICEMIA == 128 ||
        GLICEMIA == 129 ||
        GLICEMIA == 130 ||
        GLICEMIA == 132 ||
        GLICEMIA == 133 ||
        GLICEMIA == 138 ||
        GLICEMIA == 167 ||
        GLICEMIA == 168 ||
        GLICEMIA == 170 ||
        GLICEMIA == 171
    ) &&
    (
        FRACTURAS == 0
    ) &&
    (
        PROBLEMAS_CARDIACOS == 1
    ) &&
    (
        DIFICULDADES_RESPIRATÓRIAS == 0
    )
) {
    terminalNode = 12;

    class = 4;
}

?>