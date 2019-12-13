$link = 'http://nhonha.vihan.net/San-pham/HANG-NOI-THAT-77.html?min_price=400000000&max_price=6000000';
preg_match('/min_price=(.+)&max_price=(.+)/',$link,$match);
var_dump($match);

OUT PUT:
array(3) {
  [0]=>
  string(37) "min_price=200000000&max_price=4000000"
  [1]=>
  string(9) "200000000"
  [2]=>
  string(7) "4000000"
}
