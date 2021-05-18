<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $my_template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template.docx'));

        $my_template->setValue('name',"test");
        $my_template->setValue('email', "test");
        $my_template->setValue('number', "test");
        $my_template->setValue('address',"test");
        try{
            $my_template->saveAs(storage_path('test.docx'));
        }catch (Exception $e){
            //handle exception
        }
        return response()->download(storage_path("test.docx"));
    }
}
