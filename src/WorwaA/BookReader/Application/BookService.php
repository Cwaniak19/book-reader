

namespace WorwaA\BookReader\Application;


use WorwaA\BookReader\Domain\Book\BookLibrary;

class BookService
{
    private $library;

    public function __construct(BookLibrary $library)
    {
        $this->library = $library;
    }


    public function readBook($title, $page = 1)
    {
        $book = $this->library->getBook($title);

        return $book->read($page);
    }
}