<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    //public $category_slug;
    public $category_id;
    public $parent_category;
    public $name;
    public $slug;
    public $scategory_id;
    //public $scategory_slug;

    public function mount($category_id,$scategory_id=null)
    {
        if($scategory_id)
        {
            $this->scategory_id = $scategory_id;
            $scategory = Subcategory::where('id', $scategory_id)->first();
            $this->scategory_id = $scategory->id;
            $this->parent_category = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;
        }else
        {
            $category = Category::where('id', $category_id)->first();
            $this->name = $category->name;
            $this->slug = $category->slug;
            $this->parent_category ="none";
        }

    }


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
            'slug'=>'required|unique:categories'
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name'=> 'required',
            'slug'=>'required|unique:categories'

        ]);
        if($this->scategory_id)
        {
            $scategory = Subcategory::find($this->scategory_id);
            $scategory->name =$this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            $scategory->save();
        }
        else
        {
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        }
        session()->flash('message', 'Category has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-category-component',['categories' => $categories])->layout('layouts.admin');
    }
}
