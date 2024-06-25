<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Rekomendasi UKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Formulir Rekomendasi UKM</h1>
        <form method="POST" action="{{ route('proses_formulir') }}">
            @csrf
            @foreach ($pertanyaan as $pert)
                <div class="mb-3">
                    <label class="form-label">{{ $pert->pertanyaan }}</label>
                    <div>
                        @foreach ($pilihan as $choiceKey => $choiceValue)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban[{{ $pert->id }}]" id="jawaban{{ $pert->id . $choiceKey }}" value="{{ $choiceKey }}">
                                <label class="form-check-label" for="jawaban{{ $pert->id . $choiceKey }}">{{ $choiceValue }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
