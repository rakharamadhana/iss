@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Personalia') )

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-id-badge"></i> Personalia
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab">Profil</a>
                            </li>

                            <li class="nav-item">
                                <a href="#education" class="nav-link" aria-controls="education" role="tab" data-toggle="tab">Pendidikan</a>
                            </li>

                            <li class="nav-item">
                                <a href="#organization" class="nav-link" aria-controls="organization" role="tab" data-toggle="tab">Organisasi</a>
                            </li>

                            <li class="nav-item">
                                <a href="#achievement" class="nav-link" aria-controls="achievement" role="tab" data-toggle="tab">Prestasi</a>
                            </li>

                            <li class="nav-item">
                                <a href="#employment" class="nav-link" aria-controls="employment" role="tab" data-toggle="tab">Pekerjaan</a>
                            </li>

                            <li class="nav-item">
                                <a href="#training" class="nav-link" aria-controls="training" role="tab" data-toggle="tab">Training</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                @include('frontend.user.profile.tabs.profile')
                            </div><!--tab panel profile-->

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="education" aria-labelledby="education-tab">
                                @include('frontend.user.profile.tabs.education')
                            </div>

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="organization" aria-labelledby="organization-tab">
                                @include('frontend.user.profile.tabs.organization')
                            </div>

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="achievement" aria-labelledby="achievement-tab">
                                @include('frontend.user.profile.tabs.achievement')
                            </div>

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="employment" aria-labelledby="employment-tab">
                                @include('frontend.user.profile.tabs.employment')
                            </div>

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="training" aria-labelledby="training-tab">
                                @include('frontend.user.profile.tabs.training')
                            </div>
                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection
