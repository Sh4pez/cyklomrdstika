<?php

namespace App\Controllers;
use App\Models\Note;
use App\Models\Notetype;
use App\Models\Parcourtype;
use App\Models\Race;
use App\Models\Racetype;
use App\Models\Raceyear;
use App\Models\Result;
use App\Models\Rider;
use App\Models\Stage;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
        echo view('index.php');
    }
}
    