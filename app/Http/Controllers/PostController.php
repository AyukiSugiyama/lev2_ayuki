<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\Sex;
use App\Models\Relation;
use App\Models\Color;
use App\Models\Question;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Target $target, Sex $sex, Relation $relation, Color $color)
    {
        return view('presents/index')->with(['targets' => $target->get(), 'sexes' => $sex->get(), 'relations' => $relation->get(), 'colors' => $color->get()]);  
    }
    
     public function index2(Question $question)
    {
        return view('presents/index2')->with(['questions' => $question->get()]);  
    }
    
    public function create()
    {
    return view('presents/create');
    }
}
?>