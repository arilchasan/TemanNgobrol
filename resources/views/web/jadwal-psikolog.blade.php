@extends('web.components.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-3 p-5 border rounded shadow-sm">
        <a href="/psikolog/detail/{{ $psikolog->id }}" class="btn btn-outline-dark mb-3"
            style="color: #294587; border-color: #294587; background-color: transparent;"
            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">&larr; Kembali</a>

        <h3 class="fw-bold mb-3">Jadwalkan Layanan Anda</h3>
        <p>Lihat ketersediaan kami dan pilih tanggal serta waktu yang sesuai untuk Anda.</p>

        <form action="/order/simpan" method="POST">
            @csrf
            <div class="row">

                <div class="col-md-4 mb-4">
                    <label for="tanggal" class="form-label fw-semibold">Pilih hari dan tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required
                        min="{{ date('Y-m-d') }}">
                </div>


                <div class="col-md-4 mb-4">
                    <label class="form-label fw-semibold">Pilih sesi jam</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam1" value="09:00 - 10:20"
                            required>
                        <label class="form-check-label" for="jam1">09.00 - 10.20</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam2" value="11:00 - 12:20">
                        <label class="form-check-label" for="jam2">11.00 - 12.20</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam3" value="13:00 - 14:20">
                        <label class="form-check-label" for="jam3">13.00 - 14.20</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jam" id="jam4" value="15:00 - 16:20">
                        <label class="form-check-label" for="jam4">15.00 - 16.20</label>
                    </div>
                </div>


                <div class="col-md-4 mb-4">
                    <label class="form-label fw-semibold">Details</label>
                    <ul class="list-unstyled">
                        <li><strong>{{ $psikolog->nama }}</strong></li>
                        <li>{{ $psikolog->role }}</li>
                        <li id="selectedDate">Tanggal: -</li>
                        <li id="selectedTime">Jam: -</li>
                        <li>Total: Rp{{ number_format($psikolog->price, 0, ',', '.') }}</li>
                    </ul>
                    <button type="submit" class="btn mt-2"
                        style="color: white; background-color: #294587; border: 1px solid #294587;"
                        onmouseover="this.style.backgroundColor='transparent'; this.style.color='#294587';"
                        onmouseout="this.style.backgroundColor='#294587'; this.style.color='white';">
                        Atur Jadwal
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>'
    <script>
        const tanggalInput = document.getElementById('tanggal');
        const jamInputs = document.querySelectorAll('input[name="jam"]');
        const selectedDate = document.getElementById('selectedDate');
        const selectedTime = document.getElementById('selectedTime');

        const bulanIndo = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        function formatTanggalIndo(tanggal) {
            const parts = tanggal.split('-');
            const tahun = parts[0];
            const bulan = bulanIndo[parseInt(parts[1]) - 1];
            const hari = parts[2];

            return `${hari} ${bulan} ${tahun}`;
        }

        tanggalInput.addEventListener('change', function() {
            selectedDate.textContent = 'Tanggal: ' + formatTanggalIndo(this.value);
        });


        jamInputs.forEach(input => {
            input.addEventListener('change', function() {
                selectedTime.textContent = 'Jam: ' + this.value;
            });
        });
    </script>
@endsection
