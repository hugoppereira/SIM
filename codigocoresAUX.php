if (($_POST['probcard'] == 0) && ($_POST['difresp'] == 1)){
$class = 2;
}

/*Terminal Node 2*/
if
(
(
$_POST['probcard'] == 1
) &&
(
$_POST['difresp'] == 1
)
) {


$class = 1;
}

/*Terminal Node 3*/
if
(
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
) {


$class = 4;
}

/*Terminal Node 4*/
if
(
(
$_POST['glicemia'] == 97 ||
$_POST['glicemia'] == 98 ||
$_POST['glicemia'] == 99 ||
$_POST['glicemia'] == 100 ||
$_POST['glicemia'] == 101 ||
$_POST['glicemia'] == 102 ||
$_POST['glicemia'] == 103 ||
$_POST['glicemia'] == 104 ||
$_POST['glicemia'] == 106 ||
$_POST['glicemia'] == 108 ||
$_POST['glicemia'] == 109 ||
$_POST['glicemia'] == 110 ||
$_POST['glicemia'] == 111 ||
$_POST['glicemia'] == 112 ||
$_POST['glicemia'] == 113 ||
$_POST['glicemia'] == 114 ||
$_POST['glicemia'] == 115 ||
$_POST['glicemia'] == 116 ||
$_POST['glicemia'] == 117 ||
$_POST['glicemia'] == 137 ||
$_POST['glicemia'] == 145 ||
$_POST['glicemia'] == 146 ||
$_POST['glicemia'] == 147 ||
$_POST['glicemia'] == 148 ||
$_POST['glicemia'] == 149 ||
$_POST['glicemia'] == 150 ||
$_POST['glicemia'] == 151 ||
$_POST['glicemia'] == 152 ||
$_POST['glicemia'] == 155 ||
$_POST['glicemia'] == 156 ||
$_POST['glicemia'] == 157 ||
$_POST['glicemia'] == 158 ||
$_POST['glicemia'] == 160 ||
$_POST['glicemia'] == 161 ||
$_POST['glicemia'] == 162 ||
$_POST['glicemia'] == 163 ||
$_POST['glicemia'] == 164 ||
$_POST['glicemia'] == 165 ||
$_POST['glicemia'] == 166 ||
$_POST['glicemia'] == 167 ||
$_POST['glicemia'] == 168 ||
$_POST['glicemia'] == 171 ||
$_POST['glicemia'] == 172 ||
$_POST['glicemia'] == 173 ||
$_POST['glicemia'] == 174 ||
$_POST['glicemia'] == 175 ||
$_POST['glicemia'] == 177 ||
$_POST['glicemia'] == 178 ||
$_POST['glicemia'] == 179 ||
$_POST['glicemia'] == 180 ||
$_POST['glicemia'] == 182 ||
$_POST['glicemia'] == 183 ||
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
) {


$class = 5;
}

/*Terminal Node 5*/
if
(
(
$_POST['glicemia'] == 96 ||
$_POST['glicemia'] == 105 ||
$_POST['glicemia'] == 107 ||
$_POST['glicemia'] == 118 ||
$_POST['glicemia'] == 119 ||
$_POST['glicemia'] == 120 ||
$_POST['glicemia'] == 121 ||
$_POST['glicemia'] == 122 ||
$_POST['glicemia'] == 123 ||
$_POST['glicemia'] == 124 ||
$_POST['glicemia'] == 125 ||
$_POST['glicemia'] == 126 ||
$_POST['glicemia'] == 127 ||
$_POST['glicemia'] == 128 ||
$_POST['glicemia'] == 129 ||
$_POST['glicemia'] == 130 ||
$_POST['glicemia'] == 131 ||
$_POST['glicemia'] == 132 ||
$_POST['glicemia'] == 133 ||
$_POST['glicemia'] == 134 ||
$_POST['glicemia'] == 135 ||
$_POST['glicemia'] == 136 ||
$_POST['glicemia'] == 138 ||
$_POST['glicemia'] == 139 ||
$_POST['glicemia'] == 140 ||
$_POST['glicemia'] == 141 ||
$_POST['glicemia'] == 142 ||
$_POST['glicemia'] == 143 ||
$_POST['glicemia'] == 144 ||
$_POST['glicemia'] == 153 ||
$_POST['glicemia'] == 154 ||
$_POST['glicemia'] == 159 ||
$_POST['glicemia'] == 169 ||
$_POST['glicemia'] == 170
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
) {


$class = 4;
}

/*Terminal Node 6*/
if
(
(
$_POST['glicemia'] == 97 ||
$_POST['glicemia'] == 128 ||
$_POST['glicemia'] == 130 ||
$_POST['glicemia'] == 131 ||
$_POST['glicemia'] == 132 ||
$_POST['glicemia'] == 133 ||
$_POST['glicemia'] == 134 ||
$_POST['glicemia'] == 135 ||
$_POST['glicemia'] == 136 ||
$_POST['glicemia'] == 137 ||
$_POST['glicemia'] == 139 ||
$_POST['glicemia'] == 140 ||
$_POST['glicemia'] == 141 ||
$_POST['glicemia'] == 142 ||
$_POST['glicemia'] == 143 ||
$_POST['glicemia'] == 144 ||
$_POST['glicemia'] == 145 ||
$_POST['glicemia'] == 146 ||
$_POST['glicemia'] == 147 ||
$_POST['glicemia'] == 148 ||
$_POST['glicemia'] == 149 ||
$_POST['glicemia'] == 152 ||
$_POST['glicemia'] == 153 ||
$_POST['glicemia'] == 154 ||
$_POST['glicemia'] == 155 ||
$_POST['glicemia'] == 156 ||
$_POST['glicemia'] == 157 ||
$_POST['glicemia'] == 159 ||
$_POST['glicemia'] == 160 ||
$_POST['glicemia'] == 162 ||
$_POST['glicemia'] == 163 ||
$_POST['glicemia'] == 164 ||
$_POST['glicemia'] == 165 ||
$_POST['glicemia'] == 166 ||
$_POST['glicemia'] == 167 ||
$_POST['glicemia'] == 168 ||
$_POST['glicemia'] == 169 ||
$_POST['glicemia'] == 170 ||
$_POST['glicemia'] == 171 ||
$_POST['glicemia'] == 172 ||
$_POST['glicemia'] == 173 ||
$_POST['glicemia'] == 174 ||
$_POST['glicemia'] == 175 ||
$_POST['glicemia'] == 177 ||
$_POST['glicemia'] == 178 ||
$_POST['glicemia'] == 179 ||
$_POST['glicemia'] == 180 ||
$_POST['glicemia'] == 182 ||
$_POST['glicemia'] == 183 ||
$_POST['glicemia'] == 185
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
) {


$class = 4;
}

/*Terminal Node 7*/
if
(
(
$_POST['glicemia'] == 96 ||
$_POST['glicemia'] == 98 ||
$_POST['glicemia'] == 99 ||
$_POST['glicemia'] == 100 ||
$_POST['glicemia'] == 101 ||
$_POST['glicemia'] == 102 ||
$_POST['glicemia'] == 103 ||
$_POST['glicemia'] == 104 ||
$_POST['glicemia'] == 105 ||
$_POST['glicemia'] == 106 ||
$_POST['glicemia'] == 107 ||
$_POST['glicemia'] == 108 ||
$_POST['glicemia'] == 109 ||
$_POST['glicemia'] == 110 ||
$_POST['glicemia'] == 111 ||
$_POST['glicemia'] == 112 ||
$_POST['glicemia'] == 113 ||
$_POST['glicemia'] == 114 ||
$_POST['glicemia'] == 115 ||
$_POST['glicemia'] == 116 ||
$_POST['glicemia'] == 117 ||
$_POST['glicemia'] == 118 ||
$_POST['glicemia'] == 119 ||
$_POST['glicemia'] == 120 ||
$_POST['glicemia'] == 121 ||
$_POST['glicemia'] == 122 ||
$_POST['glicemia'] == 123 ||
$_POST['glicemia'] == 124 ||
$_POST['glicemia'] == 125 ||
$_POST['glicemia'] == 126 ||
$_POST['glicemia'] == 127 ||
$_POST['glicemia'] == 129 ||
$_POST['glicemia'] == 138 ||
$_POST['glicemia'] == 150 ||
$_POST['glicemia'] == 151 ||
$_POST['glicemia'] == 158 ||
$_POST['glicemia'] == 161
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
) {


$class = 5;
}

/*Terminal Node 8*/
if
(
(
$_POST['glicemia'] == 96 ||
$_POST['glicemia'] == 97 ||
$_POST['glicemia'] == 98 ||
$_POST['glicemia'] == 101 ||
$_POST['glicemia'] == 104 ||
$_POST['glicemia'] == 105 ||
$_POST['glicemia'] == 106 ||
$_POST['glicemia'] == 107 ||
$_POST['glicemia'] == 109 ||
$_POST['glicemia'] == 110 ||
$_POST['glicemia'] == 111 ||
$_POST['glicemia'] == 112 ||
$_POST['glicemia'] == 113 ||
$_POST['glicemia'] == 114 ||
$_POST['glicemia'] == 115 ||
$_POST['glicemia'] == 116 ||
$_POST['glicemia'] == 117 ||
$_POST['glicemia'] == 118 ||
$_POST['glicemia'] == 119 ||
$_POST['glicemia'] == 120 ||
$_POST['glicemia'] == 121 ||
$_POST['glicemia'] == 122 ||
$_POST['glicemia'] == 123 ||
$_POST['glicemia'] == 124 ||
$_POST['glicemia'] == 125 ||
$_POST['glicemia'] == 126 ||
$_POST['glicemia'] == 127 ||
$_POST['glicemia'] == 128 ||
$_POST['glicemia'] == 129 ||
$_POST['glicemia'] == 130 ||
$_POST['glicemia'] == 133 ||
$_POST['glicemia'] == 135 ||
$_POST['glicemia'] == 136 ||
$_POST['glicemia'] == 137 ||
$_POST['glicemia'] == 138 ||
$_POST['glicemia'] == 140 ||
$_POST['glicemia'] == 141 ||
$_POST['glicemia'] == 142 ||
$_POST['glicemia'] == 143 ||
$_POST['glicemia'] == 147 ||
$_POST['glicemia'] == 151 ||
$_POST['glicemia'] == 152 ||
$_POST['glicemia'] == 154 ||
$_POST['glicemia'] == 155 ||
$_POST['glicemia'] == 158 ||
$_POST['glicemia'] == 160 ||
$_POST['glicemia'] == 163 ||
$_POST['glicemia'] == 164 ||
$_POST['glicemia'] == 172 ||
$_POST['glicemia'] == 173 ||
$_POST['glicemia'] == 174 ||
$_POST['glicemia'] == 175 ||
$_POST['glicemia'] == 177 ||
$_POST['glicemia'] == 178 ||
$_POST['glicemia'] == 180 ||
$_POST['glicemia'] == 182 ||
$_POST['glicemia'] == 183 ||
$_POST['glicemia'] == 185
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
) {


$class = 3;
}

/*Terminal Node 9*/
if
(
(
$_POST['glicemia'] == 99 ||
$_POST['glicemia'] == 100 ||
$_POST['glicemia'] == 102 ||
$_POST['glicemia'] == 103 ||
$_POST['glicemia'] == 108 ||
$_POST['glicemia'] == 131 ||
$_POST['glicemia'] == 132 ||
$_POST['glicemia'] == 134 ||
$_POST['glicemia'] == 139 ||
$_POST['glicemia'] == 144 ||
$_POST['glicemia'] == 145 ||
$_POST['glicemia'] == 146 ||
$_POST['glicemia'] == 148 ||
$_POST['glicemia'] == 149 ||
$_POST['glicemia'] == 150 ||
$_POST['glicemia'] == 153 ||
$_POST['glicemia'] == 156 ||
$_POST['glicemia'] == 157 ||
$_POST['glicemia'] == 159 ||
$_POST['glicemia'] == 161 ||
$_POST['glicemia'] == 162 ||
$_POST['glicemia'] == 165 ||
$_POST['glicemia'] == 166 ||
$_POST['glicemia'] == 167 ||
$_POST['glicemia'] == 168 ||
$_POST['glicemia'] == 169 ||
$_POST['glicemia'] == 170 ||
$_POST['glicemia'] == 171 ||
$_POST['glicemia'] == 179
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
) {


$class = 2;
}

/*Terminal Node 10*/
if
(
(
$_POST['glicemia'] == 96 ||
$_POST['glicemia'] == 97 ||
$_POST['glicemia'] == 100 ||
$_POST['glicemia'] == 101 ||
$_POST['glicemia'] == 102 ||
$_POST['glicemia'] == 103 ||
$_POST['glicemia'] == 107 ||
$_POST['glicemia'] == 109 ||
$_POST['glicemia'] == 110 ||
$_POST['glicemia'] == 114 ||
$_POST['glicemia'] == 115 ||
$_POST['glicemia'] == 116 ||
$_POST['glicemia'] == 118 ||
$_POST['glicemia'] == 121 ||
$_POST['glicemia'] == 127 ||
$_POST['glicemia'] == 131 ||
$_POST['glicemia'] == 134 ||
$_POST['glicemia'] == 135 ||
$_POST['glicemia'] == 136 ||
$_POST['glicemia'] == 137 ||
$_POST['glicemia'] == 139 ||
$_POST['glicemia'] == 140 ||
$_POST['glicemia'] == 141 ||
$_POST['glicemia'] == 142 ||
$_POST['glicemia'] == 143 ||
$_POST['glicemia'] == 144 ||
$_POST['glicemia'] == 145 ||
$_POST['glicemia'] == 146 ||
$_POST['glicemia'] == 147 ||
$_POST['glicemia'] == 148 ||
$_POST['glicemia'] == 149 ||
$_POST['glicemia'] == 150 ||
$_POST['glicemia'] == 151 ||
$_POST['glicemia'] == 152 ||
$_POST['glicemia'] == 153 ||
$_POST['glicemia'] == 154 ||
$_POST['glicemia'] == 155 ||
$_POST['glicemia'] == 156 ||
$_POST['glicemia'] == 157 ||
$_POST['glicemia'] == 158 ||
$_POST['glicemia'] == 159 ||
$_POST['glicemia'] == 160 ||
$_POST['glicemia'] == 161 ||
$_POST['glicemia'] == 162 ||
$_POST['glicemia'] == 163 ||
$_POST['glicemia'] == 164 ||
$_POST['glicemia'] == 165 ||
$_POST['glicemia'] == 166 ||
$_POST['glicemia'] == 169 ||
$_POST['glicemia'] == 172 ||
$_POST['glicemia'] == 173 ||
$_POST['glicemia'] == 174 ||
$_POST['glicemia'] == 175 ||
$_POST['glicemia'] == 177 ||
$_POST['glicemia'] == 178 ||
$_POST['glicemia'] == 179 ||
$_POST['glicemia'] == 180 ||
$_POST['glicemia'] == 182 ||
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
) {


$class = 3;
}

/*Terminal Node 11*/
if
(
(
$_POST['tensao'] == 12.1 ||
$_POST['tensao'] == 12.2 ||
$_POST['tensao'] == 12.4 ||
$_POST['tensao'] == 12.5 ||
$_POST['tensao'] == 12.7 ||
$_POST['tensao'] == 12.8 ||
$_POST['tensao'] == 12.9 ||
$_POST['tensao'] == 13 ||
$_POST['tensao'] == 13.3 ||
$_POST['tensao'] == 14.3 ||
$_POST['tensao'] == 14.4 ||
$_POST['tensao'] == 14.6 ||
$_POST['tensao'] == 14.7 ||
$_POST['tensao'] == 14.8 ||
$_POST['tensao'] == 14.9 ||
$_POST['tensao'] == 15.1 ||
$_POST['tensao'] == 15.2 ||
$_POST['tensao'] == 15.3 ||
$_POST['tensao'] == 15.4 ||
$_POST['tensao'] == 15.5 ||
$_POST['tensao'] == 15.6 ||
$_POST['tensao'] == 15.7 ||
$_POST['tensao'] == 15.8 ||
$_POST['tensao'] == 15.9 ||
$_POST['tensao'] == 16 ||
$_POST['tensao'] == 16.1 ||
$_POST['tensao'] == 16.2 ||
$_POST['tensao'] == 16.3 ||
$_POST['tensao'] == 16.4 ||
$_POST['tensao'] == 16.5 ||
$_POST['tensao'] == 16.6 ||
$_POST['tensao'] == 16.7 ||
$_POST['tensao'] == 16.8 ||
$_POST['tensao'] == 16.9 ||
$_POST['tensao'] == 17 ||
$_POST['tensao'] == 17.1 ||
$_POST['tensao'] == 17.2 ||
$_POST['tensao'] == 17.3 ||
$_POST['tensao'] == 17.4 ||
$_POST['tensao'] == 17.6 ||
$_POST['tensao'] == 17.7 ||
$_POST['tensao'] == 17.8 ||
$_POST['tensao'] == 17.9 ||
$_POST['tensao'] == 18 ||
$_POST['tensao'] == 18.1 ||
$_POST['tensao'] == 18.2 ||
$_POST['tensao'] == 18.3 ||
$_POST['tensao'] == 18.4 ||
$_POST['tensao'] == 18.5 ||
$_POST['tensao'] == 18.6 ||
$_POST['tensao'] == 18.8
) &&
(
$_POST['glicemia'] == 98 ||
$_POST['glicemia'] == 99 ||
$_POST['glicemia'] == 104 ||
$_POST['glicemia'] == 105 ||
$_POST['glicemia'] == 106 ||
$_POST['glicemia'] == 108 ||
$_POST['glicemia'] == 111 ||
$_POST['glicemia'] == 112 ||
$_POST['glicemia'] == 113 ||
$_POST['glicemia'] == 117 ||
$_POST['glicemia'] == 119 ||
$_POST['glicemia'] == 120 ||
$_POST['glicemia'] == 122 ||
$_POST['glicemia'] == 123 ||
$_POST['glicemia'] == 124 ||
$_POST['glicemia'] == 125 ||
$_POST['glicemia'] == 126 ||
$_POST['glicemia'] == 128 ||
$_POST['glicemia'] == 129 ||
$_POST['glicemia'] == 130 ||
$_POST['glicemia'] == 132 ||
$_POST['glicemia'] == 133 ||
$_POST['glicemia'] == 138 ||
$_POST['glicemia'] == 167 ||
$_POST['glicemia'] == 168 ||
$_POST['glicemia'] == 170 ||
$_POST['glicemia'] == 171
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
) {


$class = 3;
}

/*Terminal Node 12*/
if
(
(
$_POST['tensao'] == 12.3 ||
$_POST['tensao'] == 12.6 ||
$_POST['tensao'] == 13.1 ||
$_POST['tensao'] == 13.2 ||
$_POST['tensao'] == 13.4 ||
$_POST['tensao'] == 13.5 ||
$_POST['tensao'] == 13.6 ||
$_POST['tensao'] == 13.7 ||
$_POST['tensao'] == 13.8 ||
$_POST['tensao'] == 13.9 ||
$_POST['tensao'] == 14 ||
$_POST['tensao'] == 14.1 ||
$_POST['tensao'] == 14.2 ||
$_POST['tensao'] == 14.5 ||
$_POST['tensao'] == 15 ||
$_POST['tensao'] == 17.5
) &&
(
$_POST['glicemia'] == 98 ||
$_POST['glicemia'] == 99 ||
$_POST['glicemia'] == 104 ||
$_POST['glicemia'] == 105 ||
$_POST['glicemia'] == 106 ||
$_POST['glicemia'] == 108 ||
$_POST['glicemia'] == 111 ||
$_POST['glicemia'] == 112 ||
$_POST['glicemia'] == 113 ||
$_POST['glicemia'] == 117 ||
$_POST['glicemia'] == 119 ||
$_POST['glicemia'] == 120 ||
$_POST['glicemia'] == 122 ||
$_POST['glicemia'] == 123 ||
$_POST['glicemia'] == 124 ||
$_POST['glicemia'] == 125 ||
$_POST['glicemia'] == 126 ||
$_POST['glicemia'] == 128 ||
$_POST['glicemia'] == 129 ||
$_POST['glicemia'] == 130 ||
$_POST['glicemia'] == 132 ||
$_POST['glicemia'] == 133 ||
$_POST['glicemia'] == 138 ||
$_POST['glicemia'] == 167 ||
$_POST['glicemia'] == 168 ||
$_POST['glicemia'] == 170 ||
$_POST['glicemia'] == 171
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
) {
$class = 4;
}