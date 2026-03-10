<?php

class Pagination
{
    
    public int $cnt_pages = 1;
    public int $current_page = 1;

    public function __construct(
        public int $page = 1,
        public int $per_page = 1,
        public int $total = 1,
    )
    {
        $this->cnt_pages = $this->getCountPages();
        $this->current_page = $this->getCurrentPage();
    }

    public function getCountPages(): int
    {
        return ceil($this->total / $this->per_page) ?: 1;
    }

    public function getCurrentPage(): int
    {
        if ($this->page < 1) {
            abort();
        }
        if ($this->page > $this->cnt_pages) {
            abort();
        }
        return $this->page;
    }

    public function getStart(): int
    {
        return ($this->current_page - 1) * $this->per_page;
    }

    public function outputLink(): void
    {
        for ($i = 1; $i <= $this->cnt_pages; $i++) 
        {
            echo "<a href=?page={$i} class='calc-link'>{$i}</a> ";
        }
    }

}