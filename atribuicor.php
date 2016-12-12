<?php


if(!isset($_POST['glicemia']))
    $_POST['glicemia']=0;
if(!isset($_POST['difresp']))
    $_POST['difresp']=0;
if(!isset($_POST['probcard']))
    $_POST['probcard']=0;
if(!isset($_POST['fracturas']))
    $_POST['fracturas']=0;
if(!isset($_POST['tonturas']))
    $_POST['tonturas']=0;
if(!isset($_POST['tensao']))
    $_POST['tensao']=0;
if(!isset($_POST['hemorragia']))
    $_POST['hemorragia']=0;
if(!isset($_POST['azia']))
    $_POST['azia']=0;
if(!isset($_POST['vomitos']))
    $_POST['vomitos']=0;
if(!isset($_POST['cefaleia']))
    $_POST['cefaleia']=0;
$class = 1;

//glicemia
//difresp
//probcard
//fracturas
//tonturas
//tensao
//hemorragia
//azia
//vomitos
//cefaleia

/*Terminal Node 1*/
/*Terminal Node 1*/
if
(
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -1;
    $class = 1;
}

/*Terminal Node 2*/
if
(
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -2;
    $class = 2;
}

/*Terminal Node 3*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -3;
    $class = 1;
}

/*Terminal Node 4*/
if
(
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -4;
    $class = 2;
}

/*Terminal Node 5*/
if
(
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 166
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -5;
    $class = 1;
}

/*Terminal Node 6*/
if
(
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 166
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -6;
    $class = 1;
}

/*Terminal Node 7*/
if
(
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 166
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -7;
    $class = 2;
}

/*Terminal Node 8*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 182 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -8;
    $class = 1;
}

/*Terminal Node 9*/
if
(
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -9;
    $class = 2;
}

/*Terminal Node 10*/
if
(
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -10;
    $class = 2;
}

/*Terminal Node 11*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -11;
    $class = 3;
}

/*Terminal Node 12*/
if
(
    (
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -12;
    $class = 3;
}

/*Terminal Node 13*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -13;
    $class = 2;
}

/*Terminal Node 14*/
if
(
    (
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -14;
    $class = 3;
}

/*Terminal Node 15*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -15;
    $class = 2;
}

/*Terminal Node 16*/
if
(
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18
    ) &&
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -16;
    $class = 2;
}

/*Terminal Node 17*/
if
(
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 182 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 1
    )
)
{
    //Node = -17;
    $class = 2;
}

