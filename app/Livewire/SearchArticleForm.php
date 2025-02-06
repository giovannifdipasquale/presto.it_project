<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class SearchArticleForm extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $query = "";
    
    public function searchArticles() 
    {
        $this->resetPage();
    }
    
    public function render()
    {
        if ($this->query === "") {
            return view('livewire.search-article-form', ['articles' => Article::where("is_accepted",true)->orderBy('created_at','desc')->paginate(10)]);
        }else{
            return view('livewire.search-article-form', ['articles' => Article::search($this->query)->where('is_accepted', true)->paginate(10)]);
        }
    }
}
