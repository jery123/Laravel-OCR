<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Image Uploadtitle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row" style="height: 300px">
            <div class="col-6 border p-3">
                <form action="{{route('ocr-scaning')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="file" name="image" class="form-control" required>
                        @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button class="btn btn-primary mt-2">Scan</button>
                </form>
            </div>
            <div class="col-6 border p-3">
                @if(session('text'))
                    {{session('text')}}
                @endif
            </div>
        </div>
    </div>
</body>
</html>
