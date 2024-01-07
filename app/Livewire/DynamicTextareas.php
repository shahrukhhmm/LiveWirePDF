<?php

namespace App\Livewire;

use Livewire\Component;
// use Barryvdh\DomPDF\PDF;
class DynamicTextareas extends Component
{
    public $header = '';
    public $middleTextareas = [''];
    public $footer= '';

    public $numberOfTextareasToAdd = 1;
    public $newTextareaCount = 1;

    
    public function addTextarea()
    {
        for ($i = 0; $i < $this->newTextareaCount; $i++) {
            $this->middleTextareas[] = '';
        }
        $this->newTextareaCount = 1; 
    }

    public function removeTextarea($index)
    {
        if (count($this->middleTextareas) > 1) {
            unset($this->middleTextareas[$index]);
            $this->middleTextareas = array_values($this->middleTextareas);
        }
    }

    public function generatePdf()
    {
        $data = [
            'header' => $this->header,
            'middleTextareas' => $this->middleTextareas,
            'footer' => $this->footer,
        ];
       
        return redirect()->route('download-pdf', $data);
    }

    public function render()
    {
        return view('livewire.dynamic-textareas');
    }

    
}