<?php
interface IBook {
    public function getTitle();
    public function getAuthor();
    public function getPublisher();
    public function getPublicationYear();
    public function getISBN();
    public function getChapters();
}
?>

<?php

class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $ISBN;
    private $chapters = [];

    public function __construct($title, $author, $publisher,$publicationYear, $ISBN, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->ISBN = $ISBN;
        $this->chapters = $chapters;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getauthor() {
        return $this->author;
    }

    public function getpublisher() {
        return $this->publisher;
    }

    public function getpublicationYear() {
        return $this->publicationYear;
    }
    public function getISBN() {
        return $this->ISBN;
    }

    public function getChapters() {
        return $this->chapters;
    }
}
?>
<?php
class BookList {
    private $books = array();

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getBookInfo()['Author'], $b->getBookInfo()['Author']);
        });
    }

    public function sortByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getBookInfo()['Title'], $b->getBookInfo()['Title']);
        });
    }

    public function sortByPublicationYear() {
        usort($this->books, function($a, $b) {
            return $a->getBookInfo()['PublicationYear'] - $b->getBookInfo()['PublicationYear'];
        });
    }
}
?>
<?php
// Chèn các đoạn mã PHP vào đây để xử lý sự kiện từ giao diện

// Tạo danh sách các cuốn sách
$bookList = new BookList();

// Xử lý thêm sách mới
if (isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $publicationYear = $_POST['publication_year'];
    $isbn = $_POST['isbn'];
    $chapters = explode(",", $_POST['chapters']);

    $newBook = new Book($title, $author, $publisher, $publicationYear, $isbn, $chapters);
    $bookList->addBook($newBook);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý danh sách cuốn sách</title>
</head>
<body>
    <h1>Quản lý danh sách cuốn sách</h1>

    <!-- Form thêm sách mới -->
    <h2>Thêm sách mới</h2>
    <form action="" method="post">
        <label for="title">Tên sách:</label>
        <input type="text" name="title" required><br>

        <label for="author">Tên tác giả:</label>
        <input type="text" name="author" required><br>

        <label for="publisher">Nhà xuất bản:</label>
        <input type="text" name="publisher" required><br>

        <label for="publication_year">Năm xuất bản:</label>
        <input type="number" name="publication_year" required><br>

        <label for="isbn">Số hiệu ISBN:</label>
        <input type="text" name="isbn" required><br>

        <label for="chapters">Danh mục các chương sách (phân tách bằng dấu phẩy):</label>
        <input type="text" name="chapters" required><br>

        <input type="submit" name="add_book" value="Thêm sách">
    </form>

    <!-- Hiển thị danh sách thông tin những cuốn sách -->
    <h2>Danh sách cuốn sách</h2>
    <table border="1">
        <tr>
            <th>Tên sách</th>
            <th>Tên tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Năm xuất bản</th>
            <th>ISBN</th>
            <th>Danh mục chương sách</th>
        </tr>
        <?php
        foreach ($bookList->getBooks() as $book) {
            $bookInfo = $book->getBookInfo();
            echo "<tr>";
            echo "<td>{$bookInfo['Title']}</td>";
            echo "<td>{$bookInfo['Author']}</td>";
            echo "<td>{$bookInfo['Publisher']}</td>";
            echo "<td>{$bookInfo['PublicationYear']}</td>";
            echo "<td>{$bookInfo['ISBN']}</td>";
            echo "<td>";
            echo implode(", ", $bookInfo['Chapters']);
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Chức năng sắp xếp danh sách -->
    <h2>Chức năng sắp xếp danh sách</h2>
    <form action="" method="post">
        <label for="sortOption">Chọn loại sắp xếp:</label>
        <select name="sort_option" id="sortOption">
            <option value="sortByAuthor">Theo tác giả</option>
            <option value="sortByTitle">Theo tên sách</option>
            <option value="sortByPublicationYear">Theo năm xuất bản</option>
        </select>
        <input type="submit" name="sort" value="Sắp xếp">
    </form>

    <?php
    // Xử lý sự kiện khi người dùng chọn loại sắp xếp
    if (isset($_POST['sort'])) {
        $sortOption = $_POST['sort_option'];
        switch ($sortOption) {
            case 'sortByAuthor':
                $bookList->sortByAuthor();
                break;
            case 'sortByTitle':
                $bookList->sortByTitle();
                break;
            case 'sortByPublicationYear':
                $bookList->sortByPublicationYear();
                break;
        }
    }
    ?>
</body>
</html>