/*Terminal Node 18*/
if
(
    (
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -18;
    $class = 2;
}

/*Terminal Node 19*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -19;
    $class = 2;
}

/*Terminal Node 20*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -20;
    $class = 3;
}

/*Terminal Node 21*/
if
(
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -21;
    $class = 3;
}

/*Terminal Node 22*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 182 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -22;
    $class = 3;
}

/*Terminal Node 23*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 182 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -23;
    $class = 2;
}

/*Terminal Node 24*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -24;
    $class = 2;
}

/*Terminal Node 25*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 185 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -25;
    $class = 2;
}

/*Terminal Node 26*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -26;
    $class = 2;
}

/*Terminal Node 27*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -27;
    $class = 3;
}

/*Terminal Node 28*/
if
(
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -28;
    $class = 3;
}

/*Terminal Node 29*/
if
(
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -29;
    $class = 3;
}

/*Terminal Node 30*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -30;
    $class = 3;
}

/*Terminal Node 31*/
if
(
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 171
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -31;
    $class = 3;
}

/*Terminal Node 32*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 171
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -32;
    $class = 3;
}

/*Terminal Node 33*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 171
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -33;
    $class = 4;
}

/*Terminal Node 34*/
if
(
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -34;
    $class = 3;
}

/*Terminal Node 35*/
if
(
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 163
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -35;
    $class = 3;
}

/*Terminal Node 36*/
if
(
    (
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -36;
    $class = 4;
}

/*Terminal Node 37*/
if
(
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 163
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -37;
    $class = 4;
}

/*Terminal Node 38*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 163
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -38;
    $class = 3;
}

/*Terminal Node 39*/
if
(
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 163
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -39;
    $class = 4;
}

/*Terminal Node 40*/
if
(
    (
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 168
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -40;
    $class = 4;
}

/*Terminal Node 41*/
if
(
    (
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -41;
    $class = 2;
}

/*Terminal Node 42*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 181
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -42;
    $class = 4;
}

/*Terminal Node 43*/
if
(
    (
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -43;
    $class = 2;
}

/*Terminal Node 44*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 168
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -44;
    $class = 4;
}

/*Terminal Node 45*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 168
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -45;
    $class = 3;
}

/*Terminal Node 46*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 168
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -46;
    $class = 4;
}

/*Terminal Node 47*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 140
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -47;
    $class = 4;
}

/*Terminal Node 48*/
if
(
    (
        $_POST['glicemia'] == 137
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -48;
    $class = 4;
}

/*Terminal Node 49*/
if
(
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 140
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -49;
    $class = 3;
}

/*Terminal Node 50*/
if
(
    (
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 168
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -50;
    $class = 4;
}

/*Terminal Node 51*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -51;
    $class = 3;
}

/*Terminal Node 52*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -52;
    $class = 4;
}

/*Terminal Node 53*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -53;
    $class = 3;
}

/*Terminal Node 54*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -54;
    $class = 3;
}

/*Terminal Node 55*/
if
(
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -55;
    $class = 2;
}

/*Terminal Node 56*/
if
(
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -56;
    $class = 4;
}

/*Terminal Node 57*/
if
(
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -57;
    $class = 3;
}

/*Terminal Node 58*/
if
(
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -58;
    $class = 3;
}

/*Terminal Node 59*/
if
(
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -59;
    $class = 4;
}

/*Terminal Node 60*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -60;
    $class = 4;
}

/*Terminal Node 61*/
if
(
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 1
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -61;
    $class = 3;
}

/*Terminal Node 62*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -62;
    $class = 4;
}

/*Terminal Node 63*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -63;
    $class = 3;
}

/*Terminal Node 64*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -64;
    $class = 4;
}

/*Terminal Node 65*/
if
(
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -65;
    $class = 3;
}

/*Terminal Node 66*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 173
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -66;
    $class = 4;
}

/*Terminal Node 67*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -67;
    $class = 5;
}

/*Terminal Node 68*/
if
(
    (
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 176
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -68;
    $class = 4;
}

/*Terminal Node 69*/
if
(
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 175
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -69;
    $class = 4;
}

/*Terminal Node 70*/
if
(
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -70;
    $class = 4;
}

/*Terminal Node 71*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 178
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -71;
    $class = 3;
}

/*Terminal Node 72*/
if
(
    (
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -72;
    $class = 3;
}

/*Terminal Node 73*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -73;
    $class = 3;
}

/*Terminal Node 74*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -74;
    $class = 4;
}

/*Terminal Node 75*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -75;
    $class = 4;
}

/*Terminal Node 76*/
if
(
    (
        $_POST['tensao'] == 12
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -76;
    $class = 5;
}

/*Terminal Node 77*/
if
(
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -77;
    $class = 3;
}

/*Terminal Node 78*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -78;
    $class = 4;
}

/*Terminal Node 79*/
if
(
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -79;
    $class = 3;
}

/*Terminal Node 80*/
if
(
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 175
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -80;
    $class = 4;
}

/*Terminal Node 81*/
if
(
    (
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 170
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -81;
    $class = 5;
}

/*Terminal Node 82*/
if
(
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 175
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -82;
    $class = 4;
}

/*Terminal Node 83*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -83;
    $class = 4;
}

/*Terminal Node 84*/
if
(
    (
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -84;
    $class = 3;
}

/*Terminal Node 85*/
if
(
    (
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 172
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -85;
    $class = 4;
}

/*Terminal Node 86*/
if
(
    (
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -86;
    $class = 3;
}

/*Terminal Node 87*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -87;
    $class = 4;
}

/*Terminal Node 88*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -88;
    $class = 3;
}

/*Terminal Node 89*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -89;
    $class = 4;
}

/*Terminal Node 90*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -90;
    $class = 4;
}

/*Terminal Node 91*/
if
(
    (
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -91;
    $class = 5;
}

/*Terminal Node 92*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -92;
    $class = 4;
}

/*Terminal Node 93*/
if
(
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 165
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -93;
    $class = 4;
}

/*Terminal Node 94*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 165
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -94;
    $class = 5;
}

/*Terminal Node 95*/
if
(
    (
        $_POST['glicemia'] == 119
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -95;
    $class = 5;
}

/*Terminal Node 96*/
if
(
    (
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 165
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -96;
    $class = 4;
}

/*Terminal Node 97*/
if
(
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 179
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -97;
    $class = 5;
}

/*Terminal Node 98*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -98;
    $class = 4;
}

/*Terminal Node 99*/
if
(
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -99;
    $class = 5;
}

/*Terminal Node 100*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -100;
    $class = 5;
}

/*Terminal Node 101*/
if
(
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 179
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -101;
    $class = 4;
}

/*Terminal Node 102*/
if
(
    (
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 176
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -102;
    $class = 5;
}

/*Terminal Node 103*/
if
(
    (
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -103;
    $class = 5;
}

/*Terminal Node 104*/
if
(
    (
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 151
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -104;
    $class = 5;
}

/*Terminal Node 105*/
if
(
    (
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 151
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -105;
    $class = 5;
}

/*Terminal Node 106*/
if
(
    (
        $_POST['glicemia'] == 118
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -106;
    $class = 4;
}

/*Terminal Node 107*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 179
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -107;
    $class = 5;
}

/*Terminal Node 108*/
if
(
    (
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 167
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -108;
    $class = 4;
}

/*Terminal Node 109*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -109;
    $class = 4;
}

/*Terminal Node 110*/
if
(
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -110;
    $class = 5;
}

/*Terminal Node 111*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -111;
    $class = 5;
}

/*Terminal Node 112*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 183 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -112;
    $class = 4;
}

/*Terminal Node 113*/
if
(
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -113;
    $class = 4;
}

/*Terminal Node 114*/
if
(
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16
    ) &&
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['fracturas'] == 1
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -114;
    $class = 5;
}

/*Terminal Node 115*/
if
(
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -115;
    $class = 3;
}

/*Terminal Node 116*/
if
(
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 178
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -116;
    $class = 4;
}

/*Terminal Node 117*/
if
(
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 178
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -117;
    $class = 5;
}

/*Terminal Node 118*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 96 ||
        $_POST['glicemia'] == 125 ||
        $_POST['glicemia'] == 126 ||
        $_POST['glicemia'] == 127 ||
        $_POST['glicemia'] == 139 ||
        $_POST['glicemia'] == 144 ||
        $_POST['glicemia'] == 145 ||
        $_POST['glicemia'] == 150 ||
        $_POST['glicemia'] == 154 ||
        $_POST['glicemia'] == 159 ||
        $_POST['glicemia'] == 167 ||
        $_POST['glicemia'] == 172 ||
        $_POST['glicemia'] == 174 ||
        $_POST['glicemia'] == 175 ||
        $_POST['glicemia'] == 176 ||
        $_POST['glicemia'] == 178 ||
        $_POST['glicemia'] == 183
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -118;
    $class = 4;
}

/*Terminal Node 119*/
if
(
    (
        $_POST['glicemia'] == 130 ||
        $_POST['glicemia'] == 131 ||
        $_POST['glicemia'] == 132 ||
        $_POST['glicemia'] == 133 ||
        $_POST['glicemia'] == 134 ||
        $_POST['glicemia'] == 135 ||
        $_POST['glicemia'] == 136 ||
        $_POST['glicemia'] == 137 ||
        $_POST['glicemia'] == 138 ||
        $_POST['glicemia'] == 140 ||
        $_POST['glicemia'] == 141 ||
        $_POST['glicemia'] == 142 ||
        $_POST['glicemia'] == 143 ||
        $_POST['glicemia'] == 153 ||
        $_POST['glicemia'] == 155 ||
        $_POST['glicemia'] == 156 ||
        $_POST['glicemia'] == 157 ||
        $_POST['glicemia'] == 160 ||
        $_POST['glicemia'] == 161 ||
        $_POST['glicemia'] == 168 ||
        $_POST['glicemia'] == 169 ||
        $_POST['glicemia'] == 181 ||
        $_POST['glicemia'] == 184
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -119;
    $class = 4;
}

/*Terminal Node 120*/
if
(
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 180 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -120;
    $class = 5;
}

/*Terminal Node 121*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -121;
    $class = 5;
}

/*Terminal Node 122*/
if
(
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -122;
    $class = 4;
}

/*Terminal Node 123*/
if
(
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 164
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -123;
    $class = 5;
}

/*Terminal Node 124*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -124;
    $class = 5;
}

/*Terminal Node 125*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -125;
    $class = 5;
}

/*Terminal Node 126*/
if
(
    (
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 103 ||
        $_POST['glicemia'] == 106 ||
        $_POST['glicemia'] == 108 ||
        $_POST['glicemia'] == 111 ||
        $_POST['glicemia'] == 115 ||
        $_POST['glicemia'] == 116 ||
        $_POST['glicemia'] == 119 ||
        $_POST['glicemia'] == 121 ||
        $_POST['glicemia'] == 124 ||
        $_POST['glicemia'] == 151 ||
        $_POST['glicemia'] == 162 ||
        $_POST['glicemia'] == 164 ||
        $_POST['glicemia'] == 171 ||
        $_POST['glicemia'] == 186
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -126;
    $class = 5;
}

/*Terminal Node 127*/
if
(
    (
        $_POST['glicemia'] == 95 ||
        $_POST['glicemia'] == 97 ||
        $_POST['glicemia'] == 99 ||
        $_POST['glicemia'] == 100 ||
        $_POST['glicemia'] == 104 ||
        $_POST['glicemia'] == 105 ||
        $_POST['glicemia'] == 107 ||
        $_POST['glicemia'] == 112 ||
        $_POST['glicemia'] == 129 ||
        $_POST['glicemia'] == 158 ||
        $_POST['glicemia'] == 179 ||
        $_POST['glicemia'] == 180
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 13 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -127;
    $class = 5;
}

/*Terminal Node 128*/
if
(
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 177
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -128;
    $class = 5;
}

/*Terminal Node 129*/
if
(
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 177
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -129;
    $class = 4;
}

/*Terminal Node 130*/
if
(
    (
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -130;
    $class = 5;
}

/*Terminal Node 131*/
if
(
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -131;
    $class = 5;
}

/*Terminal Node 132*/
if
(
    (
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -132;
    $class = 4;
}

/*Terminal Node 133*/
if
(
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -133;
    $class = 5;
}

/*Terminal Node 134*/
if
(
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -134;
    $class = 5;
}

/*Terminal Node 135*/
if
(
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14 ||
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -135;
    $class = 4;
}

/*Terminal Node 136*/
if
(
    (
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -136;
    $class = 5;
}

/*Terminal Node 137*/
if
(
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 170
    ) &&
    (
        $_POST['tensao'] == 15 ||
        $_POST['tensao'] == 16 ||
        $_POST['tensao'] == 17 ||
        $_POST['tensao'] == 18 ||
        $_POST['tensao'] == 19
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -137;
    $class = 4;
}

/*Terminal Node 138*/
if
(
    (
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 152
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -138;
    $class = 5;
}

/*Terminal Node 139*/
if
(
    (
        $_POST['tensao'] == 12
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 152
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -139;
    $class = 4;
}

/*Terminal Node 140*/
if
(
    (
        $_POST['tonturas'] == 1
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -140;
    $class = 4;
}

/*Terminal Node 141*/
if
(
    (
        $_POST['tonturas'] == 0
    ) &&
    (
        $_POST['hemorragia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -141;
    $class = 5;
}

/*Terminal Node 142*/
if
(
    (
        $_POST['hemorragia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['cefaleia'] == 1
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -142;
    $class = 5;
}

/*Terminal Node 143*/
if
(
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -143;
    $class = 4;
}

/*Terminal Node 144*/
if
(
    (
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -144;
    $class = 5;
}

/*Terminal Node 145*/
if
(
    (
        $_POST['tensao'] == 12
    ) &&
    (
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -145;
    $class = 4;
}

/*Terminal Node 146*/
if
(
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 152
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -146;
    $class = 5;
}

/*Terminal Node 147*/
if
(
    (
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 170
    ) &&
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -147;
    $class = 4;
}

/*Terminal Node 148*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['cefaleia'] == 0
    ) &&
    (
        $_POST['tensao'] == 12 ||
        $_POST['tensao'] == 14
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -148;
    $class = 5;
}

/*Terminal Node 149*/
if
(
    (
        $_POST['azia'] == 1
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -149;
    $class = 5;
}

/*Terminal Node 150*/
if
(
    (
        $_POST['azia'] == 0
    ) &&
    (
        $_POST['glicemia'] == 98 ||
        $_POST['glicemia'] == 101 ||
        $_POST['glicemia'] == 109 ||
        $_POST['glicemia'] == 114 ||
        $_POST['glicemia'] == 123 ||
        $_POST['glicemia'] == 147 ||
        $_POST['glicemia'] == 165 ||
        $_POST['glicemia'] == 173 ||
        $_POST['glicemia'] == 177 ||
        $_POST['glicemia'] == 185
    ) &&
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -150;
    $class = 4;
}

/*Terminal Node 151*/
if
(
    (
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -151;
    $class = 5;
}

/*Terminal Node 152*/
if
(
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 170
    ) &&
    (
        $_POST['vomitos'] == 1
    ) &&
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -152;
    $class = 4;
}

/*Terminal Node 153*/
if
(
    (
        $_POST['vomitos'] == 0
    ) &&
    (
        $_POST['glicemia'] == 102 ||
        $_POST['glicemia'] == 110 ||
        $_POST['glicemia'] == 113 ||
        $_POST['glicemia'] == 117 ||
        $_POST['glicemia'] == 118 ||
        $_POST['glicemia'] == 120 ||
        $_POST['glicemia'] == 122 ||
        $_POST['glicemia'] == 128 ||
        $_POST['glicemia'] == 146 ||
        $_POST['glicemia'] == 148 ||
        $_POST['glicemia'] == 149 ||
        $_POST['glicemia'] == 152 ||
        $_POST['glicemia'] == 163 ||
        $_POST['glicemia'] == 166 ||
        $_POST['glicemia'] == 170 ||
        $_POST['glicemia'] == 182
    ) &&
    (
        $_POST['tensao'] == 13
    ) &&
    (
        $_POST['fracturas'] == 0
    ) &&
    (
        $_POST['probcard'] == 0
    ) &&
    (
        $_POST['difresp'] == 0
    )
)
{
    //Node = -153;
    $class = 5;
}



//$_SESSION['id']=$_POST["id"];
//$_SESSION['glicemia']=$_POST["glicemia"];			//
//$_SESSION['tensao']=$_POST["tensao"];				//
//$_SESSION['prob_resp']=$_POST["prob_resp"];			//
//$_SESSION['prob_card']=$_POST["prob_card"];			//
//$_SESSION['fract']=$_POST["fract"];					//
//$_SESSION['tont']=$_POST["tont"];					//
//$_SESSION['tosse']=$_POST["tosse"];					//
//$_SESSION['azia']=$_POST["azia"];					//
//$_SESSION['vomitos']=$_POST["vomitos"];				//
//$_SESSION['cefaleia']=$_POST["cefaleia"];			//

if($class==1)
    echo '<input type="text"  style="background-color:blue; width: 80px; height: 35px; text-align:center" value="AZUL">';
if($class==2)
    echo '<input type="text" style="background-color:green; width: 80px; height: 35px; text-align:center" value="VERDE">';
if($class==3)
    echo '<input type="text" style="background-color:yellow; width: 80px; height: 35px; text-align:center" value="AMARELO">';
if($class==4)
    echo '<input type="text"  style="background-color:orange; width: 80px; height: 35px; text-align:center" value="LARANJA">';
if($class==5)
    echo '<input type="text"  style="background-color:red; width: 80px; height: 35px; text-align:center" value="VERMELHO">';

$_SESSION['$class']=$class;

?>

