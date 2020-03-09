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
                    <td>{{ $personals->birthplace }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $personals->birthdate }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $personals->gender }}</td>
                </tr>
                <tr>
                    <th>Alamat KTP</th>
                    <td>{{ $personals->identity_address }}</td>
                </tr>
                <tr>
                    <th>Alamat Kost</th>
                    <td>{{ $personals->current_address }}</td>
                </tr>
                <tr>
                    <th>Golongan Darah</th>
                    <td>{{ $personals->blood_type }}</td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>{{ $personals->interest }}</td>
                </tr>
            </table>
        </div>

        <h3>Kontak</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>No Handphone</th>
                    <td colspan="2">{{ $personals->phone_number }}</td>
                </tr>
                <tr>
                    <th>Kontak Darurat (Nama/Nomor)</th>
                    <td>{{ $personals->emergency_contact_name }}</td>
                    <td>{{ $personals->emergency_contact_phone_number }}</td>
                </tr>
            </table>
        </div>

        <h3>Data Keluarga</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Nama Ayah</th>
                    <td colspan="4">{{ $families->father_name }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td colspan="4">{{ $families->mother_name }}</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua</th>
                    <td colspan="4">{{ $families->parent_address }}</td>
                </tr>
                <tr>
                    <th>Anak ke</th>
                    <td>{{ $families->child_number }}</td>
                    <td>dari</td>
                    <td>{{ $families->child_total }}</td>
                    <td>bersaudara</td>
                </tr>
            </table>
        </div>

        <h3>Akademik</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Status Akademik</th>
                    <td>{{ $academics->academic_status }}</td>
                </tr>
                <tr>
                    <th>Fakultas</th>
                    <td>{{ $academics->faculty }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $academics->study_program }}</td>
                </tr>
                <tr>
                    <th>Angkatan</th>
                    <td>{{ $academics->year_enrolled }}</td>
                </tr>
                <tr>
                    <th>NRM</th>
                    <td>{{ $academics->registration_number }}</td>
                </tr>
                <tr>
                    <th>PIN SIAKAD</th>
                    <td>{{ $academics->pin_number }}</td>
                </tr>
                <tr>
                    <th>Bayaran UKT</th>
                    <td>Rp. {{number_format( $academics->payment_amount )}}</td>
                </tr>
                <tr>
                    <th>Sumber Dana</th>
                    <td>{{ $academics->fund_source }}</td>
                </tr>
                <tr>
                    <th>Status Beasiswa</th>
                    <td>{{ $academics->scholarship_status }}</td>
                </tr>
                <tr>
                    <th>Nama Beasiswa</th>
                    <td>{{ $academics->scholarship_name }}</td>
                </tr>
                <tr>
                    <th>Jumlah Beasiswa</th>
                    <td>Rp. {{number_format( $academics->scholarship_amount )}}</td>
                </tr>
            </table>
        </div>


        <h3>Amanah</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Formal</th>
                    <td>{{ $positions->formal }}</td>
                </tr>
                <tr>
                    <th>Internal</th>
                    <td>{{ $positions->internal }}</td>
                </tr>
                <tr>
                    <th>Pemimpin</th>
                    <td>{{ $positions->internal_leader_name }}</td>
                </tr>
            </table>
        </div>

        <h3>Mentoring</h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Tahun Mulai</th>
                    <td>{{ $mentoring->starting_year }}</td>
                </tr>
                <tr>
                    <th>Jalur</th>
                    <td>{{ $mentoring->entrance }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $mentoring->status }}</td>
                </tr>
                <tr>
                    <th>Hafalan Quran</th>
                    <td>{{ $mentoring->quran_recitation }} juz</td>
                </tr>
            </table>
        </div>
    </div>
</div><!-- row -->
