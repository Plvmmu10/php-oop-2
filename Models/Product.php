<?php
include __DIR__ . '/Category.php';
class Product
{
    public $name;
    public $type;
    public $image;
    public $price;

    public function __construct(string $name, string $type, string $image, string $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->image = $image;
        $this->price = $price;
    }


}


$cucciaGatto = new Category('Cuccia per gatto', 'Utility', 'https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', '30.00', 'cat');

$cucciaCane = new Category('Cuccia per cane', 'Utility', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp6GGvH-D7k4_FVudaNeKhp66yKCsvVYhMQQ&usqp=CAU', '35.00', 'dog');

$collareCane = new Category('Collare per cane', 'Utility', 'https://m.media-amazon.com/images/I/61J4lna3UVL._AC_SY355_.jpg', '35.00', 'dog');

$collareGatto = new Category('Collare per gatto', 'Utility', 'https://m.media-amazon.com/images/I/61l7qD5IqKL._AC_SY355_PIbundle-2,TopRight,0,0_SH20_.jpg', '8.00', 'cat');

$ciboCane = new Category('Croccantini per cane', 'Food', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ5SivANsaDphT7VSPcoSzLgAqDoS6cwkLSg&usqp=CAU', '12.00', 'dog');

$ciboCane->setWeight('2 kg');

$ciboGatto = new Category('Croccantini per gatto', 'Food', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnUc7b9F1AZeJhKO8jW4qwk01CulhdPJrNRw&usqp=CAU', '15.00', 'cat');

$ciboGatto->setWeight('2.5 kg');

$tennisCane = new Category('Pallina da tennis', 'Game', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjw-q57aRYFCMito_ujKqYxrTH0-LZgOwAfw&usqp=CAU', '3.00', 'dog');



$products = [$cucciaCane, $cucciaGatto, $collareCane, $collareGatto, $ciboCane, $ciboGatto, $tennisCane];