<div class="container">
    <div class="row">

        <div class="col-8">

            <h5>Generate PDF Documents</h5>

            <div>
                {{-- <label for="header">Header:</label> --}}
                <textarea wire:model="header" placeholder="ADD HEADER" id="header" class="form-control" rows=3></textarea>
            </div>

            <div>
                {{-- <label for="middle">Middle Section:</label> --}}
                @foreach($middleTextareas as $index => $textarea)
                    <div class="middle-container" wire:ignore>
                        <textarea wire:model="middleTextareas.{{ $index }}"  class="mTextarea form-control" id="mTextArea" placeholder="ADD TEXT" rows=6></textarea>
                        @if($index > 0)
                            <button wire:click="removeTextarea({{ $index }})" class="removeBtn">X</button>
                        @endif
                        
                    </div>
                @endforeach

            </div>

            <div>
                {{-- <label for="footer">Footer:</label> --}}
                <textarea wire:model="footer" placeholder="ADD FOOTER" id="footer" class="form-control" rows=3></textarea>
            </div>
            <button wire:click="generatePdf" class="generatePDF btn btn-primary" >Generate PDF</button>

        </div>

        <div class="col-4 textAreaCount">
            <h5>Number of Textareas to Add</h5>
            <div class="addContainer">
                {{--<label for="newTextareaCount">Number of Textareas to Add:</label>--}}
                <input type="number" wire:model="newTextareaCount" id="newTextareaCount" min="1"  class="form-control"/>
                <button wire:click="addTextarea"  class="btn btn-md btn-primary">Add</button>
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/fge66p60nzrcg97eosvndgpcz5th7jijtev7yie4h2mbvmz8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
  tinymce.init({
    selector: 'textarea.mTextarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    setup: function (editor) {
      editor.on('change', function () {
        editor.save(); 
        var content = editor.getContent();
        content = stripTags(content);
        if (editor.id === 'header') {
          @this.set('header', content);
        } else {
          @this.set('middleTextareas', [content]); 
        }
      });
    }
  });

  function stripTags(html) {
    var doc = new DOMParser().parseFromString(html, 'text/html');
    return doc.body.textContent || "";
  }
</script>


