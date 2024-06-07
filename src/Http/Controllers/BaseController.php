<?php

namespace Rembon\LaravelCrudGenerator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BaseController extends Controller
{
    /**
     * @return ?string|array
     */
    public function getAllModels()
    {
        $path = app_path('Models');
        $files = File::allFiles($path);
        $modelNames = [];

        foreach ($files as $file) {
            $modelNames[] = $file->getFilenameWithoutExtension();
        }

        return $modelNames;
    }
}
