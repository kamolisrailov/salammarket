<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
//use PhpOffice\PhpWord\TemplateProcessor;
use Cart;
use Exception;

class AdminCreateOrderComponent extends Component
{

    public $svalue;
    public $rowId;
    public $qty = [];

    public function mount()
    {
        $this->svalue = "";


    }

    public function setQty($rowId) {
        //dd( $this->qty);
        if($this->qty!=""){
            Cart::instance('order')->update($rowId, $this->qty);
            session()->flash('order_add_message', 'Order qty is changed!');
        }

        //$this->emitTo('cart-count-component','refreshComponent');
    }

    public function createDoc()
    {

        if(Cart::instance('order')->count()>0)
        {

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontName('dejavu sans');
        $phpWord->addParagraphStyle('My Style', array(
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(6))
        );

        $section = $phpWord->addSection();
        $sectionStyle = $section->getStyle();
        // half inch left margin
        $sectionStyle->setMarginLeft(\PhpOffice\PhpWord\Shared\Converter::inchToTwip(.5));
        $sectionStyle->setMarginTop(\PhpOffice\PhpWord\Shared\Converter::inchToTwip(.5));
        // 2 cm right margin
        $sectionStyle->setMarginRight(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(1));


        $cellHCentered = array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER);
        $cellVCentered = array('valign' => 'center');
        $section->addText("СЧЕТ-ДОГОВОР № 9388", array( "size"=>8), array('align' => 'center'));

        $section->addText("       г.Ташкент                                                                                                                                                                      ".date("Y/m/d"), array("size"=>7),array('align' => 'left'));
        //$section->addText(date("Y/m/d"), array("size"=>7),array('align' => 'right'));


        $section->addText('
        ООО  "KANSLER", именуемое в дальнейшем «ПОСТАВЩИК», в лице Директора  Расулова У.И., действующего на основании Доверенности №3 от 17.06.2021г.
         с одной стороны, и OOO "INTERNATIONAL MEDIA SERVICE", именуемое(ый) в дальнейшем «ПОКУПАТЕЛЬ», в лице __________________________, действующего на
          основании __________________________ с другой стороны, совместно именуемые "Стороны", заключили настоящий договор о нижеследующем:
        ',array( "size"=>8));

        $section->addText("1. ПРЕДМЕТ ДОГОВОРА ", array( "size"=>8), array('align' => 'center'));

        $section->addText('
        1.1. Поставщик обязуется поставить товары, а Покупатель обязуется оплатить и принять их на условиях, установленных настоящим договором согласно следующей Спецификации:
        ',array( "size"=>8));


        $tableCenterValignText = array(
            'spaceBefore'=>0,
            'spaceAfter'=>0,
            'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER,
            'align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER
        );
        $fancyTableStyleName = 'Fancy Table';
        $fancyTableStyle = array('borderSize' => 6, 'borderColor' => 'black');
        //$fancyTableFirstRowStyle = array('borderBottomSize' => 78, 'borderBottomColor' => 'yellow', 'bgColor' => 'black');
        $fancyTableCellStyle = array();
        $fancyTableCellBtlrStyle = array('align' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
        $fancyTableFontStyle = array('size' => 8);
        $textCenter = array('align' => 'center');
        $phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle);
        $table = $section->addTable($fancyTableStyleName);



        $table->addRow(50);
        $cell1 = $table->addCell(300, $fancyTableCellStyle);
        $textrun1 = $cell1->addTextRun($cellHCentered);
        $textrun1->addText('№', $cellVCentered);
        $table->addCell(3500, $cellVCentered)->addText('Наименование товаров', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(500, $cellVCentered)->addText('Ед.изм.', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(1000, $cellVCentered)->addText('Кол-во', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(1500, $cellVCentered)->addText('Цена без НДС', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(1500, $cellVCentered)->addText('Ставка НДС', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(1500, $cellVCentered)->addText('Ставка НДС', $fancyTableFontStyle, $cellHCentered);
        $table->addCell(1500, $cellVCentered)->addText('Цена с НДС', $fancyTableFontStyle, $cellHCentered);


            foreach (Cart::instance('order')->content() as $item)
            {
                $table->addRow();
               // $table->addCell(500)->addText($item->model->id);

                $cell1 = $table->addCell(300, $fancyTableCellStyle);
                $textrun1 = $cell1->addTextRun($cellHCentered);
                $textrun1->addText($item->model->id, $fancyTableFontStyle);

                $table->addCell(3500)->addText($item->model->name, $fancyTableFontStyle);
                // $cell2 = $table->addCell(3500, $fancyTableCellStyle);
                // $textrun2 = $cell2->addTextRun($cellHCentered);
                // $textrun2->addText($item->model->name, $fancyTableFontStyle);


                //$table->addCell(1500)->addText('штук', $fancyTableFontStyle);
                $cell3 = $table->addCell(500, $fancyTableCellStyle);
                $textrun3 = $cell3->addTextRun($cellHCentered);
                $textrun3->addText('штук', $fancyTableFontStyle);

                //$table->addCell(500)->addText("1", $fancyTableFontStyle);
                $cell4 = $table->addCell(500, $fancyTableCellStyle);
                $textrun4 = $cell4->addTextRun($cellHCentered);
                $textrun4->addText($item->qty, $fancyTableFontStyle);

                //$table->addCell(1500)->addText($item->model->regular_price, $fancyTableFontStyle);
                $cell5 = $table->addCell(1500, $fancyTableCellStyle);
                $textrun5 = $cell5->addTextRun($cellHCentered);
                $textrun5->addText($item->model->regular_price, $fancyTableFontStyle);

                //$table->addCell(1500)->addText('15%', $fancyTableFontStyle);
                $cell6 = $table->addCell(1500, $fancyTableCellStyle);
                $textrun6 = $cell6->addTextRun($cellHCentered);
                $textrun6->addText('15%', $fancyTableFontStyle);

                //$table->addCell(1500)->addText($item->model->regular_price + 100, $fancyTableFontStyle);
                $cell7 = $table->addCell(1500, $fancyTableCellStyle);
                $textrun7 = $cell7->addTextRun($cellHCentered);
                $textrun7->addText($item->model->regular_price, $fancyTableFontStyle);

                //$table->addCell(1500)->addText($item->subtotal, $fancyTableFontStyle);
                $cell8 = $table->addCell(1500, $fancyTableCellStyle);
                $textrun8 = $cell8->addTextRun($cellHCentered);
                $textrun8->addText($item->subtotal, $fancyTableFontStyle);

             }







        $writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try
        {
            $writer->save('word-template/test.docx');
            $phpWord = \PhpOffice\PhpWord\IOFactory::load('word-template/test.docx');
            $writer1 = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');
            $writer1->save('word-template/test.pdf');
        }catch (Exception $e){

        }
    }
    else
    {
        session()->flash('message', 'Order is empty!');
    }
       // return response()->download(storage_path('test.docx'));
        // $template->addText('Hello Wrld!');
        // $fileName ='test';
        // $template->saveAs($fileName.'docx');
        // return response()->download($fileName.'docx');
    }





    public function createPdf()
    {
        // $domPdfPath = base_path('vendor/dompdf/dompdf');
        // \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        // \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        // $phpWord = \PhpOffice\PhpWord\IOFactory::load('word-template/test.docx');
        // $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'PDF');
        // $PDFWriter->save(public_path('word-template/test.pdf'));


    }






    use WithPagination;


    public function addproduct($product_id, $SKU, $product_name, $product_price) {

        Cart::instance('order')->add($product_id,$product_name,1,$product_price, ['sku'=>$SKU])->associate('App\Models\Product');
        session()->flash('message', 'Item added in Order');
        //return redirect()->route('product.cart');
    }


    public function destroy($rowId){
        Cart::instance('order')->remove($rowId);
        //$this->emitTo('cart-count-component','refreshComponent');
        session()->flash('order_add_message', 'Item has been removed');
    }


    public function destroyAll() {
        Cart::instance('order')->destroy();
        //$this->emitTo('cart-count-component','refreshComponent');
        session()->flash('order_add_message', 'Order has been cleared');
    }


    public function render()
    {
        //echo ($this->svalue);
        if($this->svalue !="")
        {
            $products = Product::where('SKU','like','%'. $this->svalue . '%')->paginate(10);
        }
        else
        {
            $products = Product::paginate(10);
        }

        return view('livewire.admin.admin-create-order-component',['products'=>$products])->layout('layouts.admin');
    }
}
