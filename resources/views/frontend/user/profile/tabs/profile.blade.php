<div class="row">
    <div class="col col-sm-4 order-1 order-sm-2  mb-4">
        <div class="card mb-4 bg-light">
            <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

            <div class="card-body">
                <h4 class="card-title">
                    {{ $logged_in_user->name }}<br/>
                </h4>

                <p class="card-text">
                    <small>
                        <i class="fas fa-envelope"></i> {{ $logged_in_user->email }}<br/>
                        <i class="fas fa-calendar-check"></i> Dibuat {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                    </small>
                </p>

                <p class="card-text">

                    <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                        <i class="fas fa-user-circle"></i> @lang('navs.frontend.user.account')
                    </a>

                    @can('view backend')
                        &nbsp;<a href="{{ route('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                            <i class="fas fa-user-secret"></i> @lang('navs.frontend.user.administration')
                        </a>
                    @endcan
                </p>
            </div>
        </div>
    </div><!--col-md-4-->

    <div class="col order-1 order-sm-1 mb-4">
        <div class="table-responsive">
            <h3>Biodata</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $logged_in_user->name }}</td>
                </tr>
                <tr>
                    <th>@lang('labels.frontend.user.profile.email')</th>
                    <td>{{ $logged_in_user->email }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>24 Januari 1997</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>Pria</td>
                </tr>
                <tr>
                    <th>Alamat KTP</th>
                    <td>Jl. Sejahtera Blok A 33 No.1 RT 7 RW 7 Pondok Jurang Mangu Indah</td>
                </tr>
                <tr>
                    <th>Alamat Kost</th>
                    <td>Jl. Pisangan Baru Utara No.54 RT 7 RW 12 Pisangan Baru</td>
                </tr>
                <tr>
                    <th>Golongan Darah</th>
                    <td>A</td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>Main Komputer</td>
                </tr>
            </table>
        </div>

        <h3>Kontak</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>No Handphone</th>
                    <td colspan="2">+628176977298</td>
                </tr>
                <tr>
                    <th>Kontak Darurat (Nama/Nomor)</th>
                    <td>Chaerul B. (Ayah)</td>
                    <td>+6281380225638</td>
                </tr>
            </table>
        </div>

        <h3>Data Keluarga</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Nama Ayah</th>
                    <td colspan="4">Chaerul Boestami</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td colspan="4">Rahayu Boestami</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua</th>
                    <td colspan="4">Jl. Benda Timur 2 Blok E 70 No. 9 RT 7 RW 15 Pamulang 2</td>
                </tr>
                <tr>
                    <th>Anak ke</th>
                    <td>1</td>
                    <td>dari</td>
                    <td>4</td>
                    <td>bersaudara</td>
                </tr>
            </table>
        </div>

        <h3>Akademik</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Status Akademik</th>
                    <td>Sedang Kuliah S1</td>
                </tr>
                <tr>
                    <th>Fakultas</th>
                    <td>Teknik</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>Pendidikan Teknik Informatika dan Komputer</td>
                </tr>
                <tr>
                    <th>Angkatan</th>
                    <td>2014</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>5235141932</td>
                </tr>
                <tr>
                    <th>PIN SIAKAD</th>
                    <td>123456</td>
                </tr>
                <tr>
                    <th>Bayaran UKT</th>
                    <td>Rp. {{number_format(6000000)}}</td>
                </tr>
                <tr>
                    <th>Sumber Dana</th>
                    <td>Beasiswa</td>
                </tr>
                <tr>
                    <th>Status Beasiswa</th>
                    <td>Ya</td>
                </tr>
                <tr>
                    <th>Nama Beasiswa</th>
                    <td>BIDIKMISI</td>
                </tr>
                <tr>
                    <th>Jumlah Beasiswa</th>
                    <td>Rp. {{number_format(6000000)}}</td>
                </tr>
            </table>
        </div>


        <h3>Amanah</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Formal</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Internal</th>
                    <td>Keilmuan</td>
                </tr>
                <tr>
                    <th>Pemimpin</th>
                    <td>Adjie Boestami</td>
                </tr>
            </table>
        </div>

        <h3>Mentoring</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Tahun Mulai</th>
                    <td>2014</td>
                </tr>
                <tr>
                    <th>Jalur</th>
                    <td>Kampus</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>Aktif</td>
                </tr>
                <tr>
                    <th>Hafalan Quran</th>
                    <td>1 juz</td>
                </tr>
            </table>
        </div>

    </div>

</div><!-- row -->
