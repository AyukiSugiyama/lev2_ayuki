<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\Sex;
use App\Models\Relation;
use App\Models\Color;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
     public function index(Question $question)
    {
        return view('questions/index')->with(['questions' => $question->get()]);  
    }
    
    public function create()
    {
    return view('questions/create');
    }
}
?>