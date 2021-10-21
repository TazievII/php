// Первое задание

$a = "Сейчас уверена, что покупка была самым глупым поступком в моей жизни, потому что жить надо по средствам. Через некоторое время после приобретения нового айфона подруга научила меня вести таблицу личных финансов. С тех пор я не совершаю необдуманных покупок, занялась накоплениями. Теперь могу спокойно купить хоть пять таких телефонов без кредитов, хотя доход за два года у меня почти не изменился.";
$link = "https://github.com";
$string_less = substr($a, 0, 180); - обезаем строку до 180 символов
$regular = '~[\S]+[\s]{1}[\S]+$~u'; - регулярное выражение для последних 2 слов в короткой новости
preg_match($regular, $string_less, $match); 
$link_more = $match[0];

$b = $string_less + "<a href="'$link'">"+ $link_more +"...</a>";

// Второе задание
$image_name = "link";
$image = imagecreatefrompng($image_name); 
$img = imagescale($image, 200, 100);
$image_ratio = 100 / 200 * 100;

<div style="max-width: 200px; height: 100px">
  <div style="padding-bottom: <?php echo $image_ratio; ?>%; position: relative; ">
    <image src="'+ $img +'" style="height: 100%; width: 100%; position: absolute;"/>
  </div>
</div>

// Третье задание
JOIN ON объединяет запросы, а FROM WHERE перебирает

// Четвертое задание
$n = 100; - длина массива
$count=0; - количество пар
for($i=0;$i<$n;$i++) {
  if ($arr[$i] == $arr[$i+1]) {
    $count++;
	}              
}
echo $count;
