# Ck Editor Upload image

-   If you want to upload photo/image using by ck editor then you can follow my code. upload image no need for my full project. Just needed bellow code.

## Using Process

-   Make Route

```bash
Route::post('ckeditor-upload', [CkuploadController::class, 'ckeditorUpload'])->name('ckeditor.upload');
```

-   Using this script

```bash
    <script>
        ClassicEditor.create(document.querySelector('#upload'), {
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
            }
        }).catch(error => {
            console.error(error);
        });
    </script>
```

-   Using this Method

```bash
   public function ckeditorUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extention;
            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
```

# Cdn

-   Ck Editor

```bash
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
```
