function addDigits($num) {
    if (strlen($num) == 1) {
        return $num;
    }
    if (strlen($num) > 1) {
        for ($i = 0; $i < strlen($num); $i++)
        $arr[] = substr($num, $i, 1);
        $res = array_sum($arr);
        if (strlen($res) == 1) {
            return $res;
        }
    }
    if (strlen($res) > 1) {
        for ($i = 0; $i < strlen($res); $i++)
        $arr1[] = substr($res, $i ,1);
        return array_sum($arr1);
        
    }
}

echo addDigits(0); // 0
echo addDigits(1); // 1
echo addDigits(9); // 9
echo addDigits(10); // 1
echo addDigits(38); // 2
