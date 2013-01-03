<HTML><HEAD><TITLE>matrix.php</TITLE></HEAD><BODY BGCOLOR=Grey>
<PRE>
&lt;?php
<font color=darkgreen>/*
 $Id: matrix.php,v 1.1 2001/05/14 03:37:18 doug Exp $
 http://www.bagley.org/~doug/shootout/
*/</font>

set_time_limit(0);

$SIZE = 30;

<font color=blue><b>function</b></font> mkmatrix ($rows, $cols) {
    $count = 1;
    $mx = array();
    <font color=blue><b>for</b></font> ($i=0; $i&lt;$rows; $i++) {
    <font color=blue><b>for</b></font> ($j=0; $j&lt;$cols; $j++) {
        $mx[$i][$j] = $count++;
    }
    }
    <font color=blue><b>return</b></font>($mx);
}

<font color=blue><b>function</b></font> mmult ($rows, $cols, $m1, $m2) {
    $m3 = array();
    <font color=blue><b>for</b></font> ($i=0; $i&lt;$rows; $i++) {
    <font color=blue><b>for</b></font> ($j=0; $j&lt;$cols; $j++) {
        $x = 0;
        <font color=blue><b>for</b></font> ($k=0; $k&lt;$cols; $k++) {
        $x += $m1[$i][$k] * $m2[$k][$j];
        }
        $m3[$i][$j] = $x;
    }
    }
    <font color=blue><b>return</b></font>($m3);
}

$n = ($argc == 2) ? $argv[1] : 1;
$m1 = mkmatrix($SIZE, $SIZE);
$m2 = mkmatrix($SIZE, $SIZE);
<font color=blue><b>while</b></font> ($n--) {
    $mm = mmult($SIZE, $SIZE, $m1, $m2);
}
<font color=blue><b>print</b></font> "{$mm[0][0]} {$mm[2][3]} {$mm[3][2]} {$mm[4][4]}\n";
?&gt;
</PRE>
</BODY></HTML>
