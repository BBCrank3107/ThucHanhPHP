<?php
$conn = mysqli_connect("localhost", "root", "", "rss") or die("Không thể kết nối CSDL");
mysqli_set_charset($conn, "utf8");

$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);

header("Content-type: text/xml");
echo('<?xml version="1.0" ?>');
echo('<rss version="2.0">');
echo("<channel>");
echo("<title>Học Web | Học làm web pro</title>");
echo("<link>http://hocweb.com.vn</link>");
echo("<description>Website hocweb.com.vn được hình thành từ ý tưởng giúp các em sinh viên trường đại học công nghiệp thực phẩm có 1 nơi học tập thực tế gắn với nhu cầu doanh nghiệp từ đó lan rộng ra mô hình học tập thực tế cùng doanh nghiệp cho các sinh viên trong các tỉnh thành</description>");

while ($row = mysqli_fetch_array($result)) {
    echo '<item>';
    echo '<title>' . htmlspecialchars($row['title']) . '</title>';
    echo '<link>' . htmlspecialchars($row['link']) . '</link>';
    echo '<description>' . htmlspecialchars($row['description']) . '</description>';
    echo '</item>';
}

echo("</channel>");
echo('</rss>');

mysqli_close($conn);
?>
