<div>
    <div>
        {{-- <label for="header">Header:</label> --}}
        <textarea wire:model="header" placeholder="ADD HEADER" id="header"></textarea>
    </div>

    <div>
        {{-- <label for="middle">Middle Section:</label> --}}
        @foreach($middleTextareas as $index => $textarea)
            <div class="middle-container">
                <textarea wire:model="middleTextareas.{{ $index }}"  class="mTextarea" placeholder="Add text"></textarea>
                @if($index > 0)
                    <button wire:click="removeTextarea({{ $index }})" class="removeBtn" >X</button>
                @endif
                
            </div>
        @endforeach

        <div class="addContainer">
            <label for="newTextareaCount">Number of Textareas to Add:</label>
            <input type="number" wire:model="newTextareaCount" id="newTextareaCount" min="1" />
            <button wire:click="addTextarea">Add</button>

        </div>

    </div>

    <div>
        {{-- <label for="footer">Footer:</label> --}}
        <textarea wire:model="footer" placeholder="ADD FOOTER" id="footer"></textarea>
    </div>

    <button wire:click="generatePdf" class="generatePDF">Generate PDF</button>
</div>

