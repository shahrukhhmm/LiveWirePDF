<div class="container">
    <div class="row">

        <div class="col-8">

            <h4 class="heading">Generate PDF Documents</h4>

            <div>
                <textarea wire:model="header" placeholder="ADD HEADER" id="header" class="form-control" rows=3></textarea>
            </div>

            <div>
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
                <textarea wire:model="footer" placeholder="ADD FOOTER" id="footer" class="form-control" rows=3></textarea>
            </div>
            <button wire:click="generatePdf" class="generatePDF btn btn-primary" >Generate PDF</button>

        </div>

        <div class="col-4 textAreaCount">
            <h5>Number of Textareas to Add</h5>
            <div class="addContainer">
                <input type="number" wire:model="newTextareaCount" id="newTextareaCount" min="1"  class="form-control"/>
                <button wire:click="addTextarea"  class="btn btn-md btn-primary">Add</button>
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/fge66p60nzrcg97eosvndgpcz5th7jijtev7yie4h2mbvmz8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


  <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/fge66p60nzrcg97eosvndgpcz5th7jijtev7yie4h2mbvmz8/tinymce/6/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea',
      width: 600,
      height: 300,
      plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
      ],
      toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css',
      setup: function (editor) {
      editor.on('change', function () {
        editor.save(); 
        var content = editor.getContent();
        
        if (editor.id == 'header') {
          @this.set('header', content);
        } else if (editor.id == 'footer') {
          @this.set('footer', content);
        } else {
          @this.set('middleTextareas', [content]);
        }
      });
    }
      
    });
  </script>
