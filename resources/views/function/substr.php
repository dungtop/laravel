<?php
function _substr($str, $length, $minword = 3)
{
$sub = '';
$len = 0;
foreach (explode(' ', $str) as $word)
{
    $part = (($sub != '') ? ' ' : '') . $word;
    $sub .= $part;
    $len += strlen($part);
    if (strlen($word) > $minword && strlen($sub) >= $length)
    {
      break;
    }
 }
    return $sub . (($len < strlen($str)) ? '...' : '');
}
?>
<?php
echo _substr('Chào Mừng Bạn Den Voi Thu Thuat Web',19,'UTF-8');
?>
