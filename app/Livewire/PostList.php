<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url]
    public $sort = 'desc';

    #[Url]
    public $search = '';

    #[Url]
    public $popular = 'false';

    #[Url]
    public $category = '';

    public function setSort($sort)
    {
        $this->sort = $sort === 'desc' ? 'desc' : 'asc';
        $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    #[Computed]
    public function posts()
    {
        // return Post::published()
        //     ->orderBy('published_at', $this->sort)
        //     ->when($this->activeCategory, function ($query) {
        //         $query->withCategory($this->category);
        //     })
        //     ->when($this->popular, function ($query){
        //         $query->popular();
        //     })
        //     ->search($this->search)
        //     ->where('title', 'like', "%{$this->search}%")
        //     ->simplepaginate(3);

        return Post::orderBy('published_at', 'desc')
            ->search($this->search)
            ->where('title', 'like', "%{$this->search}%")
            ->simplepaginate(3);
    }

    #[Computed]
    public function activeCategory()
    {
        return Category::where('slug', $this->category)->first();
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
