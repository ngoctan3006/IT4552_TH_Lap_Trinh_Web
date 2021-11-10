<?php
namespace Info;
class Page 
{
    private $page;
    private $title;
    private $year;
    private $copyright;

    function __construct($title, $year, $copyright)
    {
        $this->page = '';
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
    }

    private function addHeader()
    {
        $this->page .= "<html><head><meta charset='UTF-8'><title>$this->title</title></head>";
    }

    public function addContent($content) 
    {
        $this->addHeader();
        $this->page .="<body>Title: $this->title<br>Copyright: &copy;$this->copyright<br>Year: $this->year<br>Content: $content</body>";
    }

    public function get() 
    {
        return $this->page;
    }
}
