<div class="row">
    <div class="col-12">

    @include('adminlte/flash')
    {{-- @include('guru/soal/tambah') --}}
    {{-- @include('guru/soal/edit') --}}
    {{-- @include('guru/soal/hapus') --}}
    
    <div class="row justify-content-end mb-3">
        <div class="col-md-3">
            <div class="input-group mb-2">
                <input wire:model="search" type="search" class="form-control" placeholder="Search">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-search"></i></div>
                </div>
            </div>
        </div>
    </div>

    @if ($soal->isNotEmpty())
        @foreach ($soal as $item)
            <div class="card">
                <div class="card-header">
                    Soal {{$this->page}}
                </div>
                <div class="card-body">
                    {{$item->soal}}
                </div>
            </div>
            <div class="card {{($item->jawaban == 'pilihan_a') ? 'border border-success' : ''}}">
                <div class="card-header">
                    Pilihan A
                </div>
                <div class="card-body">
                    {{$item->pilihan_a}}
                </div>
            </div>
            <div class="card {{($item->jawaban == 'pilihan_b') ? 'border border-success' : ''}}">
                <div class="card-header">
                    Pilihan B
                </div>
                <div class="card-body">
                    {{$item->pilihan_b}}
                </div>
            </div>
            <div class="card {{($item->jawaban == 'pilihan_c') ? 'border border-success' : ''}}">
                <div class="card-header">
                    Pilihan C
                </div>
                <div class="card-body">
                    {{$item->pilihan_c}}
                </div>
            </div>
            <div class="card {{($item->jawaban == 'pilihan_d') ? 'border border-success' : ''}}">
                <div class="card-header">
                    Pilihan D
                </div>
                <div class="card-body">
                    {{$item->pilihan_d}}
                </div>
            </div>
            <div class="card {{($item->jawaban == 'pilihan_e') ? 'border border-success' : ''}}">
                <div class="card-header">
                    Pilihan E
                </div>
                <div class="card-body">
                    {{$item->pilihan_e}}
                </div>
            </div>
        @endforeach

        {{$soal->links()}}
    @else
        <div class="alert alert-danger" role="alert">
        Quiz tidak memiliki soal
        </div>
    @endif

    </div>
</div>