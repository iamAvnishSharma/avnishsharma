<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Link;
use Illuminate\Http\Request;

class AvalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $data = [];
        return view('avalon_form');
    }

    public function create2()
    { 
        $data = [];
        return view('avalon_form2')->with('data',$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $phpWord = new \PhpOffice\PhpWord\PhpWord();
        // $section = $phpWord->addSection();
        // $text = $section->addText($request->get('name'));
        // $text = $section->addText($request->get('email'));
        // $text = $section->addText($request->get('number'),array('name'=>'Arial','size' => 20,'bold' => true));
        // $section->addImage("./images/Krunal.jpg");  
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save('Appdividend.docx');
        // return response()->download(public_path('Appdividend.docx'));

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('Sample_Template_Avalon.docx'));

        $templateProcessor->setValue('date', date('jS F Y'));

        $templateProcessor->cloneBlock('twolineblock', 1 , true);
        $templateProcessor->cloneBlock('newsblock', 1 , true );

        $templateProcessor->setValue('headline', $request->get('headline'));
        $templateProcessor->setValue('twoliner', $request->get('twoliner'));
        $templateProcessor->setValue('news', $request->get('news'));
        $templateProcessor->setValue('source', $request->get('source'));
        //$templateProcessor->setValue('link', $request->get('link'));

        $link = new Link($request->get('link'),$request->get('source'), array('name' => 'arial', 'size'=>'11', 'underline'=> 'single', 'color'=>'#002366'));
        $templateProcessor->setComplexValue('link', $link);
        $templateProcessor->setComplexValue('link', $link);

        $templateProcessor->saveAs(public_path('Testing.docx'));
        return response()->download(public_path('Testing.docx'));
    }

    public function store2(Request $request)
    {

        $headline = $request->input('headline');
        $twoliner = $request->input('twoliner');
        $news = $request->input('news');
        $source = $request->input('source');
        $link = $request->input('link');

        $c = count($headline);
        
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('Sample_Template_Avalon2.docx'));

        $templateProcessor->setValue('date', date('jS F Y'));

        $templateProcessor->cloneBlock('twolineblock', $c , true, true);
        $templateProcessor->cloneBlock('newsblock', $c , true, true);

        for( $i = 1 ; $i <= $c ; $i++){
            $templateProcessor->setValue('theadline#'.$i, $headline[$i-1]);
            $templateProcessor->setValue('headline#'.$i, $headline[$i-1]);
            $templateProcessor->setValue('twoliner#'.$i, $twoliner[$i-1]);
            $templateProcessor->setValue('news#'.$i, $news[$i-1]);

            $ln = new Link($link[$i-1],$source[$i-1], array('name' => 'arial', 'size'=>'11', 'underline'=> 'single', 'color'=>'#002366'));
            $templateProcessor->setComplexValue('tlink#'.$i, $ln);
            $templateProcessor->setComplexValue('link#'.$i, $ln);
        }
        

        // $link = new Link($request->get('link'),$request->get('source'), array('name' => 'arial', 'size'=>'11', 'underline'=> 'single', 'color'=>'#002366'));
        // $templateProcessor->setComplexValue('link', $link);
        // $templateProcessor->setComplexValue('link', $link);

        $templateProcessor->saveAs(public_path('Testing.docx'));
        return response()->download(public_path('Testing.docx'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
